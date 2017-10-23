<!-- Content -->
<div class="col-lg-9 col-md-8 col-lg-push-3 col-md-push-4">
    <h4 style="text-align: center;">Форма реєстрації</h4>
    <form class="form-horizontal" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('sename') ? ' has-error' : '' }}">
            <label for="sename" class="col-md-4 control-label">Sename</label>

            <div class="col-md-6">
                <input id="sename" type="text" class="form-control" name="sename" value="{{ old('sename') }}" required>

                @if ($errors->has('sename'))
                    <span class="help-block">
                        <strong>{{ $errors->first('sename') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Avatar</label>

            <div class="col-md-6">
                <input type="file" name="avatar">
            </div>
        </div>

        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
            <label for="phone" class="col-md-4 control-label">Phone</label>

            <div class="col-md-6">
                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>

                @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
            <label for="country" class="col-md-4 control-label">Country</label>

            <div class="col-md-6">
                <input id="country" type="text" class="form-control" name="country" value="{{ old('country') }}" required>

                @if ($errors->has('country'))
                    <span class="help-block">
                        <strong>{{ $errors->first('country') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
            <label for="region" class="col-md-4 control-label">Region</label>

            <div class="col-md-6">
                <input id="region" type="text" class="form-control" name="region" value="{{ old('region') }}" required>

                @if ($errors->has('region'))
                    <span class="help-block">
                        <strong>{{ $errors->first('region') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
            <label for="city" class="col-md-4 control-label">City</label>

            <div class="col-md-6">
                <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" required>

                @if ($errors->has('city'))
                    <span class="help-block">
                        <strong>{{ $errors->first('city') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('street') ? ' has-error' : '' }}">
            <label for="street" class="col-md-4 control-label">Street</label>

            <div class="col-md-6">
                <input id="street" type="text" class="form-control" name="street" value="{{ old('street') }}" required>

                @if ($errors->has('street'))
                    <span class="help-block">
                        <strong>{{ $errors->first('street') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group{{ $errors->has('house') ? ' has-error' : '' }}">
            <label for="house" class="col-md-4 control-label">House</label>

            <div class="col-md-6">
                <input id="house" type="text" class="form-control" name="house" value="{{ old('house') }}" required>

                @if ($errors->has('house'))
                    <span class="help-block">
                        <strong>{{ $errors->first('house') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('index') ? ' has-error' : '' }}">
            <label for="index" class="col-md-4 control-label">index</label>

            <div class="col-md-6">
                <input id="index" type="text" class="form-control" name="index" required>

                @if ($errors->has('index'))
                    <span class="help-block">
                        <strong>{{ $errors->first('index') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
            <label for="sex" class="col-md-4 control-label">Sex</label>

            <div class="col-md-6">
                <select name="sex">
                    <option value="0">-</option>
                    <option value="1">Чоловіча</option>
                    <option value="2">Жіноча</option>
                </select>
                @if ($errors->has('sex'))
                    <span class="help-block">
                        <strong>{{ $errors->first('sex') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
            <label for="year" class="col-md-4 control-label">Year</label>

            <div class="col-md-6">
                <select name="year">
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
            <label for="month" class="col-md-4 control-label">Month</label>

            <div class="col-md-6">
                <select name="month">
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
            <label for="day" class="col-md-4 control-label">Day</label>

            <div class="col-md-6">
                <select name="day">
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
                    Відправити
                </button>
            </div>
        </div>
    </form>
</div><!--content -->