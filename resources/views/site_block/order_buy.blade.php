
<!-- Content -->
<div class="col-lg-9 col-md-8 col-lg-push-3 col-md-push-4">


            <div class="articles-form">

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


                <h5>Адрес доставки</h5>
                <!-- Nav Tabs -->
                <ul class="nav-tabs" role="tablist">
                    <li class="active"><a href="#shipping_address1" role="tab" data-toggle="tab">Адрес доставки</a></li>
                    <li><a href="#shipping_address2" role="tab" data-toggle="tab">Змінити адрес</a></li>
                </ul><!-- .nav-tabs -->
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane transition fade in active" id="shipping_address1">
                        <form method="post" action="{{ route('buy') }}">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$order->id}}"/>
                            <input type="hidden" name="index" value="{{$order->user->index}}"/>
                            <input type="hidden" name="country" value="{{$order->user->country}}"/>
                            <input type="hidden" name="region" value="{{$order->user->region}}"/>
                            <input type="hidden" name="city" value="{{$order->user->city}}"/>
                            <input type="hidden" name="street" value="{{$order->user->street}}"/>
                            <input type="hidden" name="house" value="{{$order->user->house}}"/>
                            <input type="hidden" name="phone" value="{{$order->user->phone}}"/>

                            <p>Індекс: {{$order->user->index}}</p>
                            <p>Країна: {{$order->user->country}}</p>
                            <p>Регіон: {{$order->user->region}}</p>
                            <p>Місто: {{$order->user->city}}</p>
                            <p>Вулиця: {{$order->user->street}}</p>
                            <p>Будинок: {{$order->user->house}}</p>
                            <p>Телефон: {{$order->user->phone}}</p>
                            <br>

                            <p>Оберіть з списку варіант доставки:</p>

                            @foreach($deliveryes as $delivery)
                                <div class="radio">
                                    <label><input type="radio" name="delivery_id" value="{{$delivery->id}}">{{$delivery->name}} Ціна: {{$delivery->price}} Час: до {{$delivery->time}} днів</label>
                                </div>
                            @endforeach


                            <div class="shop-tools">
                                <button type="submit" class="btn btn-primary btn-icon-right waves-effect waves-light">Відправити<i class="icon-bag"></i></button>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane transition fade" id="shipping_address2">
                        <form method="post" action="{{ route('buy') }}">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$order->id}}"/>
                            <input type="text" name="index" value="{{$order->user->index}}"/>
                            <input type="text" name="country" value="{{$order->user->country}}"/>
                            <input type="text" name="region" value="{{$order->user->region}}"/>
                            <input type="text" name="city" value="{{$order->user->city}}"/>
                            <input type="text" name="street" value="{{$order->user->street}}"/>
                            <input type="text" name="house" value="{{$order->user->house}}"/>
                            <input type="text" name="phone" value="{{$order->user->phone}}"/>
                            <br>

                            <p>Оберіть з списку варіант доставки:</p>

                            @foreach($deliveryes as $delivery)
                                <div class="radio">
                                    <label><input type="radio" name="delivery_id" value="{{$delivery->id}}">{{$delivery->name}} Ціна: {{$delivery->price}} Час: до {{$delivery->time}} днів</label>
                                </div>
                            @endforeach

                            <div class="shop-tools">
                                <button type="submit" class="btn btn-primary btn-icon-right waves-effect waves-light">Відправити<i class="icon-bag"></i></button>
                            </div>
                        </form>
                    </div>
                </div><!-- .tab-content -->


            </div>


</div><!-- .col-lg-9.col-md-8 -->





