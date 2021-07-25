<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $auth = auth()->user();
        $posts = $auth->post->all();
        // dd($posts); //For Single(Parent) Post :Description Only
        $postItems = $posts[0]->files->all(); //Accessing Post Files you can Reverse with first
        $postArray = json_encode($postItems);
        return view('profiles.formPost', compact('posts', 'postArray'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'file' => 'required',
            'file.*' => 'mimes:jpeg,jpg,png',
            'description' => 'max:512'
        ]);

        if ($request->hasFile('file')) {
            $post_id = Post::create([
                'user_id' => auth()->id(),
                'description' => $data["description"]
            ]);

            foreach($request->file('file') as $file){
                $fileName = time().rand(0, 1000).pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $fileName = $fileName.'.'.$file->getClientOriginalExtension();
                Storage::disk('local')->put($fileName, file_get_contents($file));
                $resizedImage = Image::make(public_path("/storage/userPost/$fileName"))->fit(1200, 1200);
                $resizedImage->save();
                File::create([
                    'user_id' => auth()->id(),
                    'file' => "/storage/userPost/$fileName",
                    'post_id' => $post_id["id"]
                ]);
            }

        }
        return redirect('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        //$auth = auth()->user();
        //$posts = $auth->post->all();
        //$postItems = $posts[0]->files->all(); //Accessing Post Files you can Reverse with first

        //$postArray = json_encode($postItems);
        $postItems = Post::find($post);
        $items = json_encode($postItems->files->all());
        return [$items, $postItems];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
