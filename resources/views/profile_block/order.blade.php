
<!-- Content -->
<div class="col-lg-9 col-md-8 col-lg-push-3 col-md-push-4">

            <!-- Shop Items -->
    <div class="articles-form">

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Всі замовлення</a></li>
            <li><a data-toggle="tab" href="#order0">В очікуванні</a></li>
            <li><a data-toggle="tab" href="#order1">Відправлені</a></li>
            <li><a data-toggle="tab" href="#order2">Очікується відгук</a></li>
            <li><a data-toggle="tab" href="#order3">Відкриті суперечки</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                @foreach(Auth::user()->orders as $order)

                        <!-- Shop Items -->
                <div class="shop-tile">
                    <a href="shop-single.html" class="thumbnail">
                        @foreach($order->product->images as $images)
                            @if($images->main == 1)
                                <img src="/data/products/{{$order->product->alias}}/images/{{$images->name}}" alt="{{$order->product->title}}">
                            @endif
                        @endforeach
                    </a>
                    <div class="description">
                        <div class="shop-meta">
                            <div class="column">
                                <span class="hidden-xs">Продавець</span>
              <span>
                <i class="icon-ribbon hidden-xs"></i>
                <a href="{{ route('user',['id' => $order->product->user_id])}}"><p>{{$order->product->user->name}}</p></a>
              </span>
                            </div>
                        </div>
                        <h3 class="shop-title"><a href="{{ route('order_id',['id' => $order->id])}}"><p>{{$order->product->title}}</p></a></h3>
                        <p>Замовлення № {{$order->id}}</p>
                        <p>Назва товару: {{$order->product->title}}</p>
                        <p>Статус: {{$order->status}}</p>
                        @if(!empty($order->length))
                            <p>Довжина: {{$order->length}}</p>
                        @endif
                        @if(!empty($order->height))
                            <p>Висота: {{$order->height}}</p>
                        @endif
                        @if(!empty($order->width))
                            <p>Ширина: {{$order->width}}</p>
                        @endif
                        @if(!empty($order->size_integer))
                            <p>Розмір(чисельний): {{$order->size_integer}}</p>
                        @endif
                        @if(!empty($order->size_string))
                            <p>Розмір: {{$order->size_string}}</p>
                        @endif
                        @if(!empty($order->weight))
                            <p>Вага: {{$order->weight}}</p>
                        @endif
                        @if(!empty($order->color))
                            <p>Колір: {{$order->color}}</p>
                        @endif
                        @if(!empty($order->material))
                            <p>Матеріал: {{$order->material}}</p>
                        @endif
                        <p>Кількість: {{$order->count}}</p>
                        <p>Сума: {{$order->sum}}</p>
                    </div>
                </div><!-- .shop-tile -->

                @endforeach
            </div>


            <div id="order0" class="tab-pane fade">
                @foreach($orders as $order)
                    @if($order->status == 0)
                        <div class="shop-tile">
                            <a href="shop-single.html" class="thumbnail">
                                @foreach($order->product->images as $images)
                                    @if($images->main == 1)
                                        <img src="/data/products/{{$order->product->alias}}/images/{{$images->name}}" alt="{{$order->product->title}}">
                                    @endif
                                @endforeach
                            </a>
                            <div class="description">
                                <div class="shop-meta">
                                    <div class="column">
                                        <span class="hidden-xs">Продавець</span>
              <span>
                <i class="icon-ribbon hidden-xs"></i>
                <a href="{{ route('user',['id' => $order->product->user_id])}}"><p>{{$order->product->user->name}}</p></a>
              </span>
                                    </div>
                                </div>
                                <h3 class="shop-title"><a href="{{ route('order_id',['id' => $order->id])}}"><p>{{$order->product->title}}</p></a></h3>
                                <p>Замовлення № {{$order->id}}</p>
                                <p>Назва товару: {{$order->product->title}}</p>
                                <p>Статус: {{$order->status}}</p>
                                @if(!empty($order->length))
                                    <p>Довжина: {{$order->length}}</p>
                                @endif
                                @if(!empty($order->height))
                                    <p>Висота: {{$order->height}}</p>
                                @endif
                                @if(!empty($order->width))
                                    <p>Ширина: {{$order->width}}</p>
                                @endif
                                @if(!empty($order->size_integer))
                                    <p>Розмір(чисельний): {{$order->size_integer}}</p>
                                @endif
                                @if(!empty($order->size_string))
                                    <p>Розмір: {{$order->size_string}}</p>
                                @endif
                                @if(!empty($order->weight))
                                    <p>Вага: {{$order->weight}}</p>
                                @endif
                                @if(!empty($order->color))
                                    <p>Колір: {{$order->color}}</p>
                                @endif
                                @if(!empty($order->material))
                                    <p>Матеріал: {{$order->material}}</p>
                                @endif
                                <p>Кількість: {{$order->count}}</p>
                                <p>Сума: {{$order->sum}}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <div id="order1" class="tab-pane fade">
                @foreach($orders as $order)
                    @if($order->status == 1)
                        <div class="shop-tile">
                            <a href="shop-single.html" class="thumbnail">
                                @foreach($order->product->images as $images)
                                    @if($images->main == 1)
                                        <img src="/data/products/{{$order->product->alias}}/images/{{$images->name}}" alt="{{$order->product->title}}">
                                    @endif
                                @endforeach
                            </a>
                            <div class="description">
                                <div class="shop-meta">
                                    <div class="column">
                                        <span class="hidden-xs">Продавець</span>
              <span>
                <i class="icon-ribbon hidden-xs"></i>
                <a href="{{ route('user',['id' => $order->product->user_id])}}"><p>{{$order->product->user->name}}</p></a>
              </span>
                                    </div>
                                </div>
                                <h3 class="shop-title"><a href="{{ route('order_id',['id' => $order->id])}}"><p>{{$order->product->title}}</p></a></h3>
                                <p>Замовлення № {{$order->id}}</p>
                                <p>Назва товару: {{$order->product->title}}</p>
                                <p>Статус: {{$order->status}}</p>
                                @if(!empty($order->length))
                                    <p>Довжина: {{$order->length}}</p>
                                @endif
                                @if(!empty($order->height))
                                    <p>Висота: {{$order->height}}</p>
                                @endif
                                @if(!empty($order->width))
                                    <p>Ширина: {{$order->width}}</p>
                                @endif
                                @if(!empty($order->size_integer))
                                    <p>Розмір(чисельний): {{$order->size_integer}}</p>
                                @endif
                                @if(!empty($order->size_string))
                                    <p>Розмір: {{$order->size_string}}</p>
                                @endif
                                @if(!empty($order->weight))
                                    <p>Вага: {{$order->weight}}</p>
                                @endif
                                @if(!empty($order->color))
                                    <p>Колір: {{$order->color}}</p>
                                @endif
                                @if(!empty($order->material))
                                    <p>Матеріал: {{$order->material}}</p>
                                @endif
                                <p>Кількість: {{$order->count}}</p>
                                <p>Сума: {{$order->sum}}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <div id="order2" class="tab-pane fade">
                @foreach($orders as $order)
                    @if($order->status == 2)
                        <div class="shop-tile">
                            <a href="shop-single.html" class="thumbnail">
                                @foreach($order->product->images as $images)
                                    @if($images->main == 1)
                                        <img src="/data/products/{{$order->product->alias}}/images/{{$images->name}}" alt="{{$order->product->title}}">
                                    @endif
                                @endforeach
                            </a>
                            <div class="description">
                                <div class="shop-meta">
                                    <div class="column">
                                        <span class="hidden-xs">Продавець</span>
              <span>
                <i class="icon-ribbon hidden-xs"></i>
                <a href="{{ route('user',['id' => $order->product->user_id])}}"><p>{{$order->product->user->name}}</p></a>
              </span>
                                    </div>
                                </div>
                                <h3 class="shop-title"><a href="{{ route('order_id',['id' => $order->id])}}"><p>{{$order->product->title}}</p></a></h3>
                                <p>Замовлення № {{$order->id}}</p>
                                <p>Назва товару: {{$order->product->title}}</p>
                                <p>Статус: {{$order->status}}</p>
                                @if(!empty($order->length))
                                    <p>Довжина: {{$order->length}}</p>
                                @endif
                                @if(!empty($order->height))
                                    <p>Висота: {{$order->height}}</p>
                                @endif
                                @if(!empty($order->width))
                                    <p>Ширина: {{$order->width}}</p>
                                @endif
                                @if(!empty($order->size_integer))
                                    <p>Розмір(чисельний): {{$order->size_integer}}</p>
                                @endif
                                @if(!empty($order->size_string))
                                    <p>Розмір: {{$order->size_string}}</p>
                                @endif
                                @if(!empty($order->weight))
                                    <p>Вага: {{$order->weight}}</p>
                                @endif
                                @if(!empty($order->color))
                                    <p>Колір: {{$order->color}}</p>
                                @endif
                                @if(!empty($order->material))
                                    <p>Матеріал: {{$order->material}}</p>
                                @endif
                                <p>Кількість: {{$order->count}}</p>
                                <p>Сума: {{$order->sum}}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <div id="order3" class="tab-pane fade">
                @foreach($orders as $order)
                    @if($order->status == 3)
                        <div class="shop-tile">
                            <a href="shop-single.html" class="thumbnail">
                                @foreach($order->product->images as $images)
                                    @if($images->main == 1)
                                        <img src="/data/products/{{$order->product->alias}}/images/{{$images->name}}" alt="{{$order->product->title}}">
                                    @endif
                                @endforeach
                            </a>
                            <div class="description">
                                <div class="shop-meta">
                                    <div class="column">
                                        <span class="hidden-xs">Продавець</span>
              <span>
                <i class="icon-ribbon hidden-xs"></i>
                <a href="{{ route('user',['id' => $order->product->user_id])}}"><p>{{$order->product->user->name}}</p></a>
              </span>
                                    </div>
                                </div>
                                <h3 class="shop-title"><a href="{{ route('order_id',['id' => $order->id])}}"><p>{{$order->product->title}}</p></a></h3>
                                <p>Замовлення № {{$order->id}}</p>
                                <p>Назва товару: {{$order->product->title}}</p>
                                <p>Статус: {{$order->status}}</p>
                                @if(!empty($order->length))
                                    <p>Довжина: {{$order->length}}</p>
                                @endif
                                @if(!empty($order->height))
                                    <p>Висота: {{$order->height}}</p>
                                @endif
                                @if(!empty($order->width))
                                    <p>Ширина: {{$order->width}}</p>
                                @endif
                                @if(!empty($order->size_integer))
                                    <p>Розмір(чисельний): {{$order->size_integer}}</p>
                                @endif
                                @if(!empty($order->size_string))
                                    <p>Розмір: {{$order->size_string}}</p>
                                @endif
                                @if(!empty($order->weight))
                                    <p>Вага: {{$order->weight}}</p>
                                @endif
                                @if(!empty($order->color))
                                    <p>Колір: {{$order->color}}</p>
                                @endif
                                @if(!empty($order->material))
                                    <p>Матеріал: {{$order->material}}</p>
                                @endif
                                <p>Кількість: {{$order->count}}</p>
                                <p>Сума: {{$order->sum}}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
    </div>


</div><!-- .col-lg-9.col-md-8 -->


