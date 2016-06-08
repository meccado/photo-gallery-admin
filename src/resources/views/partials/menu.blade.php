<div class="row"><!-- menu row -->

    <div class="col-md-12 menu-column"><!-- menu column -->
        <div class="col-md-12 clear-padding">
            <div class="navbar navbar-default custom-nav" role="navigation">
                <div class="holder"><!--holder-->
                    <div class="navbar-header"><!--navbar header-->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{route('api.v1.admin')}}">Home</a>
                    </div><!-- ./navbar header-->
                    <div class="navbar-collapse collapse"><!--navbar-collapser-->
                        <ul class="nav navbar-nav">
                            <li><a href="#">About Us</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('api.v1.admin')}}">Who We Are</a></li>
                                    <li class="divider"></li>
                                    {{--<li><a href="{{route('enquire')}}">Enquiries</a></li>--}}
                                </ul>
                            </li>
                           {{-- <li><a href="{{route('products')}}">Products</a>
                                <ul class="dropdown-menu">
                                    @foreach($menu_data as $k => $category)
                                        @if($k == count($menu_data) - 1)

                                            <li><a href="{{route('category',array('category_id'=>$category->id))}}">{{$category -> category_name}}</a>
                                                @if(!$category->manufacturers->isEmpty())
                                                    <ul class="dropdown-menu">
                                                        @foreach($category ->manufacturers as $key => $sub_menu)
                                                            <!-- last -->
                                                            @if($key == count($category -> manufacturers) - 1)
                                                                <li><a href="{{route('manufacturer',array('manufacturer_id'=>$sub_menu->id))}}">{{$sub_menu -> manufacturer_name}}</a></li>

                                                            @else
                                                                <li><a href="{{route('manufacturer',array('manufacturer_id'=>$sub_menu->id))}}">{{$sub_menu -> manufacturer_name}}</a></li>
                                                                <li class="divider"></li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>

                                        @else

                                            <li><a href="{{route('category',array('category_id'=>$category->id))}}">{{$category -> category_name}}</a>
                                                @if(!$category->manufacturers->isEmpty())
                                                    <ul class="dropdown-menu">
                                                        @foreach($category ->manufacturers as $key => $sub_menu)
                                                            <!-- last -->
                                                            @if($key == count($category -> manufacturers) - 1)
                                                                <li><a href="{{route('manufacturer',array('manufacturer_id'=>$sub_menu->id))}}">{{$sub_menu -> manufacturer_name}}</a></li>

                                                                @else
                                                                    <li><a href="{{route('manufacturer',array('manufacturer_id'=>$sub_menu->id))}}">{{$sub_menu -> manufacturer_name}}</a></li>
                                                                    <li class="divider"></li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                            <li class="divider"></li>
                                        @endif

                                    @endforeach
                                </ul>
                            </li>--}}
                            <li class="divider"></li>
                            <li><a href="{{route('api.v1.admin')}}">Contact Us</a></li>
                            {{--<li><a href="{{route('enquire')}}">Enquire</a></li>--}}
                            <li class="divider"></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                             @if (Auth::guest())
                                  <li><a href="{{ URL::to('login') }}">Login</a></li>
                                  <li><a href="{{ URL::to('register') }}">Register</a></li>
                                @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->email }} <i class="fa fa-caret-down"></i></span></a>
                                  <ul class="dropdown-menu">
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ URL::to('/logout')}}"><i class="fa fa-sign-out"></i> Logout {{ Auth::user()->name}}</a></li>
                                  </ul>

                                </li>
                             @endif
                          </ul>

                    </div><!--navbar-collapser-->

                </div><!-- ./holder-->
            </div>
        </div>
    </div><!-- ./menu column -->
</div><!-- ./menu row -->
