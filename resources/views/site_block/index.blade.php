
        <!-- Content -->
        <div class="col-lg-9 col-md-8 col-lg-push-3 col-md-push-4">

            <!-- Shop Filters -->
            <div class="shop-filters-wrap">
                <div class="shop-filters">
                    <div class="inner">
                        <div class="shop-filter">
                            <div class="shop-filter-dropdown">
                                <span>Categories</span>
                                <div class="dropdown">
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" checked> Hardware
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox"> Gadgets
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox"> Laptops
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox"> Wearables
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox"> Software
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox"> Cameras
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="shop-filter">
                            <div class="shop-filter-dropdown">
                                <span>Price</span>
                                <div class="dropdown">
                                    <label class="radio">
                                        <input type="radio" name="price" checked> $100 - $500 <span class="text-gray">(10)</span>
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="price"> $500 - $1000 <span class="text-gray">(8)</span>
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="price"> $1000 - $2000 <span class="text-gray">(4)</span>
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="price"> $2000 - $5000 <span class="text-gray">(3)</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="shop-filter">
                            <div class="shop-filter-dropdown">
                                <span>Sorting</span>
                                <div class="dropdown">
                                    <label class="radio">
                                        <input type="radio" name="sort" checked> By Price Ascending
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="sort"> By Price Descending
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="sort"> By Rating Ascending
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="sort"> By Rating Descending
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .shop-fiters -->
                <div class="shop-search">
                    <div class="widget widget_search">
                        <form method="post" class="search-box" action="{{route('search')}}">
                            {{ csrf_field() }}
                            <input type="text" name="q" class="form-control" placeholder="Search Blog">
                            <button type="submit"><i class="icon-search"></i></button>
                        </form>
                    </div>
                </div><!-- .shop-search -->
            </div><!-- .shop-fiters-wrap -->
            @if(Session::has('message'))
                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
            @endif

            @foreach ($products as $product)
            <!-- Shop Items -->
            <div class="shop-tile">
                <a href="shop-single.html" class="thumbnail">
                    @foreach($product->images as $images)
                        @if($images->main == 1)
                            <img src="/data/products/{{$product->alias}}/images/{{$images->name}}" alt="{{$product->title}}">
                        @endif
                    @endforeach
                </a>
                <div class="description">
                    <div class="shop-meta">
                        <div class="column">
                            <span class="hidden-xs">in</span>
                            <span>
                                <i class="icon-ribbon hidden-xs"></i>
                                <a href="#">{{$product->category->name}}</a>
                            </span>
                        </div>
                        <div class="column">
                            <span class="price">${{$product->price}}</span>
                        </div>
                        <div class="column">
                            @if(Auth::user())
                                <a href="{{route('basket',['id' => $product->id])}}" class="btn btn-sm btn-primary btn-icon-right waves-effect waves-light">
                                    Add to Cart
                                    <i class="icon-bag"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                    <h3 class="shop-title"><a href="{{ route('product',['product_alias' => $product->alias])}}">{{$product->title}}</a></h3>
                    @if(count($product->product_ratings)>0)
                        <?php $a=0 ?>
                        @foreach($product->product_ratings as $product_ratings)
                                <?php $a += $product_ratings->rank ?>
                        @endforeach
                        <p>Рейтинг: {{$a/count($product->product_ratings)}}</p>
                        @for($i = 0;$i< $rank = (integer)($a/count($product->product_ratings));$i++)
                            <img src="/img/shop/star.png" width="50px" style="float: left">
                        @endfor
                        @if($a%count($product->product_ratings)==1)
                                <img src="/img/shop/star2.png" width="50px" style="float: left">
                        @endif
                        <div class="clear" style="margin-bottom: 10px;"></div>
                    @else
                        <p>Немає рейтингу</p>
                        <div class="clear" style="margin-bottom: 10px;"></div>
                    @endif
                    @if(!$product->sale == 0)
                        <img src="/img/shop/sale.png" width="50px" style="float: left">
                    @endif
                    @if(!$product->new == 0)
                        <img src="/img/shop/new.png" width="50px">
                    @endif
                </div>
            </div><!-- .shop-tile -->



            @endforeach


            <div class="text-center">
                {{ $products->links() }}
            </div>
        </div><!-- .col-lg-9.col-md-8 -->


