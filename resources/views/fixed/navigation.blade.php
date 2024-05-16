<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{route('home')}}" class="logo">
                        <img src="{{asset('assets/images/logo.png')}}">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        @foreach($menus as $link)
                            <li>
                                <a href="{{route($link->route)}}" @if(request()->routeIs($link->route)) class="active" @endif>{{$link->name}}</a>
                            </li>
                        @endforeach
                        @if(session()->has('user') && session('user')->role_id == 1)
                                <li>
                                    <a href="{{route('admin')}}">Admin</a>
                                </li>
                            @endif
                        @if(!session()->has('user'))
                            <li>
                                <a href="{{route('login')}}">Login</a>
                            </li>
                            <li>
                                <a href="{{route('registration')}}">Registration</a>
                            </li>
                        @else
                                <li>
                                    <a href="{{route('logout')}}">Logout</a>
                                </li>
                                <li>
                                    <a href="{{route('cart')}}">Cart</a>
                                </li>
                            @endif
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
