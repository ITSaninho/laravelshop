<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';


    protected $fillable = [
        'parent_id',
        'name',
        'alias',
        'keywords',
        'description',
    ];


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
    }

    public function Products() {
        return $this->hasMany('App\Product');
    }
}
