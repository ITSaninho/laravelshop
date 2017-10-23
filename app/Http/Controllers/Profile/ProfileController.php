<?php

namespace App\Http\Controllers\Profile;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Product_options;
use App\Order;
use App\Delivery;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $orders = Order::all()->where('user_id',Auth::user()->id);


        return view('profile.index', compact('orders'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('profile.address');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->country = $request->country;
        $user->region = $request->region;
        $user->city = $request->city;
        $user->street = $request->street;
        $user->house = $request->house;
        $user->index = $request->index;
        $user->save();

        return redirect()->back();
    }

    public function profile_setting_edit()
    {
        return view('profile.profile_setting');
    }

    public function profile_setting_update(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->sename = $request->sename;
        $user->phone = $request->phone;
        $user->year = $request->year;
        $user->month = $request->month;
        $user->day = $request->day;
        $user->sex = $request->sex;
        $user->country = $request->country;
        $user->region = $request->region;
        $user->city = $request->city;
        $user->street = $request->street;
        $user->house = $request->house;
        $user->index = $request->index;
        $user->save();

        return redirect()->back();
    }

    public function password_edit()
    {
        return view('profile.change_password');
    }

    public function password_update(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->sename = $request->sename;
        $user->phone = $request->phone;
        $user->year = $request->year;
        $user->month = $request->month;
        $user->day = $request->day;
        $user->sex = $request->sex;
        $user->country = $request->country;
        $user->region = $request->region;
        $user->city = $request->city;
        $user->street = $request->street;
        $user->house = $request->house;
        $user->index = $request->index;
        $user->save();

        return redirect()->back();
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
