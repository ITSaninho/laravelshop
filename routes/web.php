<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('product/{product_alias}', function ($product_alias) {


    //return $product_alias;
    $products = \App\Product::where('alias',$product_alias)->get();
    $category = \App\Category::all();

    function makeArray($categoryes){
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
    };

    $tree = makeArray($category);


    return view('site.product',compact('tree','products'));
});

/*
Route::get('product/{product_alias}', function($product_alias) {
    return \App\Product::where('alias', $product_alias)->firstOrFail();
});

*/
Route::match(['get','post'],'/{page?}',['uses'=>'IndexController@index','as'=>'post', 'only' => 'index'])->where('page','[0-9]+');
Route::post('/search',['uses'=>'IndexController@search','as'=>'search']);
Route::match(['post'],'product/{product_alias}',['uses'=>'ProductController@addComment','as'=>'product'])->where('product_alias','[\w-]+');


Route::match(['get'],'delivery',['uses'=>'DeliveryController@index','as'=>'delivery']);
Route::match(['get'],'about',['uses'=>'AboutController@index','as'=>'about']);
Route::match(['get'],'contacts',['uses'=>'ContactsController@index','as'=>'contacts']);
Route::match(['post'],'contacts',['uses'=>'ContactsController@addMessage','as'=>'contacts']);
Route::match(['get'],'faq',['uses'=>'FaqController@index','as'=>'faq']);
Route::match(['post'],'faq',['uses'=>'FaqController@addMessage']);


Route::get('category/{category}/{page?}',['uses'=>'CategoryController@index','as'=>'category'])->where(['category'=>'[0-9]+'],['page'=>'[0-9]+']);


//Реєстрація, авторизація
Route::auth();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Профіль користувача
Route::group(['prefix'=>'profile', 'middleware' => ['auth']],   function() {

    Route::get('/',['uses' => 'Profile\IndexController@index']);

    Route::get('basket/{id}',['uses'=>'Profile\BasketController@addproduct','as'=>'basket'])->where('id','[0-9]+');
    Route::get('basket',['uses'=>'Profile\BasketController@index','as'=>'basket']);

    //Route::get('order',['uses'=>'IndexController@index']);
    Route::post('order',['uses'=>'Profile\OrderController@addproduct','as'=>'order']);
    //tut
    Route::post('buy',['uses'=>'Profile\OrderController@buy','as'=>'buy']);
    //Route::post('order_last',['uses'=>'Profile\OrderController@order_last','as'=>'order_last']);
    Route::get('order/{id}',['uses'=>'Profile\OrderController@show','as'=>'order_id'])->where('id','[0-9]+');

    Route::get('edit',['uses'=>'Profile\ProfileController@edit','as'=>'profile_edit']);
    Route::post('edit',['uses'=>'Profile\ProfileController@update']);

    Route::get('messages',['uses'=>'Profile\MessageController@index','as'=>'profile_messages_list']);
    Route::get('dialog/{dialog}',['uses'=>'Profile\MessageController@show','as'=>'dialog'])->where(['dialog'=>'[0-9]+']);
    Route::post('dialog/{dialog}',['uses'=>'Profile\MessageController@store','as'=>'dialog'])->where(['dialog'=>'[0-9]+']);

    Route::get('user/{id}',['uses'=>'Profile\UserController@show','as'=>'user'])->where('id','[0-9]+');
    Route::post('user/{id}',['uses'=>'Profile\MessageController@store']);
    Route::get('users',['uses'=>'Profile\UserController@index','as'=>'users']);
    //Route::get('users/{id}',['uses'=>'Profile\UserController@show','as'=>'users'])->where(['id'=>'[0-9]+']);


    Route::get('address',['uses'=>'Profile\ProfileController@edit','as'=>'address']);
    Route::post('address',['uses'=>'Profile\ProfileController@update','as'=>'address']);

    Route::get('profile_setting',['uses'=>'Profile\ProfileController@profile_setting_edit','as'=>'profile_setting']);
    Route::post('profile_setting',['uses'=>'Profile\ProfileController@profile_setting_update','as'=>'profile_setting']);

    Route::get('profile_password',['uses'=>'Profile\ProfileController@password_edit','as'=>'profile_password']);
    Route::post('profile_password',['uses'=>'Profile\ProfileController@password_update','as'=>'profile_password']);



    Route::get('product',['uses'=>'Profile\ProductController@index','as'=>'profile_product']);
    Route::get('product/{id}',['uses'=>'Profile\ProductController@show','as'=>'profile_product_show_id'])->where(['id'=>'[0-9]+']);
    Route::get('product/create',['uses'=>'Profile\ProductController@create','as'=>'profile_product_create']);
    Route::post('product/create',['uses'=>'Profile\ProductController@store']);
    Route::get('product/edit/{id}',['uses'=>'Profile\ProductController@edit','as'=>'profile_product_edit'])->where(['id'=>'[0-9]+']);
    Route::post('product/edit/{id}',['uses'=>'Profile\ProductController@update'])->where(['id'=>'[0-9]+']);
    Route::get('product/delete/{id}',['uses'=>'Profile\ProductController@delete', 'as'=>'profile_product_delete'])->where(['id'=>'[0-9]+']);

    Route::get('confirm_order/{id}',['uses'=>'Profile\OrderController@confirm_order','as'=>'confirm_order'])->where(['id'=>'[0-9]+']);


    Route::get('orders',['uses'=>'Profile\OrderController@index','as'=>'profile_orders']);
    Route::get('orders/{content}',['uses'=>'Profile\OrderController@show','as'=>'profile_comments_show_id'])->where(['content'=>'[\w-]+']);
    Route::get('orders/create',['uses'=>'Profile\OrderController@create','as'=>'profile_comments_create']);
    Route::post('orders/create',['uses'=>'Profile\OrderController@store']);
    Route::get('orders/edit/{id}',['uses'=>'Profile\OrderController@edit','as'=>'profile_comments_edit'])->where(['id'=>'[0-9]+']);
    Route::post('orders/edit/{id}',['uses'=>'Profile\OrderController@update'])->where(['id'=>'[0-9]+']);
    Route::get('orders/delete/{id}',['uses'=>'Profile\OrderController@delete', 'as'=>'profile_comments_delete'])->where(['id'=>'[0-9]+']);



});
