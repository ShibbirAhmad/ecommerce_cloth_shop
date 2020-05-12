<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="{{asset('backend/images/user.png ')}}" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
                <div class="email">{{Auth::user()->email}}</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             <i class="material-icons">input</i>Log Out
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
               {{-- check sidebar item for admin --}}
                @if (Request::is('admin*'))
                <li class="{{Request::is('admin/dashboard') ? 'active' : ''}}">
                    <a href="{{route('admin.dashboard')}}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
               
              <!--tags option start from here-->
                <li class="{{Request::is('admin/tag*') ? 'active' : ''}}">
                    <a href="{{route('admin.tag.index')}}">
                        <i class="material-icons">label</i>
                        <span>Brand</span>
                    </a>
                </li>

               <!--category option start from here-->
                <li class="{{Request::is('admin/category*') ? 'active' : ''}}">
                    <a href="{{route('admin.category.index')}}">
                        <i class="material-icons">label</i>
                        <span>Category</span>
                    </a>
                </li>
                  
                 <!--post option start from here-->
                 <li class="{{Request::is('admin/post*') ? 'active' : ''}}">
                    <a href="{{route('admin.post.index')}}">
                        <i class="material-icons">library_books</i>
                        <span>Posts</span>
                    </a>
                </li>

                 <!--post pending option start from here-->
                 <li class="{{Request::is('admin/pending/post') ? 'active' : ''}}">
                    <a href="{{route('admin.post.pending')}}">
                        <i class="material-icons">library_books</i>
                        <span>Posts Pending</span>
                    </a>
                 </li>

                <!--post option start from here-->
                <li class="{{Request::is('admin/product*') ? 'active' : ''}}">
                <a href="{{route('admin.product.index')}}">
                    <i class="material-icons">library_books</i>
                    <span>Products</span>
                </a>
                </li>


                 <!--post pending option start from here-->
                 <li class="{{Request::is('admin/pending/product') ? 'active' : ''}}">
                    <a href="{{route('admin.product.pending')}}">
                        <i class="material-icons">library_books</i>
                        <span>Product Pending</span>
                    </a>
                 </li>
                
                    <!--post pending option start from here-->
                 <li class="{{Request::is('admin/subscriber') ? 'active' : ''}}">
                    <a href="{{route('admin.subscriber')}}">
                        <i class="material-icons">subscription</i>
                        <span>Subscriber</span>
                    </a>
                 </li>
    

                <li class="header">System </li> 
                 <li> 
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     <i class="material-icons">input</i>
                     <span>Log Out</span> 
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                 </li> 
                 
                 <li></li>

                @endif
               




           
                {{-- sidebar item for author --}}
                @if (Request::is('author*'))
                <li class="{{Request::is('author/dashboard') ? 'active' : ''}}">
                    <a href="{{route('author.dashboard')}}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!--post option start from here-->
                <li class="{{Request::is('author/post*') ? 'active' : ''}}">
                <a href="{{route('author.post.index')}}">
                    <i class="material-icons">library_books</i>
                    <span>Posts</span>
                </a>
              </li>
              
               
                <!--post option start from here-->
                <li class="{{Request::is('author/product*') ? 'active' : ''}}">
                    <a href="{{route('author.product.index')}}">
                        <i class="material-icons">library_books</i>
                        <span>Products</span>
                    </a>
                </li>

                <li class="header">System </li> 
                 <li> 
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     <i class="material-icons">input</i>
                     <span>Log Out</span> 
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                 </li> 
                @endif
           
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-light-blue">donut_large</i>
                        <span>Information</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2020 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
   
</section>