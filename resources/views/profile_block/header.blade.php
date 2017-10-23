<!-- Navbar -->
<!-- Add class ".navbar-sticky" to make navbar stuck when it hits the top of the page. Another modifier class is: "navbar-fullwidth" to stretch navbar and make it occupy 100% of the page width. The screen width at which navbar collapses can be controlled through the variable "$nav-collapse" in sass/variables.scss -->
<header class="navbar navbar-sticky">

    <!-- Toolbar -->
    <div class="topbar">
        <div class="container">
            <a href="{{url('/')}}" class="site-logo">
                <img src="/img/logo.png" alt="Unitedmega Shop">
            </a><!-- .site-logo -->

            <!-- Mobile Menu Toggle -->
            <div class="nav-toggle"><span></span></div>

            <div class="toolbar">
                @if (!Auth::guest())
                    <p>Привіт, {{ Auth::user()->email }}</p>
                    <a href="{{ url('/') }}">Перейти в каталог</a>
                    <a href="{{ url('/profile') }}">Зайти в кабінет</a>
                    @if(!Auth::user()->avatar == 'default.jpg')
                        <img src="/data/users/{{Auth::user()->email}}/{{ Auth::user()->avatar }}" style="width:25px; height:25px;  border-radius:50%;">
                    @else
                        <img src="/data/users/default.jpg" style="width:25px; height:25px;  border-radius:50%;">
                    @endif
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Вихід</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <a href="shopping-cart.html" class="cart-btn"><i class="icon-bag"></i></a>
                @endif
                <div class="search-btn">
                    <i class="icon-search"></i>
                    <form method="post" class="search-box">
                        <input type="text" class="form-control input-sm" placeholder="Search">
                        <button type="submit"><i class="icon-search"></i></button>
                    </form>
                </div><!-- .search-btn -->
            </div><!-- .toolbar -->
        </div><!-- .container -->
    </div><!-- .topbar -->

    <!-- Main Navigation -->
    <div class="container">
        <nav class="main-navigation">
            <ul class="menu">
                <li class="menu-item-has-children">
                    <a href="{{url('/')}}"><i class="flaticon-technology46"></i>Головна</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{route('about')}}"><i class="flaticon-wireless-internet6"></i>Про нас</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{route('delivery')}}"><i class="flaticon-space-ship2"></i>Доставка</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{route('faq')}}"><i class="flaticon-chatting"></i>FAQ</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{route('contacts')}}"><i class="flaticon-drawing33"></i>Контакти</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{route('basket')}}"><i class="flaticon-wireless-internet6"></i>Корзина</a>
                </li>
            </ul><!-- .menu -->
        </nav><!-- .main-navigation -->
    </div><!-- .container -->
    <div class="social-bar mobile-socials">
        <a href="#" class="sb-skype">
            <i class="fa fa-skype"></i>
        </a>
        <a href="#" class="sb-facebook">
            <i class="fa fa-facebook"></i>
        </a>
        <a href="#" class="sb-twitter">
            <i class="fa fa-twitter"></i>
        </a>
    </div>
</header><!-- .navbar -->
