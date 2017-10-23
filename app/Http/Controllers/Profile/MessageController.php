<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Product_options;
use App\Order;
use App\Delivery;
use App\Category;
use App\User;
use App\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $messages = Message::where('last_message','=',1)
            ->orderBy('created_at', 'desc')
            ->get();

        $users = User::where('id','!=',Auth::user()->id)
            //->where('id','=',$user->user_id)
            //->orWhere('id','=',$user->whom_id)
            ->get();

        return view('profile.messages', compact('messages','users'));
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
        $model = new Message();


        $results1 = Message::where('user_id','=',Auth::user()->id)
            ->where('whom_id','=',$request->input('whom_id'))
            ->where('last_message','=',1)->get();
        $results2 = Message::where('user_id','=',$request->input('whom_id'))
            ->where('whom_id','=',Auth::user()->id)
            ->where('last_message','=',1)->get();
        foreach($results1 as $result1){
            if($result1->last_message > 0){
                $result1->last_message = 0;
                $result1->save();
            }
        }
        foreach($results2 as $result2){
            if($result2->last_message > 0){
                $result2->last_message = 0;
                $result2->save();
            }
        }



        $model->last_message = 1;
        $model->user_id = Auth::user()->id;
        $model->whom_id = $request->input('whom_id');

        $model->text = $request->input('text');
        $model->read_it = 0;

        $model->save();

        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($dialog)
    {
        $messages = Message::where('user_id','=',Auth::user()->id)
            ->orWhere('whom_id','=',Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('profile.dialog',compact('messages','dialog'));
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
