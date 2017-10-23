
<!-- Content -->
<div class="col-lg-9 col-md-8 col-lg-push-3 col-md-push-4">

    <!-- Shop Items -->
    <div class="articles-form">

        @if(Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Товари</a></li>
            <li><a data-toggle="tab" href="#0">Відгуки</a></li>
            <li><a data-toggle="tab" href="#1">Замовлення</a></li>
            <li><a data-toggle="tab" href="#2">Підтверджено</a></li>
            <li><a data-toggle="tab" href="#3">Доставлено</a></li>
            <li><a data-toggle="tab" href="#4">Додати товар</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
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
            </div>


            <div id="0" class="tab-pane fade">

                @foreach(Auth::user()->products as $product)
                    @foreach($product->product_ratings as $product_ratings)
                <div class="shop-tile">
                    <a href="shop-single.html" class="thumbnail">
                            @foreach($product_ratings->product->images as $images)

                                @if($images->main == 1)
                                    <img src="/data/products/{{$product_ratings->product->alias}}/images/{{$images->name}}" alt="{{$product_ratings->product->title}}">
                                @endif
                            @endforeach
                    </a>
                    <div class="description">
                        <div class="shop-meta">
                            <div class="column">
                                <span class="hidden-xs">Користувач</span>
                                        <span>
                                            <i class="icon-ribbon hidden-xs"></i>
                                            <a href="{{ route('user',['id' => $product_ratings->user_id])}}"><p>{{$product_ratings->user->email}}</p></a>
                                        </span>
                            </div>
                        </div>
                        <p>{{$product_ratings->rank}}</p>
                        <p>{{$product_ratings->text}}</p>
                    </div>
                </div>
                    @endforeach
                @endforeach
            </div>

            <div id="1" class="tab-pane fade">
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
                                        <span class="hidden-xs">Покупець</span>
                                        <span>
                                            <i class="icon-ribbon hidden-xs"></i>
                                            <a href="{{ route('user',['id' => $order->user_id])}}"><p>{{$order->user->name}}</p></a>
                                        </span>
                                    </div>
                                    <div class="column">
                                        <a href="{{ route('confirm_order',['id' => $order->id])}}" class="btn btn-sm btn-primary btn-icon-right waves-effect waves-light">
                                            Підтвердити
                                            <i class="icon-bag"></i>
                                        </a>
                                    </div>
                                </div>
                                <h3 class="shop-title"><a href="{{ route('product',['product_alias' => $order->product->alias])}}"><p>{{$order->product->title}}</p></a></h3>
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

                    <div class="text-center">
                        {{ $products->links() }}
                    </div>

            </div>

            <div id="2" class="tab-pane fade">

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
                                        <span class="hidden-xs">Покупець</span>
                                        <span>
                                            <i class="icon-ribbon hidden-xs"></i>
                                            <a href="{{ route('user',['id' => $order->user_id])}}"><p>{{$order->user->name}}</p></a>
                                        </span>
                                    </div>
                                </div>
                                <h3 class="shop-title"><a href="{{ route('product',['product_alias' => $order->product->alias])}}"><p>{{$order->product->title}}</p></a></h3>
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

                <div class="text-center">
                    {{ $products->links() }}
                </div>
            </div>

            <div id="3" class="tab-pane fade">

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
                                        <span class="hidden-xs">Покупець</span>
                                        <span>
                                            <i class="icon-ribbon hidden-xs"></i>
                                            <a href="{{ route('user',['id' => $order->user_id])}}"><p>{{$order->user->name}}</p></a>
                                        </span>
                                    </div>
                                </div>
                                <h3 class="shop-title"><a href="{{ route('product',['product_alias' => $order->product->alias])}}"><p>{{$order->product->title}}</p></a></h3>
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

                <div class="text-center">
                    {{ $products->links() }}
                </div>
            </div>

            <div id="4" class="tab-pane fade">

                <form method="post" class="form-horizontal" enctype="multipart/form-data">

                    {{csrf_field()}}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-2 control-label">Імя</label>

                        <div class="col-md-10">
                            <input id="name" type="text" class="form-control" name="name" value="{{Auth::user()->name}}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('sename') ? ' has-error' : '' }}">
                        <label for="sename" class="col-md-2 control-label">Прізвище</label>

                        <div class="col-md-10">
                            <input id="sename" type="text" class="form-control" name="sename" value="{{Auth::user()->sename}}" required autofocus>

                            @if ($errors->has('sename'))
                                <span class="help-block">
                        <strong>{{ $errors->first('sename') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label for="phone" class="col-md-2 control-label">Телефон</label>

                        <div class="col-md-10">
                            <input id="phone" type="text" class="form-control" name="phone" value="{{Auth::user()->phone}}" required autofocus>

                            @if ($errors->has('phone'))
                                <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-2 control-label">Avatar</label>

                        <div class="col-md-10">
                            <img src="/data/users/{{Auth::user()->email}}/avatar/{{ Auth::user()->avatar }}" style="width:50px; height:50px;  border-radius:50%; margin-bottom: 10px;">
                            <input type="file" name="avatar">
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                        <label for="country" class="col-md-2 control-label">Country</label>

                        <div class="col-md-10">
                            <input id="country" type="text" class="form-control" name="country" value="{{Auth::user()->country}}" required>

                            @if ($errors->has('country'))
                                <span class="help-block">
                        <strong>{{ $errors->first('country') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
                        <label for="region" class="col-md-2 control-label">Region</label>

                        <div class="col-md-10">
                            <input id="region" type="text" class="form-control" name="region" value="{{Auth::user()->region}}" required>

                            @if ($errors->has('region'))
                                <span class="help-block">
                        <strong>{{ $errors->first('region') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                        <label for="city" class="col-md-2 control-label">City</label>

                        <div class="col-md-10">
                            <input id="city" type="text" class="form-control" name="city" value="{{Auth::user()->city}}" required>

                            @if ($errors->has('city'))
                                <span class="help-block">
                        <strong>{{ $errors->first('city') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('street') ? ' has-error' : '' }}">
                        <label for="street" class="col-md-2 control-label">Street</label>

                        <div class="col-md-10">
                            <input id="street" type="text" class="form-control" name="street" value="{{Auth::user()->street}}" required>

                            @if ($errors->has('street'))
                                <span class="help-block">
                        <strong>{{ $errors->first('street') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('house') ? ' has-error' : '' }}">
                        <label for="house" class="col-md-2 control-label">House</label>

                        <div class="col-md-10">
                            <input id="house" type="text" class="form-control" name="house" value="{{Auth::user()->house}}" required>

                            @if ($errors->has('house'))
                                <span class="help-block">
                        <strong>{{ $errors->first('house') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('index') ? ' has-error' : '' }}">
                        <label for="index" class="col-md-2 control-label">index</label>

                        <div class="col-md-10">
                            <input id="index" type="text" class="form-control" name="index" value="{{Auth::user()->index}}" required>

                            @if ($errors->has('index'))
                                <span class="help-block">
                        <strong>{{ $errors->first('index') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                        <label for="sex" class="col-md-2 control-label">Sex</label>

                        <div class="col-md-10">
                            <select name="sex">
                                @if(Auth::user()->sex == 1)
                                    <option value="1">Чоловіча</option>
                                    <option value="2">Жіноча</option>
                                @else
                                    <option value="1">Чоловіча</option>
                                    <option value="2">Жіноча</option>
                                @endif
                            </select>
                            @if ($errors->has('sex'))
                                <span class="help-block">
                        <strong>{{ $errors->first('sex') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                        <label for="year" class="col-md-2 control-label">Year</label>

                        <div class="col-md-10">
                            <select name="year">
                                <option value="{{Auth::user()->year}}">{{Auth::user()->year}}</option>
                                @for ($year=1900; $year <= date('Y'); $year++)
                                    <option value="{{$year}}">{{$year}}</option>
                                @endfor
                            </select>
                            @if ($errors->has('year'))
                                <span class="help-block">
                        <strong>{{ $errors->first('year') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('month') ? ' has-error' : '' }}">
                        <label for="month" class="col-md-2 control-label">Month</label>

                        <div class="col-md-10">
                            <select name="month">
                                <option value="{{Auth::user()->month}}">{{Auth::user()->month}}</option>
                                @for ($month=1; $month <= 12; $month++)
                                    <option value="{{$month}}">{{$month}}</option>
                                @endfor
                            </select>
                            @if ($errors->has('month'))
                                <span class="help-block">
                        <strong>{{ $errors->first('month') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('day') ? ' has-error' : '' }}">
                        <label for="day" class="col-md-2 control-label">Day</label>

                        <div class="col-md-10">
                            <select name="day">
                                <option value="{{Auth::user()->day}}">{{Auth::user()->day}}</option>
                                @for ($day=1; $day <= 31; $day++)
                                    <option value="{{$day}}">{{$day}}</option>
                                @endfor
                            </select>
                            @if ($errors->has('day'))
                                <span class="help-block">
                        <strong>{{ $errors->first('day') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Зберегти
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>


</div><!-- .col-lg-9.col-md-8 -->


