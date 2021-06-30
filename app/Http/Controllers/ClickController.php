<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Post;
use Illuminate\Http\Request;

class ClickController extends Controller
{
    public function store($id){
        $files = File::where('post_id', $id)->orderBy('id', 'DESC')->get();
        foreach ($files as $file) {
            echo ($file->file);
        }
    }
}
