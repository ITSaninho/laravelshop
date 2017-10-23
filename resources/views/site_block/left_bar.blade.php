<!-- Sidebar -->
<div class="col-lg-3 col-md-4 col-lg-pull-9 col-md-pull-8">
    <div class="demo-container clear">
        <div class="test">
            <p class="p_category">Категорії</p>
            <ul id="mega-1" class="mega-menu">
                @foreach($tree as $category)
                    <li><a href="{{ route('category',['category' => $category->id])}}">{{$category->name}}</a>
                    @if(isset($category->childs))
                        @include('site_block.category_block',['tree'=>$category->childs])
                    @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

</div><!-- .col-lg-3.col-md-4 -->