<div class="main-menu">
    <nav class="navbar ">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="{{asset('/schoolFrontend/images/logo.png')}}" alt="logo" class="img-responsive"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li >
                        <a href="/index"   role="button" aria-haspopup="true" aria-expanded="false">Home  </a>

                    </li>

                    <li class="dropdown">
                        <a href="/schools" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Schools & Child Care </a>

                    </li>
                    <li class="dropdown">
                        <a href="/features" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features </a>

                    </li>
                    <li class="dropdown">
                        <a href="parents" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Parents</a>

                    </li>
                    <li class="dropdown">
                        <a href="/resources" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resources  </a>

                    </li>
                    <li class="dropdown">
                        <a href="/pricing" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pricing  </a>

                    </li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/signup">Sign Up</a></li>
                    <li><span class="menu-search"><i class="fa fa-search" aria-hidden="true"></i></span></li>
                    <li class="menu_cart dropdown"><span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                        <ul class="dropdown-menu first_dropdown shop_feature">
                            <li class="feature_item">
                                <div class="featured_image">
                                    <img src="{{asset('/schoolFrontend/images/product/menu_cart_01.jpg')}}" alt="Fratured image" class="img-responsive"/>
                                </div><!--featured image-->
                                <div class="featured_content">
                                    <h3><a href="#">Product Title</a> </h3>
                                    <span class="remove"><i class="fa fa-times" aria-hidden="true"></i></span>
                                    <p>quantity: 1</p>
                                    <span>$85</span>
                                </div><!--featured content-->
                            </li><!--  feature item -->
                            <li class="feature_item">
                                <div class="featured_image">
                                    <img src="{{asset('/schoolFrontend/images/product/menu_cart_02.jpg')}}" alt="Fratured image" class="img-responsive"/>
                                </div><!--featured image-->
                                <div class="featured_content">
                                    <h3><a href="#">Product Title</a> </h3>
                                    <span class="remove"><i class="fa fa-times" aria-hidden="true"></i></span>
                                    <p>quantity: 2</p>
                                    <span>$85</span>
                                </div><!--featured content-->
                            </li><!--  feature item -->
                            <li class="feature_item">
                                <div class="featured_image">
                                    <img src="{{asset('/schoolFrontend/images/product/menu_cart_03.jpg')}}" alt="Fratured image" class="img-responsive"/>
                                </div><!--featured image-->
                                <div class="featured_content">
                                    <h3><a href="#">Product Title</a> </h3>
                                    <span class="remove"><i class="fa fa-times" aria-hidden="true"></i></span>
                                    <p>quantity: 4</p>
                                    <span>$85</span>
                                </div><!--featured content-->
                            </li><!--  feature item -->
                            <li class="cart_total">total order: <span>$591.00</span></li>
                            <li><a href="shop-cart.html" class="button-default check_out">Check Out</a></li>
                        </ul>
                    </li>

                </ul>
                <form class="menu-search-form">
                    <input type="text" name="search" placeholder="Search here...">
                    <span class="menu-search-close"><i class="fa fa-times" aria-hidden="true"></i></span>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</div><!-- main menu -->