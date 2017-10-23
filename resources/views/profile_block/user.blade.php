
<!-- Content -->
<div class="col-lg-9 col-md-8 col-lg-push-3 col-md-push-4">



            <!-- Shop Items -->
    <div class="shop-tile">
        <a href="" class="thumbnail">
            <img src="/data/users/{{$user->email}}/avatar/{{$user->avatar }}" alt="{{$user->email}}">
        </a>
        <div class="description">
            <div class="shop-meta">
                <div class="column">
                    <span class="hidden-xs">Статус</span>
              <span>
                <i class="icon-ribbon hidden-xs"></i>
                  @if($user->status == 10)
                      <a href="#"><p>В мережі</p></a>
                  @elseif($user->status == 1)
                      <a href="#"><p>Вийшов: {{$user->updated_at}}</p></a>
                  @endif
              </span>
                </div>
            </div>
            <p>Імя: {{$user->name}}</p>
            <p>Прізвище: {{$user->sename}}</p>
            <p>Електронна почта: {{$user->email}}</p>
            <p>Країна: {{$user->country}}</p>
            <p>Телефон: {{$user->phone}}</p>
        </div>

    </div><!-- .shop-tile -->

    <div class="shop-tile">
        <form method="post" class="row">

            {{csrf_field()}}

            <input type="hidden" name="whom_id" value="{{$user->id}}" required>

            <div class="col-sm-12">
                <textarea class="form-control" name="text" rows="2" placeholder="Введіть повідомлення"></textarea>
            </div>
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary btn-block space-top-none space-bottom-none">Відправити</button>
            </div>
        </form>

    </div><!-- .tab-pane -->

    @foreach ($messages as $message)

        @if($message->whom_id == $user->id or $message->user_id == $user->id)
            @if($message->user_id == $user->id)
                <div>
                    <img src="/data/users/{{$message->user->email}}/avatar/{{$message->user->avatar}}" style="width:50px; height:50px; float: left; margin-right: 15px; border-radius:50%;">
                </div>
                <div>
                    <p style="color: red">Імя: {{$message->user->name}}</p>
                    <p>Час:{{$message->created_at}}</p>
                    <p>{{$message->text}}</p>
                </div>
                <hr>
            @else
                <div>
                    <img src="/data/users/{{$message->user->email}}/avatar/{{$message->user->avatar}}" style="width:50px; height:50px; float: left; margin-right: 15px; border-radius:50%;">
                </div>
                <div>
                    <p style="color: green">Імя: {{$message->user->name}}</p>
                    <p>Час:{{$message->created_at}}</p>
                    <p>{{$message->text}}</p>
                </div>
                <hr>
            @endif
        @endif

    @endforeach


</div><!-- .col-lg-9.col-md-8 -->


