@extends('layout')
@section('content')
<div class="ppb_wrapper  ">
    <div class="one withsmallpadding ppb_car_search_background parallax withbg "
        style="padding-top: 150px !important;text-align:center;height:800px;background-image:url(images/banner.jpg);background-position: center center;color:#ffffff;">
        <div class="overlay_background"
            style="background:#000000;background:rgb(0,0,0,0.2);background:rgba(0,0,0,0.2);"></div>
        <div class="center_wrapper">
            <div class="inner_content">
                <div class="standard_wrapper">
                    <h2 class="ppb_title" style="color:#ffffff;">Xe gì cũng có</h2>
                    <div class="page_tagline" style="color:#ffffff;">Giá chỉ từ 300.000đ một ngày</div>
                    <form class="car_search_form" method="get" action="#">
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
                </div>
            </div>
        </div>
    </div>
    <div class="one withsmallpadding ppb_header " style="text-align:center;padding:60px 0 60px 0;">
        <div class="standard_wrapper">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div style="margin:auto;width:100%">
                        <h2 class="ppb_title" style="">Đơn vị hàng đầu về thuê xe du lịch</h2>
                        <div class="page_tagline" style="">Chúng tôi cung cấp dịch vụ cho thuê xe hơi & xe limousine với
                            nhiều loại xe cao cấp, đa dạng</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- var_dump($brand); -->
    <div class="ppb_car_brand_grid one nopadding ">
        <div class="page_content_wrapper page_main_content sidebar_content full_width fixed_column">
            <div class="standard_wrapper">
                <div id="15722572661666401717" class="portfolio_filter_wrapper gallery grid portrait three_cols"
                    data-columns="3">
                    @foreach($brand as $brand)
                    <div class="element grid classic3_cols animated1">
                        <div class="one_third gallery3 grid static filterable portfolio_type themeborder"
                            style="background-image:url(images/{{$brand->img}});">
                            <a class="car_image" href="brand/{{$brand->id}}"></a>
                            <div class="portfolio_info_wrapper">
                                <h3>{{$brand->name}}</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="one withsmallpadding ppb_header "
        style="padding-top: 40px !important;text-align:center;padding:60px 0 60px 0;">
        <div class="standard_wrapper">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div style="margin:auto;width:100%">
                        <h2 class="ppb_title" style="">Tìm xe theo loại</h2>
                        <div class="page_tagline" style="">Chúng tôi cung cấp dịch vụ cho thuê xe hơi & xe limousine với
                            nhiều loại xe cao cấp, đa dạng</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ppb_car_type_grid one nopadding " style="margin-bottom:60px;">
        <div class="page_content_wrapper page_main_content sidebar_content full_width fixed_column">
            <div class="standard_wrapper">
                <div id="1572257266780950625" class="portfolio_filter_wrapper gallery grid portrait three_cols"
                    data-columns="3">
                    @foreach($cate as $cate)
                    <div class="element grid classic3_cols animated1">
                        <div class="one_third gallery3 grid static filterable portfolio_type themeborder"
                            style="background-image:url(images/{{$cate->img}});">
                            <a class="car_image" href="#"></a>
                            <div class="portfolio_info_wrapper">
                                <h3>{{$cate->Label}}</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="one withsmallpadding ppb_header_youtube withbg parallax"
        style="text-align:center;padding:215px 0 215px 0;color:#ffffff; background-image: url(images/banner2.jpg);">
        <div class="overlay_background"
            style="background:#000000;background:rgb(0,0,0,0.5);background:rgba(0,0,0,0.5);"></div>
        <div class="standard_wrapper">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div style="margin:auto;width:100%">
                        <h2 class="ppb_title" style="color:#ffffff;">Lựa chọn hàng đầu dành cho bạn</h2>
                        <div class="page_tagline" style="color:#ffffff;">Chúng tôi ưu tiên sự hài lòng của khách hàng
                            lên hàng đầu
                        </div>
                        <div class="ppb_header_content">
                            <p><span style="font-size: 32px;">Liên hệ: (+84)-879-533-534</span></p>
                            <p><a class="button" href="contact-us.html">Để lại lời nhắn</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="one withsmallpadding ppb_header "
        style="text-align:center;padding:60px 0 60px 0;background-color:#5856d6;color:#ffffff;">
        <div class="standard_wrapper">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div style="margin:auto;width:100%">
                        <h2 class="ppb_title" style="color:#ffffff;">Why Choose Us</h2>
                        <div class="page_tagline" style="color:#ffffff;">Explore our first class limousine &amp;
                            car rental services</div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="one withsmallpadding ppb_text"
        style="padding-top:0 !important;text-align:center;padding:10px 0 10px 0;background-color:#5856d6;color:#ffffff !important;">
        <div class="standard_wrapper">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div style="margin:auto;width:100%">

                        <div class="one_third " style=""><span class="ti-car"
                                style="display: block; font-size: 50px; margin-bottom: 20px;"> </span>
                            <h4 style="color: #fff;">Variety of Car Brands</h4>
                            <p>Lorem ipsum dolor sit amet, consectadipiscing elit. Aenean commodo ligula eget
                                dolor.</p>
                        </div>
                        <div class="one_third " style="">
                            <span class="ti-face-smile"
                                style="display: block; font-size: 50px; margin-bottom: 20px;"> </span>
                            <h4 style="color: #fff;">Best Rate Guarantee</h4>
                            <p>Lorem ipsum dolor sit amet, consectadipiscing elit. Aenean commodo ligula eget
                                dolor.</p>
                        </div>
                        <div class="one_third last " style=""><span class="ti-heart"
                                style="display: block; font-size: 50px; margin-bottom: 20px;"> </span>
                            <h4 style="color: #fff;">Awesome Customer Support</h4>
                            <p>Lorem ipsum dolor sit amet, consectadipiscing elit. Aenean commodo ligula eget
                                dolor.</p>
                        </div>
                        <p>
                            <br class="clear" />
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="one withsmallpadding ppb_header " style="text-align:center;padding:60px 0 60px 0;">
        <div class="standard_wrapper">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div style="margin:auto;width:100%">
                        <h2 class="ppb_title" style="">Articles &amp; Tips</h2>
                        <div class="page_tagline" style="">Explore some of the best tips from around the world
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="standard_wrapper">
        <div class="ppb_blog_grid one nopadding" style="padding:0px 0 0px 0;margin-bottom:40px;">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div class="inner_wrapper">
                        <div class="blog_grid_wrapper sidebar_content full_width ppb_blog_posts">
                            <div id="post-18" class="post type-post hentry status-publish ">
                                <div class="post_wrapper grid_layout">
                                    <div class="post_img small static">
                                        <a href="#">
                                            <img src="images/blog1.jpg"
                                                alt="What To Do if Your Rental Car Has Met With An Accident" class="" />
                                        </a>
                                    </div>
                                    <div class="post_header_wrapper">
                                        <div class="post_header grid">
                                            <div class="post_detail single_post">
                                                <span class="post_info_date">
                                                    <a href="#"
                                                        title="What To Do if Your Rental Car Has Met With An Accident">January
                                                        12, 2017</a>
                                                </span>
                                            </div>
                                            <h6><a href="#"
                                                    title="What To Do if Your Rental Car Has Met With An Accident">What
                                                    To Do if Your Rental Car Has Met With An Accident</a></h6>
                                        </div>
                                        <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level
                                            ethnic fingerstache...
                                        <div class="post_button_wrapper">
                                            <a class="readmore" href="#">Read More<span
                                                    class="ti-angle-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="post-29" class="post type-post hentry status-publish ">
                                <div class="post_wrapper grid_layout">
                                    <div class="post_img small static">
                                        <a href="#">
                                            <img src="images/blog2.jpg"
                                                alt="On The Trail of 6 Best Foods in North America" class="" />
                                        </a>
                                    </div>
                                    <div class="post_header_wrapper">
                                        <div class="post_header grid">
                                            <div class="post_detail single_post">
                                                <span class="post_info_date">
                                                    <a href="#"
                                                        title="On The Trail of 6 Best Foods in North America">January
                                                        10, 2017</a>
                                                </span>
                                            </div>
                                            <h6><a href="#" title="On The Trail of 6 Best Foods in North America">On The
                                                    Trail of 6 Best Foods in North America</a></h6>
                                        </div>
                                        <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level
                                            ethnic fingerstache...
                                        <div class="post_button_wrapper">
                                            <a class="readmore" href="#">Read More<span
                                                    class="ti-angle-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="post-36" class="post type-post hentry status-publish last">
                                <div class="post_wrapper grid_layout">
                                    <div class="post_img small static">
                                        <a href="#">
                                            <img src="images/blog3.jpg" alt="Car Rental Mistakes That Can Cost You Big"
                                                class="" />
                                        </a>
                                    </div>
                                    <div class="post_header_wrapper">
                                        <div class="post_header grid">
                                            <div class="post_detail single_post">
                                                <span class="post_info_date">
                                                    <a href="#"
                                                        title="Car Rental Mistakes That Can Cost You Big">January
                                                        9, 2017</a>
                                                </span>
                                            </div>
                                            <h6><a href="#" title="Car Rental Mistakes That Can Cost You Big">Car Rental
                                                    Mistakes That Can Cost You Big</a></h6>
                                        </div>
                                        <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level
                                            ethnic fingerstache...
                                        <div class="post_button_wrapper">
                                            <a class="readmore" href="#">Read More<span
                                                    class="ti-angle-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br class="clear" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection
