@extends('layout')
@section('content')
<div id="page_caption" class="hasbg parallax  withtopbar  " style="background-image:url(images/audi.jpg);">

    <div class="page_title_wrapper">
        <div class="page_title_inner">
            <div class="page_title_content">
                <h1 class="withtopbar">AUDI</h1>
                <div class="page_tagline">
                    This is sample of page tagline and you can set it up using page option </div>
            </div>
        </div>
    </div>

</div>

<!-- Begin content -->
<div id="page_content_wrapper" class="hasbg withtopbar ">
    <form id="car_search_form" name="car_search_form" method="get" action="#">
        <div class="car_search_wrapper">
            <div class="one_fourth themeborder">
                <select id="brand" name="brand">
                    <option value="">Any Brand</option>
                    <option value="Audi">Audi</option>
                    <option value="BMW">BMW</option>
                    <option value="Lexus">Lexus</option>
                    <option value="Mercedes Benz">Mercedes Benz</option>
                    <option value="MINI">MINI</option>
                    <option value="Porsche">Porsche</option>
                </select>
                <span class="ti-angle-down"></span>
            </div>
            <div class="one_fourth themeborder">
                <select id="type" name="type">
                    <option value="">Any Type</option>
                    <option value="Coupe">Coupe</option>
                    <option value="Sedan">Sedan</option>
                    <option value="SUV">SUV</option>
                </select>
                <span class="ti-angle-down"></span>
            </div>
            <div class="one_fourth themeborder">
                <select id="sort_by" name="sort_by">
                    <option value="price_low">Price Low to High</option>
                    <option value="price_high">Price High to Low</option>
                    <option value="model">Sort By Model</option>
                    <option value="popular">Sort By Popularity</option>
                    <option value="review">Sort By Review Score</option>
                </select>
                <span class="ti-exchange-vertical"></span>
            </div>
            <div class="one_fourth last themeborder">
                <input id="car_search_btn" type="submit" class="button" value="Search" />
            </div>
        </div>
    </form>

    <!-- Begin content -->

    <div class="inner">

        <div class="inner_wrapper nopadding">

            <div id="page_main_content" class="sidebar_content fixed_column">

                <div class="standard_wrapper">

                    <div id="portfolio_filter_wrapper"
                        class="gallery classic two_cols portfolio-content section content clearfix" data-columns="3">

                        @foreach($listCar as $car)
                        <div class="car_list_wrapper floatleft noborder">
                            <div class="one">
                                <a class="car_image" href="car-detail/{{$car->VIN}}">
                                    <img src="images/{{$car->img}}" alt="BMW 3 Series" />
                                </a>
                            </div>

                            <div class="one">
                                <div class="car_attribute_wrapper car_list" style="width: 50%;">
                                    <a class="car_link" href="#">
                                        <h3>{{$car->Model}}</h3>
                                    </a>
                                    <div class="car_attribute_rating">
                                        <div class="br-theme-fontawesome-stars-o">
                                            <div class="br-widget">
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;"></a>
                                            </div>
                                        </div>
                                        <div class="car_attribute_rating_count">
                                            4&nbsp; reviews </div>
                                    </div>
                                </div>
                                <div class="car_attribute_price car_list" style="width: 50%;">
                                    <div class="car_attribute_price_day two_cols">
                                        <span class="single_car_currency">VND</span><span class="single_car_price">{{
                                            number_format($car->price, 0, ',', '.') }}</span> <span
                                            class="car_unit_day">/
                                            ngày</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <br class="clear" />
                    <div class="pagination"><span class="current">1</span><a href='#' class="inactive">2</a></div>
                    <div class="pagination_detail">
                        Page 1 of 2 </div>

                </div>
            </div>

            <div class="sidebar_wrapper">
                <div class="sidebar">

                    <div class="content">

                        <ul class="sidebar_widget">
                            <li id="text-4" class="widget widget_text">
                                <h2 class="widgettitle">For More Informations</h2>
                                <div class="textwidget"><span class="ti-mobile"
                                        style="margin-right:10px;"></span>1-567-124-44227
                                    <br />
                                    <span class="ti-alarm-clock" style="margin-right:10px;"></span>Mon - Sat 8.00 -
                                    18.00
                                </div>
                            </li>
                            <li id="grandcarrental_cat_posts-2" class="widget grandcarrental_Cat_Posts">
                                <h2 class="widgettitle"><span>Rental Tips</span></h2>
                                <ul class="posts blog withthumb ">
                                    <li>
                                        <div class="post_circle_thumb">
                                            <a href="#"><img class="alignleft frame post_thumb"
                                                    src="upload/traffic-car-vehicle-black-150x150.jpg" alt="" /></a>
                                        </div><a href="#">America Car Rental Offers Lowest Car Rental Rates</a>
                                        <div class="post_attribute">January 5, 2017</div>
                                    </li>
                                    <li>
                                        <div class="post_circle_thumb">
                                            <a href="#"><img class="alignleft frame post_thumb"
                                                    src="upload/pexels-photo-245374-150x150.jpeg" alt="" /></a>
                                        </div><a href="#">How to Enjoy Sightseeing Los Angeles With Car Rentals</a>
                                        <div class="post_attribute">January 4, 2017</div>
                                    </li>
                                    <li>
                                        <div class="post_circle_thumb">
                                            <a href="#"><img class="alignleft frame post_thumb"
                                                    src="upload/road-people-street-smartphone-150x150.jpg" alt="" /></a>
                                        </div><a href="#">Ride Across the Blue Ridge Parkway</a>
                                        <div class="post_attribute">January 3, 2017</div>
                                    </li>
                                </ul>
                            </li>
                            <li id="grandcarrental_social_profiles_posts-3"
                                class="widget grandcarrental_Social_Profiles_Posts">
                                <h2 class="widgettitle">Connect with Us</h2>
                                <div class="social_wrapper shortcode light small">
                                    <ul>
                                        <li class="facebook"><a target="_blank" title="Facebook" href="#"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a target="_blank" title="Twitter"
                                                href="https://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="youtube"><a target="_blank" title="Youtube" href="#"><i
                                                    class="fa fa-youtube"></i></a></li>
                                        <li class="pinterest"><a target="_blank" title="Pinterest"
                                                href="https://pinterest.com/#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="instagram"><a target="_blank" title="Instagram"
                                                href="https://instagram.com/theplanetd"><i
                                                    class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
