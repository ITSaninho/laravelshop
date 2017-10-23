
<!-- Content -->
<div class="col-lg-9 col-md-8 col-lg-push-3 col-md-push-4">

    <h2><center>Діалоги</center></h2>

    @foreach ($messages as $message)
        @foreach($users as $user)
            @if($message->user_id == Auth::user()->id or $message->whom_id == Auth::user()->id)
                @if($message->user_id == $user->id or $message->whom_id == $user->id)
                    <div style="padding: 10px;">
                        <div class="field">
                            <div>
                                <img src="/data/users/{{$user->email}}/avatar/{{$user->avatar}}" style="width:50px; height:50px; float: left; margin-right: 15px; border-radius:50%;">
                            </div>

                            <div>
                                <p>Імя: {{$user->name}}</p>
                            </div>
                        </div>


                        <p><a href="{{ route('user',['id' => $user->id])}}">{{substr($message->text, 0, 50)}}...</a>
                    </div>
                    <div class="clear"></div>
                @endif
            @endif
        @endforeach
    @endforeach

</div><!-- .col-lg-9.col-md-8 -->


