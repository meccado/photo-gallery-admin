<div class="row"><!-- header row -->
    <div class="col-md-12 header">
        <div class="col-md-1">
            <a href="{{route('api.v1.admin')}}" class="logo"><img src="{{asset('assets/images/logo_.png')}}"></a>
        </div>
        <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <div class="contactinfo">
                    <ul class="nav nav-pills">
                        <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1 col-sm-0">
                <div class="search-area">
                    <form class="navbar-form navbar-right" role="search"  method="post" action="{{route('api.v1.admin')}}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <input name="search-term" type="text" class="form-control" placeholder="Search ...">
                        </div>
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                    </form>
                </div>
            </div>
            <!--div class="col-md-2 cart clear-padding">
                <div class="col-md-2 .hidden-sm clear-padding">
                    <span class="glyphicon glyphicon-shopping-cart"></span>
                </div>
                <div class="col-md-5">
                    <div class="row items">{{--$cart_count--}} items</div>
                    <div class="row price">ZAR: {{--$cart_total--}}</div>
                </div>
                <div class="col-md-5 col-sm-6 clear-padding">
                    <a href="{{--route('cart')--}}">
                        <button class="btn btn-primary checkout">
                                        CHECKOUT
                            <span class="glyphicon glyphicon-arrow-right"></span>
                        </button>
                    </a>
                </div>
            </div-->
        </div>
    </div>
</div><!-- ./header row -->
