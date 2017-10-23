<ul id="sub_menu">
@foreach($tree as $category)
    <li id="sub_menu_li"><a href="{{ route('category',['category' => $category->id])}}" id="sub_menu_li_a">{{$category->name}}</a>
        @if(isset($category->childs))
            @include('site_block.category_block',['tree'=>$category->childs])
        @endif
    </li>
@endforeach
</ul>
