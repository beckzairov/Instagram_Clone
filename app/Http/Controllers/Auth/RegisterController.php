<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'profile_img' => ['sometimes', 'image', 'mimes:jpg,jpeg,bmp,png', 'max:2040'],
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if (request()->has('profile_img')) {
            $profileImg = request()->file('profile_img');
            $profileImgName = pathinfo($profileImg->getClientOriginalName(), PATHINFO_FILENAME);
            $profileUniqName = time() . '_'.$profileImgName . '.' . $profileImg->getClientOriginalExtension();
            Storage::disk('profile')->put($profileUniqName, file_get_contents($profileImg));
            $resizedImage = Image::make(public_path("/storage/profile/$profileUniqName"))->fit(1200, 1200);
            $resizedImage->save();
            return User::create([
                'profile_img' => "/storage/profile/$profileUniqName",
                'name' => $data['name'],
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        } else {
            return User::create([
                'profile_img' => $data['profile_img'],
                'name' => $data['name'],
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        }
    }
}
