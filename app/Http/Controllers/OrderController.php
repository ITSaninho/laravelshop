<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_options;
use App\Order;
use App\Delivery;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
    }

    public function addproduct(Request $request)
    {
        //return dd($request);

        $product_option = Product_options::where('id', $request->id)->first();
        $product_option->count = $product_option->count - $request->quantity;
        $product_option->save();
        //return dd($product_option);

        $model = new Order();

        $model->status = 1;
        $model->length = $request->length;
        $model->height = $request->height;
        $model->width = $request->width;
        $model->size_integer = $request->size_integer;
        $model->size_string = $request->size_string;
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
        $model->saller_id = $request->saller_id;
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
