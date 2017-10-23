
<!-- Content -->
<div class="col-lg-9 col-md-8 col-lg-push-3 col-md-push-4">

    @foreach ($products as $product)

            <!-- Single Product -->
    <section class="shop-single">
            <div class="col-lg-4 col-md-4 space-bottom-2x">
                <div class="image-carousel">
                    <div class="inner img_product">
                        @foreach($product->images as $images)
                            <img src="/data/products/{{$product->alias}}/images/{{$images->name}}" alt="{{$product->title}}">
                        @endforeach
                    </div>
                </div><!-- .image-carousel -->
            </div><!-- .col-lg-5.col-md-6 -->
            <div class="col-lg-8 col-md-8 space-bottom-2x">
                <div class="shop-tile">
                    <div class="description">
                        <div class="shop-meta">
                            <div class="column">
                                <span class="hidden-xs">in</span>
                                <span>
                                    <i class="icon-ribbon hidden-xs"></i>
                                    <a href="#">{{$product->category->name}}</a>
                                 </span>
                            </div>
                        </div>
                        <h3 class="shop-title">{{$product->title}}</h3>

                        <div class="articles-form">

                            <ul class="nav nav-tabs">
                                <?php $i=1; ?>
                                <?php $a=1; ?>
                                @foreach($product->product_options as $product_options)
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
                                @foreach($product->product_options as $product_options)
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
                                                <input type="hidden" name="seller_id" value="{{$product->user_id}}"/>
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
                                            <p>{{$product_options->lenght}}</p>
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
                                                @if(Auth::user())
                                                    <a href="{{route('basket',['id' => $product->id])}}" class="btn btn-sm btn-primary btn-icon-right waves-effect waves-light">
                                                        Add to Cart
                                                        <i class="icon-bag"></i>
                                                    </a>
                                                @endif
                                            </div>
                                            </form>
                                        </div>
                                    <?php  $a++; ?>
                                @endforeach
                            </div>
                        </div>
                    </div><!-- .shop-tile -->
                </div>
            </div><!-- .col-lg-7.col-md-6 -->

            <!-- Shop Items -->

    <div class="articles-form">

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Опис товару</a></li>
            <li><a data-toggle="tab" href="#menu1">Відгуки({{count($product->product_ratings)}})</a></li>
            <li><a data-toggle="tab" href="#menu2">Доставка і оплата</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                {{$product->text}}
            </div>

            <div id="menu1" class="tab-pane fade">
                @if(count($product->product_ratings)>0)
                    <?php $a=0 ?>
                    @foreach($product->product_ratings as $product_ratings)
                        <?php $a += $product_ratings->rank ?>
                    @endforeach
                    <p>Середній рейтинг: {{$a/count($product->product_ratings)}} із 5 (Відгуків: {{count($product->product_ratings)}})</p>
                    @for($i = 0;$i< (integer)($a/count($product->product_ratings));$i++)
                        <img src="/img/shop/star.png" width="50px" style="float: left">
                    @endfor
                    @if($a%count($product->product_ratings)==1)
                        <img src="/img/shop/star2.png" width="50px" style="float: left">
                    @endif
                    <div class="clear" style="margin-bottom: 10px;"></div>
                        <hr>

                    @foreach($product->product_ratings as $product_ratings)
                        <p><span>{{$product_ratings->user->email}}</span><span>{{$product_ratings->created_at}}</span></p>

                            <p>Оцынка: {{$product_ratings->rank}} із 5 </p>
                            @for($i = 0;$i< $product_ratings->rank;$i++)
                                <img src="/img/shop/star.png" width="50px" style="float: left">
                            @endfor
                            <div class="clear" style="margin-bottom: 10px;"></div>

                        <p>{{$product_ratings->text}}</p>
                            <div class="clear" style="margin-bottom: 10px;"></div>
                        <hr>
                    @endforeach
                @else
                    <p>Немає рейтингу</p>
                    <div class="clear" style="margin-bottom: 10px;"></div>
                @endif
            </div>

            <div id="menu2" class="tab-pane fade">
                <p>Возврат товара</p>
                <p>Если полученный товар низкого качества или не соответствует описанию, продавец обязуется принять возврат товара до закрытия заказа (до нажатия на "Подтвердить получение товара" или истечения срока подтверждения) и вернуть полную стоимость. Стоимость обратной пересылки оплачивается Вами. Или Вы можете оставить товар себе и договориться о возмещении стоимости напрямую с продавцом.</p>
                <br>
                <p>Продавец услуг</p>
                <p>Доставка в срок. Если Вы не получили товар в течение 60 дней, Вы можете потребовать полного возмещения стоимости до закрытия заказа (до нажатия на "Подтвердить получение товара" или истечения срока подтверждения)</p>
            </div>
        </div>
    </div>
    </section><!-- .shop-single -->
    @endforeach

</div><!-- .col-lg-9.col-md-8 -->





