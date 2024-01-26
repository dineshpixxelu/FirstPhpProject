
<?php include "header.php"; 
include 'database.php';

?>

<body
    class="home page-template-default page page-id-15020 theme-hotale gdlr-core-body tourmaster-body woocommerce-no-js hotale-body hotale-body-front hotale-full hotale-with-sticky-navigation hotale-blockquote-style-3 gdlr-core-link-to-lightbox"
    data-home-url="index.html"
>


 
    <div class="hotale-mobile-header-wrap">
        <div class="hotale-mobile-header hotale-header-background hotale-style-slide hotale-sticky-mobile-navigation" id="hotale-mobile-header">
            <div class="hotale-mobile-header-container hotale-container clearfix">
                <div class="hotale-logo hotale-item-pdlr">
                    <div class="hotale-logo-inner">
                        <a class="hotale-fixed-nav-logo" href="index.html">
                            <img
                                src="upload/logo-hotel-fixedx1.png"
                                alt=""
                                width="40"
                                height="40"
                                title="logo-hotel-fixedx1"
                            />
                        </a>
                        <a class="hotale-orig-logo" href="index.html">
                            <img src="upload/logo-hotel-mobile.png" alt="" width="110" height="110" title="logo-hotel-mobile" />
                        </a>
                    </div>
                </div>
                <div class="hotale-mobile-menu-right">
                    <div class="tourmaster-user-top-bar tourmaster-guest tourmaster-style-2" data-redirect="index.html" data-ajax-url="#">
                        <span class="tourmaster-user-top-bar-login" data-tmlb="login"><i class="icon_lock_alt"></i><span class="tourmaster-text">Login</span></span>
                        <div class="tourmaster-lightbox-content-wrap" data-tmlb-id="login">
                            <div class="tourmaster-lightbox-head">
                                <h3 class="tourmaster-lightbox-title">Login</h3>
                                <i class="tourmaster-lightbox-close icon_close"></i>
                            </div>
                            <div class="tourmaster-lightbox-content">
                                <form class="tourmaster-login-form tourmaster-form-field tourmaster-with-border" method="post" action="#">
                                    <div class="tourmaster-login-form-fields clearfix">
                                        <p class="tourmaster-login-user">
                                            <label>Username or E-Mail</label>
                                            <input type="text" name="log" />
                                        </p>
                                        <p class="tourmaster-login-pass">
                                            <label>Password</label>
                                            <input type="password" name="pwd" />
                                        </p>
                                    </div>

                                    <p class="tourmaster-login-submit">
                                        <input type="submit" name="wp-submit" class="tourmaster-button" value="Sign In!" />
                                    </p>
                                    <p class="tourmaster-login-lost-password">
                                        <a href="#">Forget Password?</a>
                                    </p>

                                </form>

                                <div class="tourmaster-login-bottom">
                                    <h3 class="tourmaster-login-bottom-title">Do not have an account?</h3>
                                    <a class="tourmaster-login-bottom-link" href="register.html">Create an Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hotale-mobile-menu">
                        <a class="hotale-mm-menu-button hotale-mobile-menu-button hotale-mobile-button-hamburger" href="#hotale-mobile-menu"><span></span></a>
                        <div class="hotale-mm-menu-wrap hotale-navigation-font" id="hotale-mobile-menu" data-slide="right">
                            <ul id="menu-main-navigation" class="m-menu">
                                <li class="menu-item menu-item-home current-menu-item  menu-item-has-children" >
                                    <a href="index.html" aria-current="page">Home</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-home current-menu-item page_item page-item-14980 current_page_item">
                                            <a href="https://max-themes.net/demos/hotale/hotale/resort/index.html" aria-current="page">Home &#8211; Resort 1</a>
                                        </li>
                                        <li class="menu-item">
                                            <a target="_blank" rel="noopener" href="https://max-themes.net/demos/hotale/hotale/resort2/index.html">Home &#8211; Resort 2</a>
                                        </li>
                                        <li class="menu-item">
                                            <a rel="noopener" href="index.html">Home &#8211; Hotel 1</a>
                                        </li>
                                        <li class="menu-item">
                                            <a target="_blank" rel="noopener" href="https://max-themes.net/demos/hotale/hotale/hotel2/index.html">Home &#8211; Hotel 2</a>
                                        </li>
                                        <li class="menu-item">
                                            <a rel="noopener" target="_blank" href="https://max-themes.net/demos/hotale/hotale/apartment/index.html">Home &#8211; Apartment</a>
                                        </li>
                                        <li class="menu-item">
                                            <a target="_blank" href="https://max-themes.net/demos/hotale/hotale/apartment2/index.html">Home &#8211; Apartment 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="about-us.html">About Us</a></li>
                                        <li class="menu-item"><a href="about-us-2.html">About Us 2</a></li>
                                        <li class="menu-item"><a href="about-us-3.html">About Us 3</a></li>
                                        <li class="menu-item"><a href="our-team.html">Our Team</a></li>
                                        <li class="menu-item"><a href="hotel-review.html">Hotel Review</a></li>
                                        <li class="menu-item"><a href="faq.html">FAQ</a></li>
                                        <li class="menu-item"><a href="gallery.html">Gallery</a></li>
                                        <li class="menu-item"><a href="price-table.html">Price Table</a></li>
                                        <li class="menu-item"><a href="maintenance.html">Maintenance</a></li>
                                        <li class="menu-item"><a href="coming-soon.html">Coming Soon</a></li>
                                        <li class="menu-item"><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="room-grid-style-1.html">Rooms</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="room-grid-style-1.html">Room Grid Style 1</a></li>
                                        <li class="menu-item"><a href="room-grid-style-2.html">Room Grid Style 2</a></li>
                                        <li class="menu-item"><a href="room-grid-style-3.html">Room Grid Style 3</a></li>
                                        <li class="menu-item"><a href="room-grid-style-4.html">Room Grid Style 4</a></li>
                                        <li class="menu-item"><a href="room-modern-style.html">Room Modern Style</a></li>
                                        <li class="menu-item"><a href="room-side-thumbnail.html">Room Side Thumbnail</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="room-search.html">Reservation</a></li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="blog-full-right-sidebar.html">Blog</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-has-children">
                                            <a href="blog-3-columns-with-frame.html">Blog Columns</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="blog-2-columns.html">Blog 2 Columns</a></li>
                                                <li class="menu-item">
                                                    <a href="blog-2-columns-with-frame.html">Blog 2 Columns With Frame</a>
                                                </li>
                                                <li class="menu-item"><a href="blog-3-columns.html">Blog 3 Columns</a></li>
                                                <li class="menu-item">
                                                    <a href="blog-3-columns-with-frame.html">Blog 3 Columns With Frame</a>
                                                </li>
                                                <li class="menu-item"><a href="blog-4-columns.html">Blog 4 Columns</a></li>
                                                <li class="menu-item">
                                                    <a href="blog-4-columns-with-frame.html">Blog 4 Columns With Frame</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="blog-full-right-sidebar.html">Blog Full</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="blog-full-right-sidebar.html">Blog Full Right Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-full-right-sidebar-with-frame.html">Blog Full Right Sidebar With Frame</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-full-left-sidebar.html">Blog Full Left Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-full-left-sidebar-with-frame.html">Blog Full Left Sidebar With Frame</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-full-both-sidebar.html">Blog Full Both Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-full-both-sidebar-with-frame.html">Blog Full Both Sidebar With Frame</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="blog-grid-3-columns.html">Blog Grid</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="blog-grid-2-columns.html">Blog Grid 2 Columns</a></li>
                                                <li class="menu-item">
                                                    <a href="blog-grid-2-columns-no-space.html">Blog Grid 2 Columns No Space</a>
                                                </li>
                                                <li class="menu-item"><a href="blog-grid-3-columns.html">Blog Grid 3 Columns</a></li>
                                                <li class="menu-item">
                                                    <a href="blog-grid-3-columns-no-space.html">Blog Grid 3 Columns No Space</a>
                                                </li>
                                                <li class="menu-item"><a href="blog-grid-4-columns.html">Blog Grid 4 Columns</a></li>
                                                <li class="menu-item">
                                                    <a href="blog-grid-4-columns-no-space.html">Blog Grid 4 Columns No Space</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="single-blog.html">Single Posts</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hotale-body-outer-wrapper">
        <div class="hotale-body-wrapper clearfix hotale-with-frame">
            <div class="hotale-top-bar hotale-middle-logo">
                <div class="hotale-top-bar-background"></div>
                <div class="hotale-top-bar-container hotale-top-bar-full">
                    <div class="hotale-top-bar-container-inner clearfix">
                        <div class="hotale-top-bar-left hotale-item-pdlr">
                            <div class="hotale-top-bar-left-text">
                                <i class="icon-phone" style="font-size: 15px; color: #2d2d2d; margin-right: 10px;"></i>1-634-567-34
                                <i class="icon-envelope" style="font-size: 15px; color: #2d2d2d; margin-left: 25px; margin-right: 10px;"></i>
                                <a href="#" style="color: #191919 !important;">test@gmail.com</a>
                            </div>
                        </div>
                        <div class="hotale-logo hotale-item-pdlr">
                            <div class="hotale-logo-inner">
                                <a class="hotale-fixed-nav-logo" href="index.html">
                                    <img
                                        src="upload/logo-hotel-fixedx1.png"
                                        alt=""
                                        width="40"
                                        height="40"
                                        title="logo-hotel-fixedx1"
                                        srcset="
                                            upload/logo-hotel-fixedx1.png 1x,
                                            upload/logo-hotel-fixedx2.png 2x
                                        "
                                    />
                                </a>
                                <a class="hotale-orig-logo" href="index.html">
                                    <img
                                        src="upload/logo-hotel-1.png"
                                        alt=""
                                        width="80"
                                        height="95"
                                        title="logo-hotel-1"
                                        srcset="
                                            upload/logo-hotel-1.png     1x,
                                            upload/logo-hotel-1x2-1.png 2x
                                        "
                                    />
                                </a>
                            </div>
                        </div>
                        <div class="hotale-top-bar-right hotale-item-pdlr">
                            <div class="hotale-top-bar-right-social">
                                <a href="#" target="_blank" class="hotale-top-bar-social-icon" title="facebook"><i class="fa5b fa5-facebook"></i></a>
                                <a href="#" target="_blank" class="hotale-top-bar-social-icon" title="linkedin"><i class="fa5b fa5-linkedin"></i></a>
                                <a href="#" target="_blank" class="hotale-top-bar-social-icon" title="pinterest"><i class="fa5b fa5-pinterest-p"></i></a>
                                <a href="#" target="_blank" class="hotale-top-bar-social-icon" title="twitter"><i class="fa5b fa5-twitter"></i></a>
                                <a href="#" target="_blank" class="hotale-top-bar-social-icon" title="instagram"><i class="fa5b fa5-instagram"></i></a>
                            </div>
                            <div class="tourmaster-currency-switcher">
                                <span class="tourmaster-head"><span>USD</span><i class="fa fa-sort-down"></i></span>
                                <div class="tourmaster-currency-switcher-inner">
                                    <div class="tourmaster-currency-switcher-content">
                                        <ul>
                                            <li><a href="#">EUR</a></li>
                                            <li><a href="#">CHF</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="tourmaster-user-top-bar tourmaster-guest tourmaster-style-2"
                                data-redirect="index.html"
                                data-ajax-url="#"
                            >
                                <span class="tourmaster-user-top-bar-login" data-tmlb="login"><i class="icon_lock_alt"></i><span class="tourmaster-text">Login</span></span>
                                <div class="tourmaster-lightbox-content-wrap" data-tmlb-id="login">
                                    <div class="tourmaster-lightbox-head">
                                        <h3 class="tourmaster-lightbox-title">Login</h3>
                                        <i class="tourmaster-lightbox-close icon_close"></i>
                                    </div>
                                    <div class="tourmaster-lightbox-content">
                                        <form class="tourmaster-login-form tourmaster-form-field tourmaster-with-border" method="post" action="#">
                                            <div class="tourmaster-login-form-fields clearfix">
                                                <p class="tourmaster-login-user">
                                                    <label>Username or E-Mail</label>
                                                    <input type="text" name="log" />
                                                </p>
                                                <p class="tourmaster-login-pass">
                                                    <label>Password</label>
                                                    <input type="password" name="pwd" />
                                                </p>
                                            </div>

                                            <p class="tourmaster-login-submit">
                                                <input type="submit" name="wp-submit" class="tourmaster-button" value="Sign In!" />
                                            </p>
                                            <p class="tourmaster-login-lost-password">
                                                <a href="#">Forget Password?</a>
                                            </p>
                                        </form>

                                        <div class="tourmaster-login-bottom">
                                            <h3 class="tourmaster-login-bottom-title">Do not have an account?</h3>
                                            <a class="tourmaster-login-bottom-link" href="register.html">Create an Account</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <header class="hotale-header-wrap hotale-header-style-plain hotale-style-top-bar-logo hotale-sticky-navigation hotale-style-slide" data-navigation-offset="75">
                <div class="hotale-header-background"></div>
                <div class="hotale-header-container hotale-header-full">
                    <div class="hotale-header-container-inner clearfix">
                        <div class="hotale-navigation hotale-item-pdlr clearfix hotale-navigation-submenu-indicator">
                            <div class="hotale-main-menu" id="hotale-main-menu">
                                <ul id="menu-main-navigation-1" class="sf-menu">
                                    <li
                                        class="menu-item menu-item-home current-menu-item  menu-item-has-children hotale-normal-menu"
                                    >
                                        <a href="index.html" class="sf-with-ul-pre">Home</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-home" data-size="60">
                                                <a target="_blank" href="https://max-themes.net/demos/hotale/hotale/resort/index.html">Home &#8211; Resort 1</a>
                                            </li>
                                            <li class="menu-item" data-size="60">
                                                <a target="_blank" href="https://max-themes.net/demos/hotale/hotale/resort2/index.html">Home &#8211; Resort 2</a>
                                            </li>
                                            <li class="menu-item" data-size="60">
                                                <a href="index.html">Home &#8211; Hotel 1</a>
                                            </li>
                                            <li class="menu-item" data-size="60">
                                                <a target="_blank" href="https://max-themes.net/demos/hotale/hotale/hotel2/index.html">Home &#8211; Hotel 2</a>
                                            </li>
                                            <li class="menu-item" data-size="60">
                                                <a target="_blank" href="https://max-themes.net/demos/hotale/hotale/apartment/index.html">Home &#8211; Apartment</a>
                                            </li>
                                            <li class="menu-item" data-size="60">
                                                <a target="_blank" href="https://max-themes.net/demos/hotale/hotale/apartment2/index.html">Home &#8211; Apartment 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children hotale-normal-menu">
                                        <a href="#" class="sf-with-ul-pre">Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item" data-size="60"><a href="about-us.html">About Us</a></li>
                                            <li class="menu-item" data-size="60"><a href="about-us-2.html">About Us 2</a></li>
                                            <li class="menu-item" data-size="60"><a href="about-us-3.html">About Us 3</a></li>
                                            <li class="menu-item" data-size="60"><a href="our-team.html">Our Team</a></li>
                                            <li class="menu-item" data-size="60"><a href="hotel-review.html">Hotel Review</a></li>
                                            <li class="menu-item" data-size="60"><a href="faq.html">FAQ</a></li>
                                            <li class="menu-item" data-size="60"><a href="gallery.html">Gallery</a></li>
                                            <li class="menu-item" data-size="60"><a href="price-table.html">Price Table</a></li>
                                            <li class="menu-item" data-size="60"><a href="maintenance.html">Maintenance</a></li>
                                            <li class="menu-item" data-size="60"><a href="coming-soon.html">Coming Soon</a></li>
                                            <li class="menu-item" data-size="60"><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children hotale-normal-menu">
                                        <a href="room-grid-style-1.html" class="sf-with-ul-pre">Rooms</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item" data-size="60">
                                                <a href="room-grid-style-1.html">Room Grid Style 1</a>
                                            </li>
                                            <li class="menu-item" data-size="60">
                                                <a href="room-grid-style-2.html">Room Grid Style 2</a>
                                            </li>
                                            <li class="menu-item" data-size="60">
                                                <a href="room-grid-style-3.html">Room Grid Style 3</a>
                                            </li>
                                            <li class="menu-item" data-size="60">
                                                <a href="room-grid-style-4.html">Room Grid Style 4</a>
                                            </li>
                                            <li class="menu-item" data-size="60">
                                                <a href="room-modern-style.html">Room Modern Style</a>
                                            </li>
                                            <li class="menu-item" data-size="60">
                                                <a href="room-side-thumbnail.html">Room Side Thumbnail</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item hotale-normal-menu">
                                        <a href="room-search.html">Reservation</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children hotale-normal-menu">
                                        <a href="blog-full-right-sidebar.html" class="sf-with-ul-pre">Blog</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-has-children" data-size="60">
                                                <a href="blog-3-columns-with-frame.html" class="sf-with-ul-pre">Blog Columns</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="blog-2-columns.html">Blog 2 Columns</a></li>
                                                    <li class="menu-item">
                                                        <a href="blog-2-columns-with-frame.html">Blog 2 Columns With Frame</a>
                                                    </li>
                                                    <li class="menu-item"><a href="blog-3-columns.html">Blog 3 Columns</a></li>
                                                    <li class="menu-item">
                                                        <a href="blog-3-columns-with-frame.html">Blog 3 Columns With Frame</a>
                                                    </li>
                                                    <li class="menu-item"><a href="blog-4-columns.html">Blog 4 Columns</a></li>
                                                    <li class="menu-item">
                                                        <a href="blog-4-columns-with-frame.html">Blog 4 Columns With Frame</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children" data-size="60">
                                                <a href="blog-full-right-sidebar.html" class="sf-with-ul-pre">Blog Full</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item">
                                                        <a href="blog-full-right-sidebar.html">Blog Full Right Sidebar</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-full-right-sidebar-with-frame.html">Blog Full Right Sidebar With Frame</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-full-left-sidebar.html">Blog Full Left Sidebar</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-full-left-sidebar-with-frame.html">Blog Full Left Sidebar With Frame</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-full-both-sidebar.html">Blog Full Both Sidebar</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-full-both-sidebar-with-frame.html">Blog Full Both Sidebar With Frame</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children" data-size="60">
                                                <a href="blog-grid-3-columns.html" class="sf-with-ul-pre">Blog Grid</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item">
                                                        <a href="blog-grid-2-columns.html">Blog Grid 2 Columns</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-grid-2-columns-no-space.html">Blog Grid 2 Columns No Space</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-grid-3-columns.html">Blog Grid 3 Columns</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-grid-3-columns-no-space.html">Blog Grid 3 Columns No Space</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-grid-4-columns.html">Blog Grid 4 Columns</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-grid-4-columns-no-space.html">Blog Grid 4 Columns No Space</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item" data-size="60"><a href="single-blog.html">Single Posts</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-ite hotale-normal-menu"><a href="contact.html">Contact</a></li>
                                </ul>
                                <div class="hotale-navigation-slide-bar hotale-navigation-slide-bar-style-2 hotale-left" data-size-offset="0" data-width="19px" id="hotale-navigation-slide-bar"></div>
                            </div>
                            <div class="hotale-main-menu-right-wrap clearfix hotale-item-mglr hotale-navigation-top">
                                <div class="tourmaster-room-navigation-checkout-wrap">
                                    <a
                                        id="tourmaster-room-navigation-checkout-button"
                                        class="tourmaster-room-navigation-checkout-button"
                                        href="#"
                                        data-checkout-label="Check Out"
                                        data-label="Book Now"
                                    >
                                        Book Now<span class="tourmaster-count">0</span>
                                    </a>
                                    <div class="tourmaster-room-cart-item-wrap">
                                        <div class="tourmaster-room-cart-items">
                                            <ul></ul>
                                            <a class="#">Check Out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- hotale-navigation -->
                    </div>
                    <!-- hotale-header-inner -->
                </div>
                <!-- hotale-header-container -->
            </header>
            <!-- header -->

 <div class="banner">
  
    <div class="slider">
	
	
	  
	</div>
  
  </div>
            
            <div class="hotale-page-wrapper" id="hotale-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    
                    <div class="gdlr-core-pbf-wrapper" style="padding: 90px 0px 30px 0px;">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-background-wrap" style="top: 155px;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/hotel-room-bg.png); background-repeat: no-repeat; background-position: top center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-2">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 35px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" style="max-width: 660px;">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 50px; font-weight: 400; letter-spacing: 0px; text-transform: none;">
                                                            Our Rooms<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                    <span
                                                        class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption"
                                                        style="font-size: 20px; font-style: normal; letter-spacing: 0px; color: #94959b; margin-top: 20px;"
                                                    >
                                                        All our hotels are fabulous, they are destinations unto themselves. We have crossed the globe to bring you only the best.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                                                    <div class="gdlr-core-divider-container" style="max-width: 43px;">
                                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #193573; border-width: 2px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-3">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeIn" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="tourmaster-room-item clearfix tourmaster-room-item-style-grid3" id="gdlr-core-room-1">
                                                    <div class="gdlr-core-flexslider flexslider gdlr-core-js-2" data-type="carousel" data-column="3" data-move="1" data-nav="navigation-outer" data-nav-parent="self" data-vcenter-nav="1">
                                                        <div class="gdlr-core-flexslider-custom-nav gdlr-core-style-navigation-outer gdlr-core-center-align" style="margin-top: -20px;">
                                                            <i class="icon-arrow-left flex-prev" style="color: #9e9e9e; font-size: 34px; left: -80px;"></i>
                                                            <i class="icon-arrow-right flex-next" style="color: #9e9e9e; font-size: 34px; right: -80px;"></i>
                                                        </div>
                                                        <ul class="slides">
														
														<?php 
														   $sql = mysqli_query($con, "Select * from room");
														   while($res = mysqli_fetch_array($sql)){
															   $image = $res['room_image'];
															   $imageUrl = "http://" . $_SERVER['HTTP_HOST'] . "/hotel/admin/assets/images/" . $image;  
															   $title = $res['room_title'];
															   $type = $res['room_type'];
															   $capacity = $res['room_capacity'];
															   $r_prc = $res['regular_prc'];
															   $s_prc = $res['sale_prc'];
															   //echo $r_prc."abc".$s_prc. "<br>";
															   if( $s_prc != "" ){
															   //$final_dis = intval($r_prc) - intval($s_prc);
															   $final_dis = 100 * (intval($r_prc) - intval($s_prc)) / intval($r_prc). '%';
														      }
															  else{$final_dis="";}
														
														?>
                                                            <li class="gdlr-core-item-mglr">
															   <div class="discount"> <?php echo $final_dis;  ?> </div>
                                                                <div class="tourmaster-room-grid3 tourmaster-grid-frame">
                                                                    <div
                                                                        class="tourmaster-room-grid-inner"
                                                                        style="
                                                                            box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                            -moz-box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                            -webkit-box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                        "
                                                                    >
                                                                        <div class="tourmaster-room-thumbnail tourmaster-media-image gdlr-core-outer-frame-element">
                                                                            <a href="single-room.html">
                                                                                <img
                                                                                    src="<?php echo $imageUrl; ?>"
                                                                                    alt=""
                                                                                    width="780"
                                                                                    height="595"
                                                                                />
                                                                            </a>
                                                                        </div>
                                                                        <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="room-item-6" style="padding-top: 75px; padding-bottom: 45px;">
                                                                            <div class="tourmaster-price-wrap tourmaster-with-bg"><span class="tourmaster-head">From</span><span class="tourmaster-price">
																			$<?php
																			
																			  //if($s_prc != empty){
																				//  echo  $s_prc;
																			  //}
																			  echo $r_prc ;
																			
														                     ?>
																			
																			
																			
																			</span></div>
                                                                            <h3 class="tourmaster-room-title gdlr-core-skin-title" style="font-size: 26px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                                                <a href="single-room.html"><?php $title; ?></a>
                                                                            </h3>
                                                                            <div class="tourmaster-info-wrap clearfix">
                                                                                <div class="tourmaster-info tourmaster-info-bed-type"><i class="gdlr-icon-double-bed2"></i><span class="tourmaster-tail"><?php echo  $type; ?></span></div>
                                                                                <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail"><?php echo  $capacity; ?></span></div>
                                                                            </div>
                                                                            <a class="tourmaster-read-more tourmaster-type-text" href="single-room.html">
                                                                                Book Now<i class="icon-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
															<?php 
														   }
															
															?>
                                                            <!--<li class="gdlr-core-item-mglr">
                                                                <div class="tourmaster-room-grid3 tourmaster-grid-frame">
                                                                    <div
                                                                        class="tourmaster-room-grid-inner"
                                                                        style="
                                                                            box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                            -moz-box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                            -webkit-box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                        "
                                                                    >
                                                                        <div class="tourmaster-room-thumbnail tourmaster-media-image gdlr-core-outer-frame-element">
                                                                            <a href="single-room.html">
                                                                                <img
                                                                                    src="upload/shop-slo-vhztm9QC0L0-unsplash-780x595.jpg"
                                                                                    alt=""
                                                                                    width="780"
                                                                                    height="595"
                                                                                />
                                                                            </a>
                                                                        </div>
                                                                        <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="room-item-6" style="padding-top: 75px; padding-bottom: 45px;">
                                                                            <div class="tourmaster-price-wrap tourmaster-with-bg"><span class="tourmaster-head">From</span><span class="tourmaster-price">$75</span></div>
                                                                            <h3 class="tourmaster-room-title gdlr-core-skin-title" style="font-size: 26px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                                                <a href="single-room.html">Standard Deluxe</a>
                                                                            </h3>
                                                                            <div class="tourmaster-info-wrap clearfix">
                                                                                <div class="tourmaster-info tourmaster-info-bed-type"><i class="gdlr-icon-double-bed2"></i><span class="tourmaster-tail">2 Single Beds</span></div>
                                                                                <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail">6 Guests</span></div>
                                                                            </div>
                                                                            <a class="tourmaster-read-more tourmaster-type-text" href="single-room.html">
                                                                                Book Now<i class="icon-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="tourmaster-room-grid3 tourmaster-grid-frame">
                                                                    <div
                                                                        class="tourmaster-room-grid-inner"
                                                                        style="
                                                                            box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                            -moz-box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                            -webkit-box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                        "
                                                                    >
                                                                        <div class="tourmaster-room-thumbnail tourmaster-media-image gdlr-core-outer-frame-element tourmaster-with-ribbon">
                                                                            <a href="single-room.html">
                                                                                <img
                                                                                    src="upload/roberto-nickson-emqnSQwQQDo-unsplash-scaled-780x595.jpg"
                                                                                    alt=""
                                                                                    width="780"
                                                                                    height="595"
                                                                                />
                                                                            </a>
                                                                            <div class="tourmaster-ribbon">20% Off</div>
                                                                        </div>
                                                                        <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="room-item-6" style="padding-top: 75px; padding-bottom: 45px;">
                                                                            <div class="tourmaster-price-wrap tourmaster-with-bg">
                                                                                <span class="tourmaster-head">From</span><span class="tourmaster-price-discount">$250</span><span class="tourmaster-price">$200</span>
                                                                            </div>
                                                                            <h3 class="tourmaster-room-title gdlr-core-skin-title" style="font-size: 26px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                                                <a href="single-room.html">The Penthouse</a>
                                                                            </h3>
                                                                            <div class="tourmaster-info-wrap clearfix">
                                                                                <div class="tourmaster-info tourmaster-info-bed-type"><i class="gdlr-icon-double-bed2"></i><span class="tourmaster-tail">2 King Beds</span></div>
                                                                                <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail">6 Guests</span></div>
                                                                            </div>
                                                                            <a class="tourmaster-read-more tourmaster-type-text" href="single-room.html">
                                                                                Book Now<i class="icon-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="tourmaster-room-grid3 tourmaster-grid-frame">
                                                                    <div
                                                                        class="tourmaster-room-grid-inner"
                                                                        style="
                                                                            box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                            -moz-box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                            -webkit-box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                        "
                                                                    >
                                                                        <div class="tourmaster-room-thumbnail tourmaster-media-image gdlr-core-outer-frame-element">
                                                                            <a href="single-room.html">
                                                                                <img
                                                                                    src="upload/shutterstock_560973166-780x595.jpg"
                                                                                    alt=""
                                                                                    width="780"
                                                                                    height="595"
                                                                                />
                                                                            </a>
                                                                        </div>
                                                                        <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="room-item-6" style="padding-top: 75px; padding-bottom: 45px;">
                                                                            <div class="tourmaster-price-wrap tourmaster-with-bg"><span class="tourmaster-head">From</span><span class="tourmaster-price">$80</span></div>
                                                                            <h3 class="tourmaster-room-title gdlr-core-skin-title" style="font-size: 26px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                                                <a href="single-room.html">Grand Suite Room</a>
                                                                            </h3>
                                                                            <div class="tourmaster-info-wrap clearfix">
                                                                                <div class="tourmaster-info tourmaster-info-bed-type"><i class="gdlr-icon-double-bed2"></i><span class="tourmaster-tail">1 King Bed</span></div>
                                                                                <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail">4 Guests</span></div>
                                                                            </div>
                                                                            <a class="tourmaster-read-more tourmaster-type-text" href="single-room.html">
                                                                                Book Now<i class="icon-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="tourmaster-room-grid3 tourmaster-grid-frame">
                                                                    <div
                                                                        class="tourmaster-room-grid-inner"
                                                                        style="
                                                                            box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                            -moz-box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                            -webkit-box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                        "
                                                                    >
                                                                        <div class="tourmaster-room-thumbnail tourmaster-media-image gdlr-core-outer-frame-element tourmaster-with-ribbon">
                                                                            <a href="single-room.html">
                                                                                <img
                                                                                    src="upload/andrea-davis-1uNh3B3ppl4-unsplash-780x595.jpg"
                                                                                    alt=""
                                                                                    width="780"
                                                                                    height="595"
                                                                                />
                                                                            </a>
                                                                            <div class="tourmaster-ribbon">15% Off</div>
                                                                        </div>
                                                                        <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="room-item-6" style="padding-top: 75px; padding-bottom: 45px;">
                                                                            <div class="tourmaster-price-wrap tourmaster-with-bg">
                                                                                <span class="tourmaster-head">From</span><span class="tourmaster-price-discount">$80</span><span class="tourmaster-price">$69</span>
                                                                            </div>
                                                                            <h3 class="tourmaster-room-title gdlr-core-skin-title" style="font-size: 26px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                                                <a href="single-room.html">Junior Suite Room</a>
                                                                            </h3>
                                                                            <div class="tourmaster-info-wrap clearfix">
                                                                                <div class="tourmaster-info tourmaster-info-bed-type"><i class="gdlr-icon-double-bed2"></i><span class="tourmaster-tail">1 Double Bed</span></div>
                                                                                <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail">3 Guests</span></div>
                                                                            </div>
                                                                            <a class="tourmaster-read-more tourmaster-type-text" href="single-room.html">
                                                                                Book Now<i class="icon-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="tourmaster-room-grid3 tourmaster-grid-frame">
                                                                    <div
                                                                        class="tourmaster-room-grid-inner"
                                                                        style="
                                                                            box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                            -moz-box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                            -webkit-box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                        "
                                                                    >
                                                                        <div class="tourmaster-room-thumbnail tourmaster-media-image gdlr-core-outer-frame-element">
                                                                            <a href="single-room.html">
                                                                                <img
                                                                                    src="upload/collov-home-design-LSpkE5OCD_8-unsplash-780x595.jpg"
                                                                                    alt=""
                                                                                    width="780"
                                                                                    height="595"
                                                                                />
                                                                            </a>
                                                                        </div>
                                                                        <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="room-item-6" style="padding-top: 75px; padding-bottom: 45px;">
                                                                            <div class="tourmaster-price-wrap tourmaster-with-bg"><span class="tourmaster-head">From</span><span class="tourmaster-price">$80</span></div>
                                                                            <h3 class="tourmaster-room-title gdlr-core-skin-title" style="font-size: 26px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                                                <a href="single-room.html">Standard Room</a>
                                                                            </h3>
                                                                            <div class="tourmaster-info-wrap clearfix">
                                                                                <div class="tourmaster-info tourmaster-info-bed-type"><i class="gdlr-icon-double-bed2"></i><span class="tourmaster-tail">1 Double Bed</span></div>
                                                                                <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail">4 Guests</span></div>
                                                                            </div>
                                                                            <a class="tourmaster-read-more tourmaster-type-text" href="single-room.html">
                                                                                Book Now<i class="icon-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="tourmaster-room-grid3 tourmaster-grid-frame">
                                                                    <div
                                                                        class="tourmaster-room-grid-inner"
                                                                        style="
                                                                            box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                            -moz-box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                            -webkit-box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                        "
                                                                    >
                                                                        <div class="tourmaster-room-thumbnail tourmaster-media-image gdlr-core-outer-frame-element">
                                                                            <a href="single-room.html">
                                                                                <img
                                                                                    src="upload/shutterstock_324822821-780x595.jpg"
                                                                                    alt=""
                                                                                    width="780"
                                                                                    height="595"
                                                                                />
                                                                            </a>
                                                                        </div>
                                                                        <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="room-item-6" style="padding-top: 75px; padding-bottom: 45px;">
                                                                            <div class="tourmaster-price-wrap tourmaster-with-bg"><span class="tourmaster-head">From</span><span class="tourmaster-price">$180</span></div>
                                                                            <h3 class="tourmaster-room-title gdlr-core-skin-title" style="font-size: 26px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                                                <a href="single-room.html">Family Special Room</a>
                                                                            </h3>
                                                                            <div class="tourmaster-info-wrap clearfix">
                                                                                <div class="tourmaster-info tourmaster-info-bed-type"><i class="gdlr-icon-double-bed2"></i><span class="tourmaster-tail">2 Double Beds</span></div>
                                                                                <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail">6 Guests</span></div>
                                                                            </div>
                                                                            <a class="tourmaster-read-more tourmaster-type-text" href="single-room.html">
                                                                                Book Now<i class="icon-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="tourmaster-room-grid3 tourmaster-grid-frame">
                                                                    <div
                                                                        class="tourmaster-room-grid-inner"
                                                                        style="
                                                                            box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                            -moz-box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                            -webkit-box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                        "
                                                                    >
                                                                        <div class="tourmaster-room-thumbnail tourmaster-media-image gdlr-core-outer-frame-element">
                                                                            <a href="single-room.html">
                                                                                <img
                                                                                    src="upload/paul-postema-mr0Dp231IEw-unsplash-780x595.jpg"
                                                                                    alt=""
                                                                                    width="780"
                                                                                    height="595"
                                                                                />
                                                                            </a>
                                                                        </div>
                                                                        <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="room-item-6" style="padding-top: 75px; padding-bottom: 45px;">
                                                                            <div class="tourmaster-price-wrap tourmaster-with-bg"><span class="tourmaster-head">From</span><span class="tourmaster-price">$75</span></div>
                                                                            <h3 class="tourmaster-room-title gdlr-core-skin-title" style="font-size: 26px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                                                <a href="single-room.html">Premium Room</a>
                                                                            </h3>
                                                                            <div class="tourmaster-info-wrap clearfix">
                                                                                <div class="tourmaster-info tourmaster-info-bed-type"><i class="gdlr-icon-double-bed2"></i><span class="tourmaster-tail">2 Single Beds</span></div>
                                                                                <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail">4 Guests</span></div>
                                                                            </div>
                                                                            <a class="tourmaster-read-more tourmaster-type-text" href="single-room.html">
                                                                                Book Now<i class="icon-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="tourmaster-room-grid3 tourmaster-grid-frame">
                                                                    <div
                                                                        class="tourmaster-room-grid-inner"
                                                                        style="
                                                                            box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                            -moz-box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                            -webkit-box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                                                                        "
                                                                    >
                                                                        <div class="tourmaster-room-thumbnail tourmaster-media-image gdlr-core-outer-frame-element tourmaster-with-ribbon">
                                                                            <a href="single-room.html">
                                                                                <img
                                                                                    src="upload/andrea-davis-1uNh3B3ppl4-unsplash-780x595.jpg"
                                                                                    alt=""
                                                                                    width="780"
                                                                                    height="595"
                                                                                />
                                                                            </a>
                                                                            <div class="tourmaster-ribbon">30% Off</div>
                                                                        </div>
                                                                        <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="room-item-6" style="padding-top: 75px; padding-bottom: 45px;">
                                                                            <div class="tourmaster-price-wrap tourmaster-with-bg">
                                                                                <span class="tourmaster-head">From</span><span class="tourmaster-price-discount">$150</span><span class="tourmaster-price">$105</span>
                                                                            </div>
                                                                            <h3 class="tourmaster-room-title gdlr-core-skin-title" style="font-size: 26px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                                                <a href="single-room.html">Deluxe Suite Room</a>
                                                                            </h3>
                                                                            <div class="tourmaster-info-wrap clearfix">
                                                                                <div class="tourmaster-info tourmaster-info-bed-type"><i class="gdlr-icon-double-bed2"></i><span class="tourmaster-tail">1 King Bed</span></div>
                                                                                <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail">4 Guests</span></div>
                                                                            </div>
                                                                            <a class="tourmaster-read-more tourmaster-type-text" href="single-room.html">
                                                                                Book Now<i class="icon-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>-->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                    <a
                                                        class="gdlr-core-button gdlr-core-button-transparent gdlr-core-center-align gdlr-core-button-with-border"
                                                        href="room-search.html"
                                                        style="
                                                            font-size: 13px;
                                                            font-style: normal;
                                                            font-weight: 500;
                                                            letter-spacing: 3px;
                                                            padding: 0px 0px 9px 0px;
                                                            text-transform: uppercase;
                                                            border-radius: 0px;
                                                            -moz-border-radius: 0px;
                                                            -webkit-border-radius: 0px;
                                                            border-width: 0px 0px 1px 0px;
                                                            border-color: #dadada;
                                                        "
                                                    >
                                                        <span class="gdlr-core-content">View All Rooms<i class="gdlr-core-pos-right icon-arrow-right" style="font-size: 16px;"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 100px 0px 70px 0px;" id="gdlr-core-wrapper-2">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" id="gdlr-core-column-4">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 15px 0px 15px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-item-pdlr">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-rectangle" style="border-width: 0px; max-width: 88px;">
                                                        <img src="upload/hotel-icon-1.png" alt="" width="176" height="160" title="hotel-icon-1" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 25px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                            Fine Restaurant<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" style="padding-bottom: 22px;">
                                                    <div class="gdlr-core-text-box-item-content" style="text-transform: none; color: #94959b;">
                                                        <p>Full-service restaurants with specific dedicated meal courses. Décor of such restaurants features great materials.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                    <a class="gdlr-core-button gdlr-core-button-transparent gdlr-core-center-align gdlr-core-button-with-border" href="#" id="gdlr-core-button-id-1">
                                                        <span class="gdlr-core-content">Read More</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20" id="gdlr-core-column-5">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 15px 0px 15px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-item-pdlr" style="padding-bottom: 39px;">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-rectangle" style="border-width: 0px; max-width: 99px;">
                                                        <img src="upload/hotel-icon-2.png" alt="" width="198" height="136" title="hotel-icon-2" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 25px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                            The Relax Spa<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" style="padding-bottom: 22px;">
                                                    <div class="gdlr-core-text-box-item-content" style="text-transform: none; color: #94959b;">
                                                        <p>Luxury spa services including massage, beauty and nails one or all come to you. Book your appointment now.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                    <a class="gdlr-core-button gdlr-core-button-transparent gdlr-core-center-align gdlr-core-button-with-border" href="#" id="gdlr-core-button-id-2">
                                                        <span class="gdlr-core-content">Read More</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20" id="gdlr-core-column-6">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 15px 0px 15px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-item-pdlr" style="padding-bottom: 39px;">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-rectangle" style="border-width: 0px; max-width: 99px; margin: 15px 0px 0px 0px;">
                                                        <img src="upload/hotel-icon-3.png" alt="" width="199" height="110" title="hotel-icon-3" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 25px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                            5 Stars Service<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" style="padding-bottom: 50px;">
                                                    <div class="gdlr-core-text-box-item-content" style="text-transform: none; color: #94959b;">
                                                        <p>A five-star property provides flawless guest services in a state-of-the-art facility.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                    <a class="gdlr-core-button gdlr-core-button-transparent gdlr-core-center-align gdlr-core-button-with-border" href="#" id="gdlr-core-button-id-3">
                                                        <span class="gdlr-core-content">Read More</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 115px 0px 75px 0px;" id="gdlr-core-wrapper-3">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #f6f6f6;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/hotel-about-bg.png); background-repeat: no-repeat; background-position: top center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id="gdlr-core-column-7">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin: 0px 0px 0px 0px; padding: 40px 90px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInLeft" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 37px; font-weight: 400; letter-spacing: 0px; text-transform: none;">
                                                            Offering a series of comfortable and lavish hotels residences<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align">
                                                    <div class="gdlr-core-divider-container" style="max-width: 54px;">
                                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #193573; border-width: 5px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 22px;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 20px; text-transform: none; color: #94959b;">
                                                        <p>All our hotels are fabulous, they are destinations unto themselves. We have crossed the globe to bring you only the best.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <a
                                                        class="gdlr-core-button gdlr-core-button-solid gdlr-core-left-align gdlr-core-button-no-border"
                                                        href="https://max-themes.net/hotale/hotel1/room-search/?room_amount=1&amp;room-search="
                                                        id="gdlr-core-button-id-4"
                                                    >
                                                        <span class="gdlr-core-content">Book Now</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-30">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-item-pdlr">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-rectangle" style="border-width: 0px;">
                                                        <img src="upload/hotel-about-right-img-1.jpg" alt="" width="570" height="450" title="hotel-about-right-img" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 90px 0px 90px 0px;" id="gdlr-core-wrapper-4">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id="gdlr-core-column-8">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 30px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <div class="gdlr-core-text-box-item-content" style="text-transform: none; color: #0a0a0a;">
                                                        <p>
                                                            <span style="font-size: 55px; font-weight: 500; margin-right: 12px; letter-spacing: 4px;">5</span>
                                                            <span class="mmr30" style="font-size: 22px; font-weight: 400; margin-right: 80px; letter-spacing: 7px;">stars</span>
                                                            <span style="font-size: 55px; font-weight: 500; margin-right: 12px; letter-spacing: 4px;">25</span>
                                                            <span style="font-size: 22px; font-weight: 400; margin-right: 12px; letter-spacing: 7px;">rooms</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-9">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 30px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInRight" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 34px; line-height: 1.4; font-weight: 400; letter-spacing: 5px; text-transform: none; color: #0a0a0a;">
                                                        <p>Our hotel is located in the heart of the New Forrest. A five stars lifestyle surrounded by the forest.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <a
                                                        class="gdlr-core-button gdlr-core-button-transparent gdlr-core-left-align gdlr-core-button-with-border"
                                                        href="https://max-themes.net/hotale/hotel1/about-us/"
                                                        style="
                                                            font-size: 13px;
                                                            font-style: normal;
                                                            font-weight: 600;
                                                            letter-spacing: 4px;
                                                            color: #000000;
                                                            padding: 15px 0px 10px 0px;
                                                            text-transform: uppercase;
                                                            border-radius: 0px;
                                                            -moz-border-radius: 0px;
                                                            -webkit-border-radius: 0px;
                                                            border-width: 0px 0px 1px 0px;
                                                            border-color: #dadada;
                                                        "
                                                    >
                                                        <span class="gdlr-core-content">More About US<i class="gdlr-core-pos-right icon-arrow-right" style="font-size: 16px; color: #000000;"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 120px 0px 120px 0px;" id="gdlr-core-wrapper-5">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #f6f6f6;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-10">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" style="max-width: 1170px;">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix gdlr-core-gallery-item-style-grid-no-space gdlr-core-item-pdlr" style="padding-bottom: 0px;" id="gdlr-core-gallery-1">
                                                    <div class="gdlr-core-gallery-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                                        <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-10 gdlr-core-column-first">
                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                <img src="upload/logo1.png" alt="" width="390" height="100" title="logo1" />
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-10">
                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                <img src="upload/logo2.png" alt="" width="390" height="100" title="logo2" />
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-10">
                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                <img src="upload/logo3.png" alt="" width="390" height="100" title="logo3" />
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-10">
                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                <img src="upload/logo4.png" alt="" width="390" height="100" title="logo4" />
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-10">
                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                <img src="upload/logo5.png" alt="" width="390" height="100" title="logo5" />
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-10">
                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                <img src="upload/logo6.png" alt="" width="390" height="100" title="logo6" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 100px 0px 110px 0px;">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-background-wrap" style="top: 350px;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/hotel-testimonial-bg.png); background-repeat: no-repeat; background-position: top center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-11">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" style="max-width: 660px;">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 50px; font-weight: 400; letter-spacing: 0px; text-transform: none;">
                                                            Testimonial<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                    <span
                                                        class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption"
                                                        style="font-size: 20px; font-style: normal; letter-spacing: 0px; color: #94959b; margin-top: 20px;"
                                                    >
                                                        All our hotels are fabulous, they are destinations unto themselves. We have crossed the globe to bring you only the best.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                                                    <div class="gdlr-core-divider-container" style="max-width: 43px;">
                                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #193573; border-width: 2px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-12">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 100px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeIn" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-testimonial-item gdlr-core-item-pdb clearfix gdlr-core-testimonial-style-left-2 gdlr-core-item-pdlr">
                                                    <div
                                                        class="gdlr-core-flexslider flexslider gdlr-core-js-2 gdlr-core-bullet-style-round gdlr-core-color-bullet"
                                                        data-type="carousel"
                                                        data-column="2"
                                                        data-move="1"
                                                        data-nav="bullet"
                                                        data-controls-top-margin="70px"
                                                    >
                                                        <ul class="slides">
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="gdlr-core-testimonial clearfix gdlr-core-with-frame">
                                                                    <div
                                                                        class="gdlr-core-testimonial-frame clearfix gdlr-core-skin-e-background gdlr-core-outer-frame-element"
                                                                        style="
                                                                            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -moz-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            border-radius: 0px 0px 0px 0px;
                                                                            -moz-border-radius: 0px 0px 0px 0px;
                                                                            -webkit-border-radius: 0px 0px 0px 0px;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="gdlr-core-testimonial-frame-border"
                                                                            style="border-radius: 0px 0px 0px 0px; -moz-border-radius: 0px 0px 0px 0px; -webkit-border-radius: 0px 0px 0px 0px;"
                                                                        ></div>
                                                                        <div class="gdlr-core-testimonial-author-image gdlr-core-media-image">
                                                                            <img
                                                                                src="upload/customer1-150x150.jpg"
                                                                                alt=""
                                                                                width="150"
                                                                                height="150"
                                                                                title="customer1"
                                                                            />
                                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon">&#8220;</div>
                                                                        </div>
                                                                        <div class="gdlr-core-testimonial-content-wrap">
                                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 18px; color: #656565; padding-bottom: 25px;">
                                                                                <p>
                                                                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel
                                                                                    the charm of existence.
                                                                                </p>
                                                                            </div>
                                                                            <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                                <div class="gdlr-core-testimonial-author-content">
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"
                                                                                        style="color: #313131; font-size: 19px; font-weight: 600; font-style: normal; letter-spacing: 0px; text-transform: none;"
                                                                                    >
                                                                                        Joan Smith
                                                                                    </div>
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption"
                                                                                        style="color: #313131; font-size: 14px; font-style: normal; font-weight: 500;"
                                                                                    >
                                                                                        Solo Traveler
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="gdlr-core-testimonial clearfix gdlr-core-with-frame">
                                                                    <div
                                                                        class="gdlr-core-testimonial-frame clearfix gdlr-core-skin-e-background gdlr-core-outer-frame-element"
                                                                        style="
                                                                            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -moz-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            border-radius: 0px 0px 0px 0px;
                                                                            -moz-border-radius: 0px 0px 0px 0px;
                                                                            -webkit-border-radius: 0px 0px 0px 0px;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="gdlr-core-testimonial-frame-border"
                                                                            style="border-radius: 0px 0px 0px 0px; -moz-border-radius: 0px 0px 0px 0px; -webkit-border-radius: 0px 0px 0px 0px;"
                                                                        ></div>
                                                                        <div class="gdlr-core-testimonial-author-image gdlr-core-media-image">
                                                                            <img
                                                                                src="upload/customer03-150x150.jpg"
                                                                                alt=""
                                                                                width="150"
                                                                                height="150"
                                                                                title="customer03"
                                                                            />
                                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon">&#8220;</div>
                                                                        </div>
                                                                        <div class="gdlr-core-testimonial-content-wrap">
                                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 18px; color: #656565; padding-bottom: 25px;">
                                                                                <p>
                                                                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel
                                                                                    the charm of existence.
                                                                                </p>
                                                                            </div>
                                                                            <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                                <div class="gdlr-core-testimonial-author-content">
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"
                                                                                        style="color: #313131; font-size: 19px; font-weight: 600; font-style: normal; letter-spacing: 0px; text-transform: none;"
                                                                                    >
                                                                                        William Jones
                                                                                    </div>
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption"
                                                                                        style="color: #313131; font-size: 14px; font-style: normal; font-weight: 500;"
                                                                                    >
                                                                                        Solo Traveler
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="gdlr-core-testimonial clearfix gdlr-core-with-frame">
                                                                    <div
                                                                        class="gdlr-core-testimonial-frame clearfix gdlr-core-skin-e-background gdlr-core-outer-frame-element"
                                                                        style="
                                                                            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -moz-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            border-radius: 0px 0px 0px 0px;
                                                                            -moz-border-radius: 0px 0px 0px 0px;
                                                                            -webkit-border-radius: 0px 0px 0px 0px;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="gdlr-core-testimonial-frame-border"
                                                                            style="border-radius: 0px 0px 0px 0px; -moz-border-radius: 0px 0px 0px 0px; -webkit-border-radius: 0px 0px 0px 0px;"
                                                                        ></div>
                                                                        <div class="gdlr-core-testimonial-author-image gdlr-core-media-image">
                                                                            <img
                                                                                src="upload/customer02-150x150.jpg"
                                                                                alt=""
                                                                                width="150"
                                                                                height="150"
                                                                                title="customer02"
                                                                            />
                                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon">&#8220;</div>
                                                                        </div>
                                                                        <div class="gdlr-core-testimonial-content-wrap">
                                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 18px; color: #656565; padding-bottom: 25px;">
                                                                                <p>
                                                                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel
                                                                                    the charm of existence.
                                                                                </p>
                                                                            </div>
                                                                            <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                                <div class="gdlr-core-testimonial-author-content">
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"
                                                                                        style="color: #313131; font-size: 19px; font-weight: 600; font-style: normal; letter-spacing: 0px; text-transform: none;"
                                                                                    >
                                                                                        Ralph Clark
                                                                                    </div>
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption"
                                                                                        style="color: #313131; font-size: 14px; font-style: normal; font-weight: 500;"
                                                                                    >
                                                                                        Solo Traveler
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="gdlr-core-testimonial clearfix gdlr-core-with-frame">
                                                                    <div
                                                                        class="gdlr-core-testimonial-frame clearfix gdlr-core-skin-e-background gdlr-core-outer-frame-element"
                                                                        style="
                                                                            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -moz-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            border-radius: 0px 0px 0px 0px;
                                                                            -moz-border-radius: 0px 0px 0px 0px;
                                                                            -webkit-border-radius: 0px 0px 0px 0px;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="gdlr-core-testimonial-frame-border"
                                                                            style="border-radius: 0px 0px 0px 0px; -moz-border-radius: 0px 0px 0px 0px; -webkit-border-radius: 0px 0px 0px 0px;"
                                                                        ></div>
                                                                        <div class="gdlr-core-testimonial-author-image gdlr-core-media-image">
                                                                            <img
                                                                                src="upload/customer1-150x150.jpg"
                                                                                alt=""
                                                                                width="150"
                                                                                height="150"
                                                                                title="customer1"
                                                                            />
                                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon">&#8220;</div>
                                                                        </div>
                                                                        <div class="gdlr-core-testimonial-content-wrap">
                                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 18px; color: #656565; padding-bottom: 25px;">
                                                                                <p>
                                                                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel
                                                                                    the charm of existence.
                                                                                </p>
                                                                            </div>
                                                                            <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                                <div class="gdlr-core-testimonial-author-content">
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"
                                                                                        style="color: #313131; font-size: 19px; font-weight: 600; font-style: normal; letter-spacing: 0px; text-transform: none;"
                                                                                    >
                                                                                        Christopher Lopez
                                                                                    </div>
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption"
                                                                                        style="color: #313131; font-size: 14px; font-style: normal; font-weight: 500;"
                                                                                    >
                                                                                        Solo Traveler
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="gdlr-core-testimonial clearfix gdlr-core-with-frame">
                                                                    <div
                                                                        class="gdlr-core-testimonial-frame clearfix gdlr-core-skin-e-background gdlr-core-outer-frame-element"
                                                                        style="
                                                                            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -moz-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            border-radius: 0px 0px 0px 0px;
                                                                            -moz-border-radius: 0px 0px 0px 0px;
                                                                            -webkit-border-radius: 0px 0px 0px 0px;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="gdlr-core-testimonial-frame-border"
                                                                            style="border-radius: 0px 0px 0px 0px; -moz-border-radius: 0px 0px 0px 0px; -webkit-border-radius: 0px 0px 0px 0px;"
                                                                        ></div>
                                                                        <div class="gdlr-core-testimonial-author-image gdlr-core-media-image">
                                                                            <img
                                                                                src="upload/customer03-150x150.jpg"
                                                                                alt=""
                                                                                width="150"
                                                                                height="150"
                                                                                title="customer03"
                                                                            />
                                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon">&#8220;</div>
                                                                        </div>
                                                                        <div class="gdlr-core-testimonial-content-wrap">
                                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 18px; color: #656565; padding-bottom: 25px;">
                                                                                <p>
                                                                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel
                                                                                    the charm of existence.
                                                                                </p>
                                                                            </div>
                                                                            <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                                <div class="gdlr-core-testimonial-author-content">
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"
                                                                                        style="color: #313131; font-size: 19px; font-weight: 600; font-style: normal; letter-spacing: 0px; text-transform: none;"
                                                                                    >
                                                                                        Louis Lewis
                                                                                    </div>
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption"
                                                                                        style="color: #313131; font-size: 14px; font-style: normal; font-weight: 500;"
                                                                                    >
                                                                                        Solo Traveler
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="margin: 0px 0px 0px 0px; padding: 130px 0px 90px 0px;">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #0a0a0a;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="opacity: 0.6; background-image: url(upload/shutterstock_783346942.jpg); background-size: cover; background-position: center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" style="max-width: 740px;">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 50px;">
                                        <div class="gdlr-core-title-item-title-wrap">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 60px; font-weight: 400; letter-spacing: 0px; text-transform: none; color: #ffffff;">
                                                Choose from a wide range of <span style="font-weight: 700;">luxury rooms</span><span style="font-size: 63px; font-weight: 600; color: #193573;">.</span>
                                                <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                        <a class="gdlr-core-button gdlr-core-button-solid gdlr-core-center-align gdlr-core-button-no-border" href="https://max-themes.net/hotale/hotel1/room-search/?room_amount=1&amp;room-search=" id="gdlr-core-button-id-5">
                                            <span class="gdlr-core-content">Book Now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 110px 0px 30px 0px;">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-background-wrap" style="top: 10px;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/hotel-blog-bg.png); background-repeat: no-repeat; background-position: top center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-13">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 30px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" style="max-width: 660px;">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 50px; font-weight: 400; letter-spacing: 0px; text-transform: none; color: #1a1b22;">
                                                            Our Blog<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" style="padding-bottom: 17px;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 20px; text-transform: none; color: #94959b;">
                                                        <p>All our hotels are fabulous, they are destinations unto themselves. We have crossed the globe to bring you only the best.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                                                    <div class="gdlr-core-divider-container" style="max-width: 43px;">
                                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #193573; border-width: 2px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-14">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 35px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div
                                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                                style="
                                                    background-image: url(upload/hotel-blog-bg-2-1.png);
                                                    background-repeat: no-repeat;
                                                    background-position: top center;
                                                "
                                                data-parallax-speed="0"
                                            ></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeIn" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div
                                                    class="gdlr-core-blog-item gdlr-core-item-pdb clearfix gdlr-core-style-blog-column-with-frame gdlr-core-center-align gdlr-core-item-pdlr"
                                                    style="padding-bottom: 55px;"
                                                    id="gdlr-core-blog-1"
                                                >
                                                    <div class="gdlr-core-flexslider flexslider gdlr-core-js-2" data-type="carousel" data-column="3" data-move="1" data-nav="navigation-outer" data-nav-parent="self" data-vcenter-nav="1">
                                                        <div class="gdlr-core-flexslider-custom-nav gdlr-core-style-navigation-outer gdlr-core-center-align" style="margin-top: 0px;">
                                                            <i class="icon-arrow-left flex-prev" style="color: #a3a3a3; padding: 0px 0px 0px 0px; font-size: 34px; left: -60px;"></i>
                                                            <i class="icon-arrow-right flex-next" style="color: #a3a3a3; padding: 0px 0px 0px 0px; font-size: 34px; right: -60px;"></i>
                                                        </div>
                                                        <ul class="slides">
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-js gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-move-up-with-shadow gdlr-core-outer-frame-element"
                                                                    style="
                                                                        box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -moz-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -webkit-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        border-width: 0px;
                                                                        border-radius: 0px;
                                                                        -moz-border-radius: 0px;
                                                                        -webkit-border-radius: 0px;
                                                                    "
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="single-blog.html">
                                                                            <img
                                                                                src="upload/kelsey-roenau-608583-unsplash-700x450.jpg"
                                                                                alt=""
                                                                                width="700"
                                                                                height="450"
                                                                                title="kelsey-roenau-608583-unsplash"
                                                                            />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame" style="padding-bottom: 30px;">
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px; font-style: normal; font-weight: 500;">
                                                                            <a href="single-blog.html">Cities To Visit For Your First Time In Europe</a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            Far far away, behind the word mountains, far from the countries Vokalia...
                                                                            <div class="clear"></div>
                                                                            <a
                                                                                class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle"
                                                                                href="single-blog.html"
                                                                            >
                                                                                Read More
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-js gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-move-up-with-shadow gdlr-core-outer-frame-element"
                                                                    style="
                                                                        box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -moz-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -webkit-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        border-width: 0px;
                                                                        border-radius: 0px;
                                                                        -moz-border-radius: 0px;
                                                                        -webkit-border-radius: 0px;
                                                                    "
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="single-blog.html">
                                                                            <img
                                                                                src="upload/aaron-huber-401200-unsplash-700x450.jpg"
                                                                                alt=""
                                                                                width="700"
                                                                                height="450"
                                                                                title="aaron-huber-401200-unsplash"
                                                                            />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame" style="padding-bottom: 30px;">
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px; font-style: normal; font-weight: 500;">
                                                                            <a href="single-blog.html">
                                                                                Where to travel in 2022: 10 places you need to go in 2022!
                                                                            </a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            Far far away, behind the word mountains, far from the countries Vokalia...
                                                                            <div class="clear"></div>
                                                                            <a
                                                                                class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle"
                                                                                href="single-blog.html"
                                                                            >
                                                                                Read More
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-js gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-move-up-with-shadow gdlr-core-outer-frame-element"
                                                                    style="
                                                                        box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -moz-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -webkit-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        border-width: 0px;
                                                                        border-radius: 0px;
                                                                        -moz-border-radius: 0px;
                                                                        -webkit-border-radius: 0px;
                                                                    "
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="single-blog.html">
                                                                            <img
                                                                                src="upload/roan-lavery-sEcYfPfKOhw-unsplash-700x450.jpg"
                                                                                alt=""
                                                                                width="700"
                                                                                height="450"
                                                                                title="roan-lavery-sEcYfPfKOhw-unsplash"
                                                                            />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame" style="padding-bottom: 30px;">
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px; font-style: normal; font-weight: 500;">
                                                                            <a href="single-blog.html">Tips For Picking Vacation Accommodation</a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            Far far away, behind the word mountains, far from the countries Vokalia...
                                                                            <div class="clear"></div>
                                                                            <a
                                                                                class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle"
                                                                                href="single-blog.html"
                                                                            >
                                                                                Read More
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-js gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-move-up-with-shadow gdlr-core-outer-frame-element"
                                                                    style="
                                                                        box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -moz-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -webkit-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        border-width: 0px;
                                                                        border-radius: 0px;
                                                                        -moz-border-radius: 0px;
                                                                        -webkit-border-radius: 0px;
                                                                    "
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="single-blog.html">
                                                                            <img
                                                                                src="upload/pexels-photo-25284-700x450.jpg"
                                                                                alt=""
                                                                                width="700"
                                                                                height="450"
                                                                                title="pexels-photo-25284"
                                                                            />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame" style="padding-bottom: 30px;">
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px; font-style: normal; font-weight: 500;">
                                                                            <a href="single-blog.html">What to expect on an African Safari?</a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            Far far away, behind the word mountains, far from the countries Vokalia...
                                                                            <div class="clear"></div>
                                                                            <a
                                                                                class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle"
                                                                                href="single-blog.html"
                                                                            >
                                                                                Read More
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-js gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-move-up-with-shadow gdlr-core-outer-frame-element"
                                                                    style="
                                                                        box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -moz-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -webkit-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        border-width: 0px;
                                                                        border-radius: 0px;
                                                                        -moz-border-radius: 0px;
                                                                        -webkit-border-radius: 0px;
                                                                    "
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="single-blog.html">
                                                                            <img
                                                                                src="upload/shutterstock_560973166-700x450.jpg"
                                                                                alt=""
                                                                                width="700"
                                                                                height="450"
                                                                                title="Hotel Room"
                                                                            />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame" style="padding-bottom: 30px;">
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px; font-style: normal; font-weight: 500;">
                                                                            <a href="single-blog.html">My 6 Biggest Travel Surprises</a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            Far far away, behind the word mountains, far from the countries Vokalia...
                                                                            <div class="clear"></div>
                                                                            <a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="single-blog.html">
                                                                                Read More
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-js gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-move-up-with-shadow gdlr-core-outer-frame-element"
                                                                    style="
                                                                        box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -moz-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -webkit-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        border-width: 0px;
                                                                        border-radius: 0px;
                                                                        -moz-border-radius: 0px;
                                                                        -webkit-border-radius: 0px;
                                                                    "
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="single-blog.html">
                                                                            <img
                                                                                src="upload/pascal-diekmann-707233-unsplash-700x450.jpg"
                                                                                alt=""
                                                                                width="700"
                                                                                height="450"
                                                                                title="pascal-diekmann-707233-unsplash"
                                                                            />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame" style="padding-bottom: 30px;">
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px; font-style: normal; font-weight: 500;">
                                                                            <a href="single-blog.html">10 Tips for Taking Your First Solo Trip</a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            Far far away, behind the word mountains, far from the countries Vokalia...
                                                                            <div class="clear"></div>
                                                                            <a
                                                                                class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle"
                                                                                href="single-blog.html"
                                                                            >
                                                                                Read More
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-js gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-move-up-with-shadow gdlr-core-outer-frame-element"
                                                                    style="
                                                                        box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -moz-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -webkit-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        border-width: 0px;
                                                                        border-radius: 0px;
                                                                        -moz-border-radius: 0px;
                                                                        -webkit-border-radius: 0px;
                                                                    "
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="single-blog.html">
                                                                            <img
                                                                                src="upload/pexels-photo-871053-700x450.jpg"
                                                                                alt=""
                                                                                width="700"
                                                                                height="450"
                                                                                title="pexels-photo-871053"
                                                                            />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame" style="padding-bottom: 30px;">
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px; font-style: normal; font-weight: 500;">
                                                                            <a href="single-blog.html">
                                                                                Why I Quit My Job To Be A Less Occasional Traveller In 2019
                                                                            </a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            Far far away, behind the word mountains, far from the countries Vokalia...
                                                                            <div class="clear"></div>
                                                                            <a
                                                                                class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle"
                                                                                href="single-blog.html"
                                                                            >
                                                                                Read More
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-js gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-move-up-with-shadow gdlr-core-outer-frame-element"
                                                                    style="
                                                                        box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -moz-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -webkit-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        border-width: 0px;
                                                                        border-radius: 0px;
                                                                        -moz-border-radius: 0px;
                                                                        -webkit-border-radius: 0px;
                                                                    "
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="single-blog.html">
                                                                            <img
                                                                                src="upload/shutterstock_307470824-700x450.jpg"
                                                                                alt=""
                                                                                width="700"
                                                                                height="450"
                                                                                title="The breakfast"
                                                                            />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame" style="padding-bottom: 30px;">
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px; font-style: normal; font-weight: 500;">
                                                                            <a href="single-blog.html">Where To Travel In Asia From January To June</a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            Far far away, behind the word mountains, far from the countries Vokalia...
                                                                            <div class="clear"></div>
                                                                            <a
                                                                                class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle"
                                                                                href="single-blog.html"
                                                                            >
                                                                                Read More
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-js gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-move-up-with-shadow gdlr-core-outer-frame-element"
                                                                    style="
                                                                        box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -moz-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -webkit-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        border-width: 0px;
                                                                        border-radius: 0px;
                                                                        -moz-border-radius: 0px;
                                                                        -webkit-border-radius: 0px;
                                                                    "
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="single-blog.html">
                                                                            <img
                                                                                src="upload/shop-slo-vhztm9QC0L0-unsplash-700x450.jpg"
                                                                                alt=""
                                                                                width="700"
                                                                                height="450"
                                                                                title="shop-slo-vhztm9QC0L0-unsplash"
                                                                            />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame" style="padding-bottom: 30px;">
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px; font-style: normal; font-weight: 500;">
                                                                            <a href="single-blog.html">3 steps to discovering your life’s purpose</a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            Far far away, behind the word mountains, far from the countries Vokalia...
                                                                            <div class="clear"></div>
                                                                            <a
                                                                                class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle"
                                                                                href="single-blog.html"
                                                                            >
                                                                                Read More
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                    <a
                                                        class="gdlr-core-button gdlr-core-button-transparent gdlr-core-center-align gdlr-core-button-with-border"
                                                        href="#"
                                                        style="
                                                            font-size: 13px;
                                                            font-style: normal;
                                                            font-weight: 600;
                                                            letter-spacing: 4px;
                                                            color: #000000;
                                                            padding: 15px 0px 10px 0px;
                                                            text-transform: uppercase;
                                                            border-radius: 0px;
                                                            -moz-border-radius: 0px;
                                                            -webkit-border-radius: 0px;
                                                            border-width: 0px 0px 1px 0px;
                                                            border-color: #dadada;
                                                        "
                                                    >
                                                        <span class="gdlr-core-content">Read The Blog<i class="gdlr-core-pos-right icon-arrow-right" style="font-size: 16px; color: #000000;"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 60px 0px 10px 0px;">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-15">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 10px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 40px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 50px; font-weight: 400; text-transform: none; color: #000000;">
                                                            Newsletter<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                    <span
                                                        class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption"
                                                        style="font-size: 18px; font-style: normal; letter-spacing: 0px; color: #898989; margin-top: 20px;"
                                                    >
                                                        Subscribe the newsletter to get updated to news and promotions
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-newsletter-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-style-curve3">
                                                    <div class="newsletter newsletter-subscription">
                                                        <form class="gdlr-core-newsletter-form clearfix" method="post" action="#" onsubmit="return newsletter_check(this)">
                                                            <div class="gdlr-core-newsletter-email">
                                                                <input class="newsletter-email gdlr-core-skin-e-background gdlr-core-skin-e-content" placeholder="Your Email Address" type="email" name="ne" size="30" required />
                                                            </div>
                                                            <div class="gdlr-core-newsletter-submit"><input class="newsletter-submit" type="submit" value="Subscribe" /></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="margin: 0px -10px 0px -10px; padding: 60px 0px 0px 0px;">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix gdlr-core-gallery-item-style-grid" style="padding-bottom: 0px;">
                                        <div class="gdlr-core-gallery-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                            <div
                                                class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-15 gdlr-core-column-first gdlr-core-item-pdlr gdlr-core-item-mgb"
                                                style="margin-bottom: 30px; padding-left: 15px; padding-right: 15px;"
                                            >
                                                <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                    <a
                                                        class="gdlr-core-lightgallery gdlr-core-js"
                                                        href="upload/shutterstock_139392596.jpg"
                                                        data-lightbox-group="gdlr-core-img-group-2"
                                                    >
                                                        <img src="upload/shutterstock_139392596-600x600.jpg" alt="" width="600" height="600" title="Room Service" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-15 gdlr-core-item-pdlr gdlr-core-item-mgb" style="margin-bottom: 30px; padding-left: 15px; padding-right: 15px;">
                                                <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                    <a
                                                        class="gdlr-core-lightgallery gdlr-core-js"
                                                        href="upload/andrii-podilnyk-766487-unsplash-scaled.jpg"
                                                        data-lightbox-group="gdlr-core-img-group-2"
                                                    >
                                                        <img
                                                            src="upload/andrii-podilnyk-766487-unsplash-600x600.jpg"
                                                            alt=""
                                                            width="600"
                                                            height="600"
                                                            title="andrii-podilnyk-766487-unsplash"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-15 gdlr-core-item-pdlr gdlr-core-item-mgb" style="margin-bottom: 30px; padding-left: 15px; padding-right: 15px;">
                                                <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                    <a
                                                        class="gdlr-core-lightgallery gdlr-core-js"
                                                        href="upload/alexandre-chambon-115386-unsplash.jpg"
                                                        data-lightbox-group="gdlr-core-img-group-2"
                                                    >
                                                        <img
                                                            src="upload/alexandre-chambon-115386-unsplash-600x600.jpg"
                                                            alt=""
                                                            width="600"
                                                            height="600"
                                                            title="The Ocean"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-15 gdlr-core-item-pdlr gdlr-core-item-mgb" style="margin-bottom: 30px; padding-left: 15px; padding-right: 15px;">
                                                <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                    <a
                                                        class="gdlr-core-lightgallery gdlr-core-js"
                                                        href="upload/shutterstock_513839743.jpg"
                                                        data-lightbox-group="gdlr-core-img-group-2"
                                                    >
                                                        <img
                                                            src="upload/shutterstock_513839743-600x600.jpg"
                                                            alt=""
                                                            width="600"
                                                            height="600"
                                                            title="shutterstock_513839743"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php include "footer.php"; ?>