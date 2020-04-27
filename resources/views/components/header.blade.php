<header class="short-stor">
        <div class="container-fluid">
            <div class="row">
                <!-- logo start -->
                <div class="col-md-3 col-sm-12 text-center nopadding-right">
                    <div class="top-logo">
                        <a href="index.html"><img src="frontend/img/logo.gif" alt="" /></a>
                    </div>
                </div>
                <!-- logo end -->
                <!-- mainmenu area start -->
                <div class="col-md-6 text-center">
                    <div class="mainmenu">
                        <nav>
                            <ul>
                                <li class="expand">
                                    <a href="{{route('home')}}">Trang chủ</a>
                                </li>
                                <li class="expand">
                                    <a href="#">Sản phẩm</a>
                                    <ul class="restrain sub-menu">
                                        @if(isset($categories))
                                            @foreach($categories as $category)
                                                <li><a href="{{route('get.list.product', [$category->categories_slug, $category->id])}}">{{$category->categories_name}}</a></li>
                                            @endforeach         
                                        @endif 
                                    </ul>
                                </li>
                                <li class="expand">
                                    <a href="index.html">Tin tức</a>
                                </li>
                                <li class="expand">
                                    <a href="index.html">Giới thiệu</a>
                                </li>
                                <li class="expand">
                                    <a href="{{route('get.contact')}}">Liên hệ</a>
                                </li>
                                <!-- <li class="expand"><a href="shop-grid.html">Man</a>
                                    <div class="restrain mega-menu megamenu1">
                                        <span>
                                            <a class="mega-menu-title" href="shop-grid.html"> Dresses </a>
                                            <a href="shop-grid.html">Coctail</a>
                                            <a href="shop-grid.html">Day</a>
                                            <a href="shop-grid.html">Evening </a>
                                            <a href="shop-grid.html">Sports</a>
                                        </span>
                                        <span>
                                            <a class="mega-menu-title" href="shop-grid.html"> Handbags </a>
                                            <a href="shop-grid.html">Blazers</a>
                                            <a href="shop-grid.html">Table</a>
                                            <a href="shop-grid.html">Coats</a>
                                            <a href="shop-grid.html">Kids</a>
                                        </span>
                                        <span>
                                            <a class="mega-menu-title" href="shop-grid.html"> Clothing </a>
                                            <a href="shop-grid.html">T-Shirt</a>
                                            <a href="shop-grid.html">Coats</a>
                                            <a href="shop-grid.html">Jackets</a>
                                            <a href="shop-grid.html">Jeans</a>
                                        </span>
                                        <span class="block-last">
                                            <img src="frontend/img/block_menu.jpg" alt="" />
                                        </span>
                                    </div>
                                </li>
                                <li class="expand"><a href="shop-list.html">Women</a>
                                    <div class="restrain mega-menu megamenu2">
                                        <span>
                                            <a class="mega-menu-title" href="shop-grid.html">Rings</a>
                                            <a href="shop-grid.html">Coats & Jackets</a>
                                            <a href="shop-grid.html">Blazers</a>
                                            <a href="shop-grid.html">Jackets</a>
                                            <a href="shop-grid.html">Rincoats</a>
                                        </span>
                                        <span>
                                            <a class="mega-menu-title" href="shop-grid.html">Dresses</a>
                                            <a href="shop-grid.html">Ankle Boots</a>
                                            <a href="shop-grid.html">Footwear</a>
                                            <a href="shop-grid.html">Clog Sandals</a>
                                            <a href="shop-grid.html">Combat Boots</a>
                                        </span>
                                        <span>
                                            <a class="mega-menu-title" href="shop-grid.html">Accessories</a>
                                            <a href="shop-grid.html">Bootees bags</a>
                                            <a href="shop-grid.html">Blazers</a>
                                            <a href="shop-grid.html">Jackets</a>
                                            <a href="shop-grid.html">Shoes</a>
                                        </span>
                                        <span class="block-last">
                                            <a class="mega-menu-title" href="shop-grid.html">Top</a>
                                            <a href="shop-grid.html">Briefs</a>
                                            <a href="shop-grid.html">Camis</a>
                                            <a href="shop-grid.html">Nigntwears</a>
                                            <a href="shop-grid.html">Shapewears</a>
                                        </span>
                                    </div>
                                </li>
                                <li class="expand"><a href="shop-grid.html">Shop</a>
                                    <div class="restrain mega-menu megamenu4">
                                        <span>
                                            <a class="mega-menu-title" href="shop-list.html">Shop Pages</a>
                                            <a href="shop-list.html">List View </a>
                                            <a href="shop-grid.html">Grid View</a>
                                            <a href="login.html">My Account</a>
                                            <a href="wishlist.html">Wishlist</a>
                                            <a href="cart.html">Cart </a>
                                            <a href="checkout.html">Checkout </a>
                                        </span>
                                        <span class="block-last">
                                            <a class="mega-menu-title" href="product-details.html">Product Types</a>
                                            <a href="product-details.html">Simple Product</a>
                                            <a href="product-details.html">Variables Product</a>
                                            <a href="product-details.html">Grouped Product</a>
                                            <a href="product-details.html">Downloadable</a>
                                            <a href="product-details.html">Virtual Product</a>
                                            <a href="product-details.html">External Product</a>
                                        </span>
                                    </div>
                                </li>
                                <li class="expand"><a href="#">Pages</a>
                                    <ul class="restrain sub-menu">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="product-details.html">Product Details</a></li>
                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                        <li><a href="shop-list.html">Shop List</a></li>
                                        <li><a href="cart.html">Shopping cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li class="expand"><a href="about-us.html">About</a></li>
                                <li class="expand"><a href="contact-us.html">Contact</a></li> -->
                            </ul>
                        </nav>
                    </div>
                    <!-- mobile menu start -->
                    <!-- <div class="row">
                        <div class="col-sm-12 mobile-menu-area">
                            <div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
                                <span class="mobile-menu-title">Menu</span>
                                <nav>
                                    <ul>
                                        <li><a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="index-2.html">Home 2</a></li>
                                                <li><a href="index-3.html">Home 3</a></li>
                                                <li><a href="index-4.html">Home 4</a></li>
                                                <li><a href="index-5.html">Home 5</a></li>
                                                <li><a href="index-6.html">Home 6</a></li>
                                                <li><a href="index-7.html">Home 7</a></li>
                                                <li><a href="index-8.html">Home 8</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid.html">Man</a>
                                            <ul>
                                                <li><a href="shop-grid.html">Dresses</a>
                                                    <ul>
                                                        <li><a href="shop-grid.html">Coctail</a></li>
                                                        <li><a href="shop-grid.html">Day</a></li>
                                                        <li><a href="shop-grid.html">Evening </a></li>
                                                        <li><a href="shop-grid.html">Sports</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="mega-menu-title" href="shop-grid.html"> Handbags </a>
                                                    <ul>
                                                        <li><a href="shop-grid.html">Blazers</a></li>
                                                        <li><a href="shop-grid.html">Table</a></li>
                                                        <li><a href="shop-grid.html">Coats</a></li>
                                                        <li><a href="shop-grid.html">Kids</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="mega-menu-title" href="shop-grid.html"> Clothing </a>
                                                    <ul>
                                                        <li><a href="shop-grid.html">T-Shirt</a></li>
                                                        <li><a href="shop-grid.html">Coats</a></li>
                                                        <li><a href="shop-grid.html">Jackets</a></li>
                                                        <li><a href="shop-grid.html">Jeans</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-list.html">Women</a>
                                            <ul>
                                                <li><a href="shop-grid.html">Rings</a>
                                                    <ul>
                                                        <li><a href="shop-grid.html">Coats & Jackets</a></li>
                                                        <li><a href="shop-grid.html">Blazers</a></li>
                                                        <li><a href="shop-grid.html">Jackets</a></li>
                                                        <li><a href="shop-grid.html">Rincoats</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop-grid.html">Dresses</a>
                                                    <ul>
                                                        <li><a href="shop-grid.html">Ankle Boots</a></li>
                                                        <li><a href="shop-grid.html">Footwear</a></li>
                                                        <li><a href="shop-grid.html">Clog Sandals</a></li>
                                                        <li><a href="shop-grid.html">Combat Boots</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop-grid.html">Accessories</a>
                                                    <ul>
                                                        <li><a href="shop-grid.html">Bootees bags</a></li>
                                                        <li><a href="shop-grid.html">Blazers</a></li>
                                                        <li><a href="shop-grid.html">Jackets</a></li>
                                                        <li><a href="shop-grid.html">Jackets</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop-grid.html">Top</a>
                                                    <ul>
                                                        <li><a href="shop-grid.html">Briefs</a></li>
                                                        <li><a href="shop-grid.html">Camis</a></li>
                                                        <li><a href="shop-grid.html">Nigntwears</a></li>
                                                        <li><a href="shop-grid.html">Shapewears</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid.html">Shop</a>
                                            <ul>
                                                <li><a href="shop-list.html">Shop Pages</a>
                                                    <ul>
                                                        <li><a href="shop-list.html">List View </a></li>
                                                        <li><a href="shop-grid.html">Grid View</a></li>
                                                        <li><a href="login.html">My Account</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="cart.html">Cart </a></li>
                                                        <li><a href="checkout.html">Checkout </a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="product-details.html">Product Types</a>
                                                    <ul>
                                                        <li><a href="product-details.html">Simple Product</a></li>
                                                        <li><a href="product-details.html">Variables Product</a></li>
                                                        <li><a href="product-details.html">Grouped Product</a></li>
                                                        <li><a href="product-details.html">Downloadable</a></li>
                                                        <li><a href="product-details.html">Virtual Product</a></li>
                                                        <li><a href="product-details.html">External Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                                <li><a href="shop-list.html">Shop List</a></li>
                                                <li><a href="product-details.html">Product Details</a></li>
                                                <li><a href="contact-us.html">Contact Us</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="cart.html">Shopping cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div> -->
                    <!-- mobile menu end -->
                </div>
                <!-- mainmenu area end -->
                <!-- top details area start -->
                <div class="col-md-3 col-sm-12 nopadding-left">
                    <div class="top-detail">
                        <!-- language division start -->
                        <div class="disflow">
                            <div class="expand lang-all disflow">
                                <a href="#"><img src="frontend/img/country/en.gif" alt="">English</a>
                                <ul class="restrain language">
                                    <li><a href="#"><img src="frontend/img/country/it.gif" alt="">italiano</a></li>
                                    <li><a href="#"><img src="frontend/img/country/nl_nl.gif" alt="">Nederlands</a></li>
                                    <li><a href="#"><img src="frontend/img/country/de_de.gif" alt="">Deutsch</a></li>
                                    <li><a href="#"><img src="frontend/img/country/en.gif" alt="">English</a></li>
                                </ul>
                            </div>
                            <div class="expand lang-all disflow">
                                <a href="#">$ USD</a>
                                <ul class="restrain language">
                                    <li><a href="#">€ Eur</a></li>
                                    <li><a href="#">$ USD</a></li>
                                    <li><a href="#">£ GBP</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- language division end -->
                        <!-- addcart top start -->
                        <div class="disflow">
                            <div class="circle-shopping expand">
                                <div class="shopping-carts text-right">
                                    <div class="cart-toggler">
                                        <a href="{{route('get.list.shopping.cart')}}"><i class="icon-bag"></i></a>
                                        <a href="#"><span class="cart-quantity">{{\Cart::count()}}</span></a>
                                    </div>
                                    <div class="restrain small-cart-content">
                                        <ul class="cart-list">
                                            <li>
                                                <a class="sm-cart-product" href="product-details.html">
                                                    <img src="frontend/img/products/sm-products/cart1.jpg" alt="">
                                                </a>
                                                <div class="small-cart-detail">
                                                    <a class="remove" href="#"><i class="fa fa-times-circle"></i></a>
                                                    <a href="#" class="edit-btn"><img src="frontend/img/btn_edit.gif"
                                                            alt="Edit Button" /></a>
                                                    <a class="small-cart-name" href="product-details.html">Voluptas
                                                        nulla</a>
                                                    <span
                                                        class="quantitys"><strong>1</strong>x<span>$75.00</span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="sm-cart-product" href="product-details.html">
                                                    <img src="frontend/img/products/sm-products/cart2.jpg" alt="">
                                                </a>
                                                <div class="small-cart-detail">
                                                    <a class="remove" href="#"><i class="fa fa-times-circle"></i></a>
                                                    <a href="#" class="edit-btn"><img src="frontend/img/btn_edit.gif"
                                                            alt="Edit Button" /></a>
                                                    <a class="small-cart-name" href="product-details.html">Donec ac
                                                        tempus</a>
                                                    <span
                                                        class="quantitys"><strong>1</strong>x<span>$75.00</span></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="total">Subtotal: <span class="amount">$155.00</span></p>
                                        <p class="buttons">
                                            <a href="checkout.html" class="button">Checkout</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- addcart top start -->
                        <!-- search divition start -->
                        <div class="disflow">
                            <div class="header-search expand">
                                <div class="search-icon fa fa-search"></div>
                                <div class="product-search restrain">
                                    <div class="container nopadding-right">
                                        <form action="index.html" id="searchform" method="get">
                                            <div class="input-group">
                                                <input type="text" class="form-control" maxlength="128"
                                                    placeholder="Search product...">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-default"><i
                                                            class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- search divition end -->
                        <div class="disflow">
                            <div class="expand dropps-menu">
                                <a href="#"><i class="fa fa-align-right"></i></a>
                                <ul class="restrain language">
                                    @if(Auth::check())
                                    <li><a href="login.html">Quản lý</a></li>
                                    <li><a href="wishlist.html">Sản phẩm yêu thích</a></li>
                                    <li><a href="cart.html">Giỏ hàng</a></li>
                                    <li><a href="{{route('get.logout')}}">Thoát</a></li>
                                    @else
                                    <li><a href="{{route('get.login')}}">Đăng nhập</a></li>
                                    <li><a href="{{route('get.register')}}">Đăng ký</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- top details area end -->
            </div>
        </div>
    </header>