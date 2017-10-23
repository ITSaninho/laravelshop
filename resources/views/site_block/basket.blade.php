
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

        @foreach ($products as $product)
                <!-- Shop Items -->
        <div class="shop-tile">
            <a href="shop-single.html" class="thumbnail">
                @foreach($product->product->images as $images)
                    @if($images->main == 1)
                        <img src="/data/products/{{$product->product->alias}}/images/{{$images->name}}" alt="{{$product->product->title}}">
                    @endif
                @endforeach
            </a>
            <div class="description">
                <div class="shop-meta">
                    <div class="column">
                        <span class="hidden-xs">in</span>
                            <span>
                                <i class="icon-ribbon hidden-xs"></i>
                                <a href="#">{{$product->product->title}}</a>
                            </span>
                    </div>
                    <div class="column">
                        <span class="price">${{$product->product->price}}</span>
                    </div>
                </div>
                <h3 class="shop-title"><a href="{{ route('product',['product_alias' => $product->product->alias])}}">{{$product->product->title}}</a></h3>
                <div class="articles-form">

                    <ul class="nav nav-tabs">
                        <?php $i=1; ?>
                        <?php $a=1; ?>
                        @foreach($product->product->product_options as $product_options)
                            @if($i==1)
                                <?php $active = 'active'; ?>
                            @else
                                <?php $active = ''; ?>
                            @endif
                            <li class="{{$active}}"><a data-toggle="tab" href="#tab{{$i}}">{{$product_options->color}}</a></li>
                            <?php $i++; ?>
                        @endforeach
                    </ul>

                    <div class="tab-content">
                        @foreach($product->product->product_options as $product_options)
                            @if($a==1)
                                <?php $active = 'in active'; ?>
                                <div id="tab{{$a}}" class="tab-pane fade  {{$active}}">
                                    @else
                                        <?php $active = ''; ?>
                                        <div id="tab{{$a}}" class="tab-pane fade  {{$active}}">
                                            @endif
                                            <form method="post" action="{{route('order')}}">
                                                {{csrf_field()}}
                                                <input type="hidden" name="id" value="{{$product_options->id}}"/>
                                                <input type="hidden" name="product_id" value="{{$product_options->product_id}}"/>
                                                <input type="hidden" name="size_string" value="{{$product_options->size_string}}"/>
                                                <input type="hidden" name="size_integer" value="{{$product_options->size_integer}}"/>
                                                <input type="hidden" name="length" value="{{$product_options->length}}"/>
                                                <input type="hidden" name="height" value="{{$product_options->height}}"/>
                                                <input type="hidden" name="width" value="{{$product_options->width}}"/>
                                                <input type="hidden" name="weight" value="{{$product_options->weight}}"/>
                                                <input type="hidden" name="price" value="{{$product_options->price}}"/>
                                                <input type="hidden" name="color" value="{{$product_options->color}}"/>
                                                <input type="hidden" name="size_string" value="{{$product_options->size_string}}"/>
                                                <input type="hidden" name="material" value="{{$product_options->material}}"/>


                                                <p>{{$product_options->size_string}}</p>
                                                <p>{{$product_options->size_integer}}</p>
                                                <p>{{$product_options->length}}</p>
                                                <p>{{$product_options->height}}</p>
                                                <p>{{$product_options->width}}</p>
                                                <p>{{$product_options->weight}}</p>
                                                <p>{{$product_options->price}}</p>
                                                <p>{{$product_options->color}}</p>
                                                <p>{{$product_options->material}}</p>
                                                <div class="shop-tools">
                                                    <span class="text-lg">Кількість: </span>
                                                    <div class="count">
                                                        <div class="input-group quantity_goods">
                                                            <input type="number" step="1" min="1" max="{{$product_options->count}}" id="num_count" name="quantity" value="1" title="Qty">
                                                        </div>
                                                    </div>
                                                    <span class="text-lg">В комплекті {{$product_options->count}}</span>
                                                    <p class="text-lg">Загальна сума: $344.99</p>
                                                    <br>
                                                    <button type="submit" class="btn btn-primary btn-icon-right waves-effect waves-light">Купити<i class="icon-bag"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                        <?php  $a++; ?>
                                        @endforeach
                                </div>
                    </div>
            </div>
        </div><!-- .shop-tile -->



        @endforeach


        <div class="text-center">
            {{ $products->links() }}
        </div>
</div><!-- .col-lg-9.col-md-8 -->


