
<!-- Content -->
<div class="col-lg-9 col-md-8 col-lg-push-3 col-md-push-4">



    @foreach($users as $user)
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
            <p><a href="{{ route('user',['id' => $user->id]) }}">Написати</a></p>
        </div>

    </div><!-- .shop-tile -->

    @endforeach




</div><!-- .col-lg-9.col-md-8 -->


