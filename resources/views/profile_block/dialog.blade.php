
<!-- Content -->
<div class="col-lg-9 col-md-8 col-lg-push-3 col-md-push-4">

    <h2><center>Діалог</center></h2>

    <!-- Form -->
    <form method="post" style="margin-bottom: 30px;">
        {{csrf_field()}}

        <div class="field">
            <input type="hidden" name="whom_id" value="{{$dialog}}">
        </div>


        <div class="field">
            <textarea name="text" class="form-control" ></textarea>
        </div>

        <div class="field">
            <input type="submit" value="Відправити"/>
        </div>

    </form>

    @foreach ($messages as $message)

        @if($message->whom_id == $dialog or $message->user_id == $dialog)
            @if($message->user_id == $dialog)
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


