<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Category;
use Illuminate\Support\Facades\Input as Input;

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
    protected $redirectTo = '/';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }


    public function showRegistrationForm(){

        $category = Category::all();
        $tree = $this->makeArray($category);

        return view('auth.register',compact('category','tree'));
    }

    private function makeArray($categoryes){
        $childs=[];

        foreach($categoryes as $category){
            $childs[$category->parent_id][]=$category;
        }

        foreach($categoryes as $category){
            if(isset($childs[$category->id]))
                $category->childs=$childs[$category->id];

        }
        if(count($childs)>0){
            $tree=$childs[0];
        }
        else {
            $tree=[];
        }
        return $tree;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = new User();

        if(Input::hasFile('avatar')){
            $avatar = Input::file('avatar');
            mkdir("data/users/".$data['email'], 0755);
            mkdir("data/users/".$data['email']."/avatar", 0755);
            $avatar->move('data/users/'.$data['email'].'/avatar', $avatar->getClientOriginalName());
            $user->avatar = $avatar->getClientOriginalName();
        }

        //$user->avatar = $data['avatar'];
        $user->name = $data['name'];
        $user->sename = $data['sename'];
        $user->phone = $data['phone'];
        $user->year = $data['year'];
        $user->month = $data['month'];
        $user->day = $data['day'];
        $user->country = $data['country'];
        $user->region = $data['region'];
        $user->city = $data['city'];
        $user->street = $data['street'];
        $user->house = $data['house'];
        $user->index = $data['index'];
        $user->sex = $data['sex'];
        $user->public = 1;
        $user->status = 1;
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();


        return $user;
    }
}
