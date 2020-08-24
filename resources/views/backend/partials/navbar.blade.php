<body class="antialiased {{ @get_setting() ? (@get_setting()->color== 2) ? 'theme-dark' : null: null }}">
  <input type="text" id="url" value="{{ url('/')}}" hidden>
  <input type="text" id="delete_title" value="@lang('language.delete_title')" hidden>
  <input type="text" id="delete_description" value="@lang('language.delete_description')" hidden>
  <input type="text" id="delete_lang" value="@lang('language.delete')" hidden>
  <input type="text" id="cancel_lang" value="@lang('language.cancel')" hidden>
    <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
     <div class="container">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu">
         <span class="navbar-toggler-icon"></span>
       </button>
       <a href="." class="navbar-brand navbar-brand-autodark">
         <img src="{{ asset(get_setting()->logo) }}" alt="Tabler" class="navbar-brand-image">
       </a>
       <div class="navbar-nav flex-row d-lg-none">
         <div class="nav-item dropdown d-none d-md-flex mr-3">
           <a href="#" class="nav-link px-0" data-toggle="dropdown" tabindex="-1">
             <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
             <span class="badge bg-red"></span>
           </a>
           <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
             <div class="card">
               <div class="card-body">
                 Lorem ipsum dolor.
               </div>
             </div>
           </div>
         </div>
         <div class="nav-item dropdown">
           <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-toggle="dropdown">
            <span class="avatar" style="background-image: url({{asset(@Auth::user()->avatar)}})"></span>
             <div class="d-none d-xl-block pl-2">
              <div>{{ @Auth::user()->username }}</div>
             </div>
           </a>
           <div class="dropdown-menu dropdown-menu-right">
            

            <a class="dropdown-item" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><circle cx="12" cy="7" r="4"></circle><path d="M5.5 21v-2a4 4 0 0 1 4 -4h5a4 4 0 0 1 4 4v2"></path></svg>
              @lang('navbar.account')
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ url('logout') }}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path><path d="M7 12h14l-3 -3m0 6l3 -3"></path></svg>
              @lang('navbar.logout')
            </a>
                
           </div>
         </div>
       </div>

       <div class="collapse navbar-collapse" id="navbar-menu">
         <ul class="navbar-nav pt-lg-3">
           <li class="nav-item">
             <a class="nav-link" href="{{ route('admin.dashboard')}}" >
               <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
               </span>
               <span class="nav-link-title">
                @lang('navbar.dashboard')
               </span>
             </a>
           </li>
         
           {{-- product --}}
           <li class="nav-item {{ (request()->is('admin/page*')) ? 'active' : '' }} dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button" aria-expanded="true">
              <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><rect x="4" y="4" width="6" height="5" rx="2"></rect><rect x="4" y="13" width="6" height="7" rx="2"></rect><rect x="14" y="4" width="6" height="7" rx="2"></rect><rect x="14" y="15" width="6" height="5" rx="2"></rect></svg>
              </span>
              <span class="nav-link-title">
                Pages
              </span>
            </a>
            <ul class="dropdown-menu {{ (request()->is('admin/page*')) ? 'show' : '' }}">             
              <li >
                <a class="dropdown-item {{ (request()->is('admin/page/create')) ? 'active' : '' }}" href="{{ url('admin/page/create')}}" >
                  Page @lang('navbar.create')
                </a>
              </li>
              <li >
                <a class="dropdown-item {{ (request()->is('admin/page')) ? 'active' : '' }}" href="{{ url('admin/page')}}" >
                  Page @lang('navbar.list')
                </a>
              </li>
            </ul>
            
          </li>
           <li class="nav-item {{ (request()->is('admin/menu*')) ? 'active' : '' }} dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button" aria-expanded="true">
              <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><rect x="4" y="4" width="6" height="5" rx="2"></rect><rect x="4" y="13" width="6" height="7" rx="2"></rect><rect x="14" y="4" width="6" height="7" rx="2"></rect><rect x="14" y="15" width="6" height="5" rx="2"></rect></svg>
              </span>
              <span class="nav-link-title">
                Menus
              </span>
            </a>
            <ul class="dropdown-menu {{ (request()->is('admin/menu*')) ? 'show' : '' }}">             
              <li >
                <a class="dropdown-item {{ (request()->is('admin/menu/create')) ? 'active' : '' }}" href="{{ url('admin/menu/create')}}" >
                  Menu @lang('navbar.create')
                </a>
              </li>
              <li >
                <a class="dropdown-item {{ (request()->is('admin/menu')) ? 'active' : '' }}" href="{{ url('admin/menu')}}" >
                  Menu @lang('navbar.list')
                </a>
              </li>
            </ul>
            
          </li>
          
           <li class="nav-item {{ (request()->is('admin/service*')) ? 'active' : '' }} dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button" aria-expanded="true">
              <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><rect x="4" y="4" width="6" height="5" rx="2"></rect><rect x="4" y="13" width="6" height="7" rx="2"></rect><rect x="14" y="4" width="6" height="7" rx="2"></rect><rect x="14" y="15" width="6" height="5" rx="2"></rect></svg>
              </span>
              <span class="nav-link-title">
                Services
              </span>
            </a>
            <ul class="dropdown-menu {{ (request()->is('admin/service*')) ? 'show' : '' }}">             
              <li >
                <a class="dropdown-item {{ (request()->is('admin/service/create')) ? 'active' : '' }}" href="{{ url('admin/service/create')}}" >
                  Service @lang('navbar.create')
                </a>
              </li>
              <li >
                <a class="dropdown-item {{ (request()->is('admin/service')) ? 'active' : '' }}" href="{{ url('admin/service')}}" >
                  Service @lang('navbar.list')
                </a>
              </li>
            </ul>
            
          </li>
           <li class="nav-item {{ (request()->is('admin/blog*')) ? 'active' : '' }} dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button" aria-expanded="true">
              <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><rect x="4" y="4" width="6" height="5" rx="2"></rect><rect x="4" y="13" width="6" height="7" rx="2"></rect><rect x="14" y="4" width="6" height="7" rx="2"></rect><rect x="14" y="15" width="6" height="5" rx="2"></rect></svg>
              </span>
              <span class="nav-link-title">
                @lang('navbar.blogs')
              </span>
            </a>
            <ul class="dropdown-menu {{ (request()->is('admin/blog*')) ? 'show' : '' }}">             
              <li >
                <a class="dropdown-item {{ (request()->is('admin/blog/create')) ? 'active' : '' }}" href="{{ url('admin/blog/create')}}" >
                  @lang('navbar.blog') @lang('navbar.create')
                </a>
              </li>
              <li >
                <a class="dropdown-item {{ (request()->is('admin/blog')) ? 'active' : '' }}" href="{{ url('admin/blog')}}" >
                  @lang('navbar.blog') @lang('navbar.list')
                </a>
              </li>
            </ul>
            
          </li>

           <li class="nav-item {{ (request()->is('admin/plan*')) ? 'active' : '' }} dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button" aria-expanded="true">
              <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><rect x="4" y="4" width="6" height="5" rx="2"></rect><rect x="4" y="13" width="6" height="7" rx="2"></rect><rect x="14" y="4" width="6" height="7" rx="2"></rect><rect x="14" y="15" width="6" height="5" rx="2"></rect></svg>
              </span>
              <span class="nav-link-title">
                PricePlans
              </span>
            </a>
            <ul class="dropdown-menu {{ (request()->is('admin/plan*')) ? 'show' : '' }}">             
              <li >
                <a class="dropdown-item {{ (request()->is('admin/plan/create')) ? 'active' : '' }}" href="{{ url('admin/plan/create')}}" >
                  PricePlans @lang('navbar.create')
                </a>
              </li>
              <li >
                <a class="dropdown-item {{ (request()->is('admin/plan')) ? 'active' : '' }}" href="{{ url('admin/plan')}}" >
                  PricePlans @lang('navbar.list')
                </a>
              </li>
            </ul>
            
          </li>
           {{-- <li class="nav-item {{ (request()->is('admin/work*')) ? 'active' : '' }} dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button" aria-expanded="true">
              <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><rect x="4" y="4" width="6" height="5" rx="2"></rect><rect x="4" y="13" width="6" height="7" rx="2"></rect><rect x="14" y="4" width="6" height="7" rx="2"></rect><rect x="14" y="15" width="6" height="5" rx="2"></rect></svg>
              </span>
              <span class="nav-link-title">
                @lang('language.works')
              </span>
            </a>
            <ul class="dropdown-menu {{ (request()->is('admin/work*')) ? 'show' : '' }}">             
              <li >
                <a class="dropdown-item {{ (request()->is('admin/work/create')) ? 'active' : '' }}" href="{{ url('admin/work/create')}}" >
                  @lang('language.work') @lang('navbar.create')
                </a>
              </li>
              <li >
                <a class="dropdown-item {{ (request()->is('admin/work')) ? 'active' : '' }}" href="{{ url('admin/work')}}" >
                  @lang('language.work') @lang('navbar.list')
                </a>
              </li>
            </ul>
            
          </li> --}}
           <li class="nav-item {{ (request()->is('admin/portfolio*')) ? 'active' : '' }} dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button" aria-expanded="true">
              <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><rect x="4" y="4" width="6" height="5" rx="2"></rect><rect x="4" y="13" width="6" height="7" rx="2"></rect><rect x="14" y="4" width="6" height="7" rx="2"></rect><rect x="14" y="15" width="6" height="5" rx="2"></rect></svg>
              </span>
              <span class="nav-link-title">
                @lang('language.portfolios')
              </span>
            </a>
            <ul class="dropdown-menu {{ (request()->is('admin/portfolio*')) ? 'show' : '' }}">             
              <li >
                <a class="dropdown-item {{ (request()->is('admin/portfolio/create')) ? 'active' : '' }}" href="{{ url('admin/portfolio/create')}}" >
                  @lang('language.portfolio') @lang('navbar.create')
                </a>
              </li>
              <li >
                <a class="dropdown-item {{ (request()->is('admin/portfolio')) ? 'active' : '' }}" href="{{ url('admin/portfolio')}}" >
                  @lang('language.portfolio') @lang('navbar.list')
                </a>
              </li>
            </ul>
            
          </li>
           <li class="nav-item {{ (request()->is('admin/team*')) ? 'active' : '' }} dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button" aria-expanded="true">
              <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><rect x="4" y="4" width="6" height="5" rx="2"></rect><rect x="4" y="13" width="6" height="7" rx="2"></rect><rect x="14" y="4" width="6" height="7" rx="2"></rect><rect x="14" y="15" width="6" height="5" rx="2"></rect></svg>
              </span>
              <span class="nav-link-title">
                @lang('language.teams')
              </span>
            </a>
            <ul class="dropdown-menu {{ (request()->is('admin/team*')) ? 'show' : '' }}">             
              <li >
                <a class="dropdown-item {{ (request()->is('admin/team/create')) ? 'active' : '' }}" href="{{ url('admin/team/create')}}" >
                  @lang('language.team') @lang('navbar.create')
                </a>
              </li>
              <li >
                <a class="dropdown-item {{ (request()->is('admin/team')) ? 'active' : '' }}" href="{{ url('admin/team')}}" >
                  @lang('language.team') @lang('navbar.list')
                </a>
              </li>
            </ul>
            
          </li>
          
          <li class="nav-item {{ (request()->is('admin/contact-info*')) ? 'active' : '' }} dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button" aria-expanded="true">
              <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><rect x="4" y="4" width="6" height="5" rx="2"></rect><rect x="4" y="13" width="6" height="7" rx="2"></rect><rect x="14" y="4" width="6" height="7" rx="2"></rect><rect x="14" y="15" width="6" height="5" rx="2"></rect></svg>
              </span>
              <span class="nav-link-title">
                Contact info
              </span>
            </a>
            <ul class="dropdown-menu {{ (request()->is('admin/contact-info*')) ? 'show' : '' }}">            
             
              <li >
                <a class="dropdown-item {{ (request()->is('admin/contact-info')) ? 'active' : '' }}" href="{{ url('admin/contact-info')}}" >
                  Contact info @lang('navbar.manage')
                </a>
              </li>
            </ul>            
          </li>
          <li class="nav-item {{ (request()->is('admin/frontend-setting*')) ? 'active' : '' }} dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button" aria-expanded="true">
              <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><rect x="4" y="4" width="6" height="5" rx="2"></rect><rect x="4" y="13" width="6" height="7" rx="2"></rect><rect x="14" y="4" width="6" height="7" rx="2"></rect><rect x="14" y="15" width="6" height="5" rx="2"></rect></svg>
              </span>
              <span class="nav-link-title">
                Frontend @lang('language.settings')
              </span>
            </a>
            <ul class="dropdown-menu {{ (request()->is('admin/frontend-setting*')) ? 'show' : '' }}">             
              
              <li >
                <a class="dropdown-item {{ (request()->is('admin/frontend-setting/home-page')) ? 'active' : '' }}" href="{{ url('admin/frontend-setting/home-page')}}" >
                   Home Page
                </a>
              </li>
              <li >
                <a class="dropdown-item {{ (request()->is('admin/frontend-setting/about/page')) ? 'active' : '' }}" href="{{ url('admin/frontend-setting/about/page')}}" >
                   About Us Page
                </a>
              </li>
              <li >
                <a class="dropdown-item {{ (request()->is('admin/frontend-setting/term-conditions/page')) ? 'active' : '' }}" href="{{ url('admin/frontend-setting/term-conditions/page')}}" >
                   Terms & Conditions Page
                </a>
              </li>
              <li >
                <a class="dropdown-item {{ (request()->is('admin/frontend-setting/privacy-policy/page')) ? 'active' : '' }}" href="{{ url('admin/frontend-setting/privacy-policy/page')}}" >
                  Privacy Policy Page
                </a>
              </li>
              <li >
                <a class="dropdown-item {{ (request()->is('admin/frontend-setting/social-icon')) ? 'active' : '' }}" href="{{ url('admin/frontend-setting/social-icon')}}" >
                  Social Networks
                </a>
              </li>
              <li >
                <a class="dropdown-item {{ (request()->is('admin/frontend-setting/before-after')) ? 'active' : '' }}" href="{{ url('admin/frontend-setting/before-after')}}" >
                  Before After Manage
                </a>
              </li>
            </ul>
            
          </li>
        

          
          {{-- //user --}}
         
          <li class="nav-item {{ (request()->is('user*')) ? 'active' : '' }} dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button" aria-expanded="true">
              <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><rect x="4" y="4" width="6" height="5" rx="2"></rect><rect x="4" y="13" width="6" height="7" rx="2"></rect><rect x="14" y="4" width="6" height="7" rx="2"></rect><rect x="14" y="15" width="6" height="5" rx="2"></rect></svg>
              </span>
              <span class="nav-link-title">
                @lang('navbar.users')
              </span>
            </a>
            <ul class="dropdown-menu {{ (request()->is('user*')) ? 'show' : '' }}">            
             
              <li >
                <a class="dropdown-item {{ (request()->is('user')) ? 'active' : '' }}" href="{{ url('user')}}" >
                  @lang('navbar.users') @lang('navbar.manage')
                </a>
              </li>
            </ul>            
          </li>
          <li class="nav-item {{ (request()->is('setting*')) ? 'active' : '' }} dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button" aria-expanded="true">
              <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><rect x="4" y="4" width="6" height="5" rx="2"></rect><rect x="4" y="13" width="6" height="7" rx="2"></rect><rect x="14" y="4" width="6" height="7" rx="2"></rect><rect x="14" y="15" width="6" height="5" rx="2"></rect></svg>
              </span>
              <span class="nav-link-title">
                @lang('language.settings')
              </span>
            </a>
            <ul class="dropdown-menu {{ (request()->is('setting*')) ? 'show' : '' }}">             
            
              <li >
                <a class="dropdown-item {{ (request()->is('setting/general-setting')) ? 'active' : '' }}" href="{{ url('setting/general-setting')}}" >
                  @lang('navbar.general_setting')
                </a>
              </li>
              {{-- <li>
                <a class="dropdown-item {{ (request()->is('setting/roles')) ? 'active' : '' }}" href="{{ url('setting/roles')}}" >
                  @lang('navbar.role_permission')
                </a>
              </li> --}}
              <li>
                <a class="dropdown-item {{ (request()->is('setting/database-backup')) ? 'active' : '' }}" href="{{ url('setting/database-backup')}}" >
                  @lang('navbar.database_bakeup')
                </a>
              </li>
              <li>
                <a class="dropdown-item {{ (request()->is('setting/email-settings')) ? 'active' : '' }}" href="{{ url('setting/email-settings')}}" >
                  @lang('navbar.email_settings')
                </a>
              </li>
            </ul>
            
          </li>
          
          
         </ul>
       </div>
     </div>
   </aside>