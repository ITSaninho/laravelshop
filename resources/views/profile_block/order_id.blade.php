
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

    </div>


</div><!-- .col-lg-9.col-md-8 -->





