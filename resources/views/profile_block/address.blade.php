
<!-- Content -->
<div class="col-lg-9 col-md-8 col-lg-push-3 col-md-push-4">

    <h4><center>Адрес доставки</center></h4>
        <form method="post" class="row">

            {{csrf_field()}}

            <input type="text" name="country" value="{{Auth::user()->country}}" required>
            <input type="text" name="region" value="{{Auth::user()->region}}" required>
            <input type="text" name="city" value="{{Auth::user()->city}}" required>
            <input type="text" name="street" value="{{Auth::user()->street}}" required>
            <input type="text" name="house" value="{{Auth::user()->house}}" required>
            <input type="text" name="index" value="{{Auth::user()->index}}" required>

            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary btn-block space-top-none space-bottom-none">Зберегти</button>
            </div>
        </form>

</div><!-- .col-lg-9.col-md-8 -->


