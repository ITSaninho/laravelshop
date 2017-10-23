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
use App\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $orders = Order::all()->where('user_id',Auth::user()->id);
        //$orders = Order::where('user_id',Auth::user()->id)->orderBy('id', 'desc')->paginate(3);
        //$products = Product::where('alias','=',2)->get();


        return view('profile.order', compact('orders'));
    }



    public function addproduct(Request $request)
    {
        //return dd($request);

        $product_option = Product_options::where('id', $request->id)->first();
        $product_option->count = $product_option->count - $request->quantity;
        $product_option->save();
        //return dd($product_option);

        $model = new Order();

        $model->status = 0;
        //$model->length = $request->length;
        //$model->height = $request->height;
        //$model->width = $request->width;
        $model->size_integer = $request->size_integer;
        $model->size_string = $request->size_string;
        if(empty($request->width)){
            $model->width = '0';
        }else{
            $model->width = $request->width;
        }
        if(empty($request->height)){
            $model->height = '0';
        }else{
            $model->height = $request->height;
        }
        if(empty($request->length)){
            $model->length = '0';
        }else{
            $model->length = $request->length;
        }
        if(empty($request->weight)){
            $model->weight = '0';
        }else{
            $model->weight = $request->weight;
        }
        $model->color = $request->color;
        $model->material = $request->material;
        $model->count = $request->quantity;
        $model->price = $request->price;
        $model->user_id = Auth::user()->id;
        $model->product_id = $request->product_id;
        $model->sum = $request->price*$request->quantity;
        $model->save();


        //$orders = Order::where('user_id', Auth::user()->id)->get()->last();
        $order = Order::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->first();

        //return dd($orders);

        $deliveryes = Delivery::all();

        $category = Category::all();

        $tree = $this->makeArray($category);



        return view('site.order_buy',compact('order','deliveryes','tree'));
    }

    public function buy(Request $request)
    {


        $user = User::find(Auth::user()->id);
        //return dd($user);
        $user->index = $request->index;
        $user->country = $request->country;
        $user->region = $request->region;
        $user->city = $request->city;
        $user->street = $request->street;
        $user->house = $request->house;
        $user->phone = $request->phone;

        $order = Order::find($request->id);
        $order->status = 1;
        $order->save();



        $payment = new Payment();
        $payment->name = 'test';
        $payment->account = '6546453435';
        $payment->our_account = '35345675643';
        $payment->user_id = Auth::user()->id;
        $payment->order_id = $request->id;
        $payment->delivery_id = $request->delivery_id;
        $payment->save();


        $payment = Payment::where('order_id', $request->id)->orderBy('id', 'desc')->first();

        //$order = Order::find($request->id);


        $category = Category::all();
        $tree = $this->makeArray($category);

        return view('profile.order_last',compact('payment','tree'));
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



    public function confirm_order($id)
    {
        $order = Order::find($id);

        $order->status = 2;

        $order->save();

        return redirect()->back()->with('message','Товар добавлено в корзину');
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
        $order = Order::find($id);


        return view('profile.order_id',compact('order'));
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
