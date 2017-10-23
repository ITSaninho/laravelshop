<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::where('public', '=', 1)->orderBy('id', 'desc')->paginate(3);
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


    public function search(Request $request)
    {

        $products = Product::where('public', 1)->where('title','like','%'. $request->input('q').'%')->orderBy('id', 'desc')->paginate(3);

        $category = Category::all();
        $tree = $this->makeArray($category);


        return view('site.index',compact('category','tree','products'));
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
