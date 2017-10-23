    <!-- Modal -->
    <div>
        <div class="modal-dialog">
            <button type="button" class="close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-content text-center">
                <h4>Login With Social Account</h4>
                <div class="space-bottom-2x">
                    <a href="#" class="btn google-login waves-effect waves-light">Google<i class="fa fa-google"></i></a>
                    <a href="#" class="btn twitter-login waves-effect waves-light">Twitter<i class="fa fa-twitter"></i></a>
                    <a href="#" class="btn facebook-login waves-effect waves-light">Facebook<i class="fa fa-facebook"></i></a>
                </div>
                <h4>Or by Email</h4>
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <div class="form-group">

                        <button type="submit" class="btn login-btn btn-default waves-effect waves-light">Login into your account<i class="icon-head"></i></button>
                    </div>
                    <div class="text-left">
                        <span class="text-sm text-semibold">New to Nucleus? <a href="#">Sign Up</a></span>
                    </div>
                </form><!-- <form> -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal.fade -->

