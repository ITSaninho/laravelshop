
<!-- Content -->
<div class="col-lg-9 col-md-8 col-lg-push-3 col-md-push-4">


    <div class="articles-form">

        <p>Замовлення № {{$payment->id}}</p>
        <p>Назва товару: {{$payment->order->product->title}}</p>
        <p>Статус: {{$payment->order->status}}</p>
        @if(!empty($payment->order->length))
            <p>Довжина: {{$payment->order->length}}</p>
        @endif
        @if(!empty($payment->order->height))
            <p>Висота: {{$payment->order->height}}</p>
        @endif
        @if(!empty($payment->order->width))
            <p>Ширина: {{$payment->order->width}}</p>
        @endif
        @if(!empty($payment->order->size_integer))
            <p>Розмір(чисельний): {{$payment->order->size_integer}}</p>
        @endif
        @if(!empty($payment->order->size_string))
            <p>Розмір: {{$payment->order->size_string}}</p>
        @endif
        @if(!empty($payment->order->weight))
            <p>Вага: {{$payment->order->weight}}</p>
        @endif
        @if(!empty($payment->order->color))
            <p>Колір: {{$payment->order->color}}</p>
        @endif
        @if(!empty($payment->order->material))
            <p>Матеріал: {{$payment->order->material}}</p>
        @endif
        <p>Кількість: {{$payment->order->count}}</p>
        <p>Сума: {{$payment->order->sum}}</p>

        <p>Якась назва: {{$payment->name}}</p>
        <p>Час замовлення: {{$payment->created_at}}</p>
        <p>Доставка: {{$payment->delivery->name}}</p>
        <p>Час доставкі: {{$payment->delivery->time}}</p>
        <p>Ціна доставки: {{$payment->delivery->price}}</p>

        <p>Загальна сума замовлення: {{$payment->delivery->price + $payment->order->sum}}</p>


    </div>


</div><!-- .col-lg-9.col-md-8 -->





