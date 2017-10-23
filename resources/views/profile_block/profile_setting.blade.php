
<!-- Content -->
<div class="col-lg-9 col-md-8 col-lg-push-3 col-md-push-4">

    <h4><center>Адрес доставки</center></h4>
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

</div><!-- .col-lg-9.col-md-8 -->


