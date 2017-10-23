<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category)
    {

        //return $id;
        //return $product_alias;
        //return $_GET['product_alias'];

        $products = Product::where('category_id',$category)->where('public',1)->orderBy('id', 'desc')->paginate(5);


        //$products = Product::findByAlias($product_alias);
        //$products = Product::findByAlias('alias',$product_alias);
        $category = Category::all();
        $tree = $this->makeArray($category);


        return view('site.index',compact('category','tree','products'));
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
