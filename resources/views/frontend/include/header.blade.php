<body>
    <input type="text" hidden id="url" value="{{ url('/') }}">
    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Header Area -->
    <header class="header-area">

        <!-- Start Top Header -->
        <div class="top-header">
            <div class="container-fluid">
                <div class="row align-items-left">
                    <div class="col-lg-6 col-md-6">
                        <ul class="text-left">
                            <li><i class="flaticon-placeholder"></i> <a href="tel:+44587154756">{{ @get_setting()->address }}</a></li>
                            <li><i class="flaticon-phone-call"></i> <a href="tel:+44587154756">{{ @get_setting()->phone }}</a></li>
                            <li><i class="flaticon-message-closed-envelope"></i> <a href="mailto:{{ @get_setting()->email }}">{{ @get_setting()->email }}</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <ul>
                            @if (Auth::check())
                               <li><a href="{{ url('logout') }}">Logout</a></li>
                            @else                                
                                <li><a href="{{ url('user/login') }}">Login</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Header -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="evolta-responsive-nav">
                <div class="container">
                    <div class="evolta-responsive-menu">
                        <div class="logo">
                            <a href="{{ url('/')}}">
                                <img src="{{ asset(get_setting()->logo) }}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="evolta-nav">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ url('/')}}">
                            <img src="{{ asset(get_setting()->logo) }}" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                
                                @foreach (menu() as $item)
                                    @if ($item->type == 4)
                                    <li class="nav-item">
                                        <a href="{{ url('/') .'/pages/'. $item->url }}" class="nav-link">{{ $item->name }}</a>
                                    </li>	
                                    @endif
                                    @if ($item->type == 1)
                                        <li class="nav-item">
                                            <a href="{{ url('/') .'/'. $item->url }}" class="nav-link">{{ $item->name }}</a>
                                        </li>	
                                    @endif
                                    @if ($item->type == 2 || $item->type == 3)
                                    @php
                                        if(count($item->sub_menu) > 0){
                                           $val = '<i class="fas fa-chevron-down"></i>';
                                        }
                                        else {
                                            $val = '';
                                        }
                                    @endphp
                                        <li class="nav-item">
                                        <a href="{{ url('/') .'/'. $item->url }}" class="nav-link">{{ $item->name }} {{$val}}</a>
                                        </li>	
                                        <ul class="dropdown-menu">
                                            @if (@$item->sub_menu)
                                                @foreach ($item->sub_menu as $value)                                            
                                                <li class="nav-item"><a href="{{ url('/').'/' .$value->url }}" class="nav-link">{{ $value->name }}</a></li>
                                                @endforeach
                                            @endif
                                        </ul>												
                                    @endif												
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

    </header>