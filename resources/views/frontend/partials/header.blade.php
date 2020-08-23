<body id="homepage">
<input type="text" hidden id="url" value="{{ url('/')}}">
    <div id="wrapper">

        <!-- header begin -->
        <header class="header-custom">
            
			<div class="container">
                <div class="row align-items-center">
					<div class="col-lg-4 sm-hide">
						<div class="info-box s2">
							<i class="icon_clock_alt"></i>
							<div class="info-box_text">
								<div class="info-box_title"><span class="id-color">Opening Times</span></div>
                                <div class="info-box_subtite">{{ @footers()->time }}</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-12 text-center">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="index.html">
                                <img class="logo" src="{{ asset(get_setting()->logo) }}" alt="">
                            </a>
                        </div>
                        <!-- logo close -->
						
						<!-- small button begin -->
						<span id="menu-btn"></span>
						<!-- small button close -->
					</div>
					
					<div class="col-lg-4 text-right sm-hide">
						<div class="info-box s2">
							<i class="icon_house_alt"></i>
							<div class="info-box_text">
								<div class="info-box_title"><span class="id-color">Customer Service</span></div>
								<div class="info-box_subtite">{{ @footers()->customer_number }}</div>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>

            <div class="menu-group">
				<div class="container">
					<div class="row">
						
						<div class="col-md-12">
							<div class="row">
								<div class="col-lg-12">
									<!-- mainmenu begin -->
									<nav>
										<ul id="mainmenu">
											@foreach (menu() as $item)
												@if ($item->type == 4)												
													<li><a href="{{ url('/') .'/pages/'. $item->url }}">{{ $item->name }}<span></span></a>
												@else
													<li><a href="{{ url('/') .'/'. $item->url }}">{{ $item->name }}<span></span></a>
												@endif
												@if ($item->type == 2 || $item->type == 3)	
													<ul>
														@if (@$item->sub_menu)
															@foreach ($item->sub_menu as $key => $value)  
															<li><a href="{{ url('/').'/' .$value->url }}">{{ $value->name }}</a></li>
															@endforeach                                        
														@endif
													</ul>												
												@endif												
										    	</li>
											@endforeach
											
											@if (Auth::check())
												<li class="no_ball"><a href="{{ route('front.logout')}}">Logout</a></li>
											@else
												{{-- <li class="no_ball"><a href="{{ route('front.get_login')}}">Login</a></li>	  --}}
											@endif
											<li class="right_nav"><a href="{{ route('front.cart')}}"><i class="fa fa-shopping-cart"></i><span class="badge badge-light" id="head_qty">{{ count(Cart::content()) }}</span> </a>
											</li>
										</ul>
									</nav>
							
							<!-- mainmenu close -->
								</div>
							</div>
							
							
						</div>
						
					</div>
				</div>
			</div>
			
			
        </header>
        <!-- header close -->