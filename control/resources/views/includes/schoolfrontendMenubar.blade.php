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
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="/index">Home Style 01</a></li>

                            <li ><a href="/index2">Home Style 02</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="about.html">About Style 01</a></li>
                            <li><a href="about-2.html">About Style 02</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Classes <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="classes.html">Classes</a></li>
                            <li><a href="class-single.html">Classes Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Teachers <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="teachers.html">Teachers</a></li>
                            <li><a href="teacher-details.html">Teacher Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="gallery-2.html">Gallery Two</a></li>
                            <li><a href="event.html">Event</a></li>
                            <li><a href="event-single.html">Event Details</a></li>
                            <li><a href="404.html">404 Error</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog.html">Blog Page</a></li>
                            <li><a href="single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="product.html">Product Page</a></li>
                            <li><a href="product-details.html">Product Details</a></li>
                            <li><a href="shop-cart.html">Shop Cart</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><span class="menu-search"><i class="fa fa-search" aria-hidden="true"></i></span></li>
                    <li class="menu_cart dropdown"><span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                        <ul class="dropdown-menu first_dropdown shop_feature">
                            <li class="feature_item">
                                <div class="featured_image">
                                    <img src="images/product/menu_cart_01.jpg" alt="Fratured image" class="img-responsive"/>
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
                                    <img src="images/product/menu_cart_02.jpg" alt="Fratured image" class="img-responsive"/>
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
                                    <img src="images/product/menu_cart_03.jpg" alt="Fratured image" class="img-responsive"/>
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