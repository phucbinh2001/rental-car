@extends('layout')
@section('content')

<div id="page_caption" class="hasbg  withtopbar " style="background-image:url(../images/{{$car->img}});">

    <div class="single_car_header_button">
        <div class="standard_wrapper">
            <a href="upload/nw6xremkxkg-nicolai-berntsen.jpg" id="single_car_gallery_open"
                class="button fancy-gallery"><span class="ti-camera"></span>View Photos</a>
            <div style="display:none;">
                <a id="single_car_gallery_image1" href="upload/traffic-car-vehicle-black.jpg" title=""
                    class="fancy-gallery"></a>
                <a id="single_car_gallery_image2" href="upload/evening.jpg" title="" class="fancy-gallery"></a>
                <a id="single_car_gallery_image3" href="upload/IMG_3496bfree.jpg"
                    title="The road to success and the road to failure are almost exactly the same"
                    class="fancy-gallery"></a>
                <a id="single_car_gallery_image4" href="upload/road-people-street-smartphone.jpg" title=""
                    class="fancy-gallery"></a>
            </div>

            <a href="#video_review151" id="single_car_video_review_open" class="button" data-type="inline"><span
                    class="ti-control-play"></span>Video Review</a>

            <div id="video_review151" class="car_video_review_wrapper" style="display:none;">
                <iframe width="1280" height="720" src="https://www.youtube.com/embed/0DlhPeeW2BA" frameborder="0"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="single_car_header_content">
        <div class="standard_wrapper">
            <div class="single_car_header_price">
                <span id="single_car_price"><span class="single_car_currency">VND</span><span
                        class="single_car_price">{{ number_format($car->price, 0, ',', '.') }}</span></span>
                <span id="single_car_price_per_unit_change" class="single_car_price_per_unit">
                    <br>
                    <span id="single_car_unit">/ ngày</span>


                    <ul id="price_per_unit_select">
                        <li class="icon arrow"></li>
                        <li class="active">
                            <a class="active" href="javascript:;" data-filter="car_price_day"
                                data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;110&lt;/span&gt;">Per
                                Day</a>
                        </li>
                        <li>
                            <a class="active" href="javascript:;" data-filter="car_price_hour"
                                data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;13&lt;/span&gt;">Per
                                Hour</a>
                        </li>
                        <li>
                            <a class="active" href="javascript:;" data-filter="car_price_airport"
                                data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;120&lt;/span&gt;">Airport
                                Transfer</a>
                        </li>
                    </ul>
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Begin content -->
<div id="page_content_wrapper" class="hasbg withtopbar ">
    <div class="inner">

        <!-- Begin main content -->
        <div class="inner_wrapper">

            <div class="sidebar_content">
                <h1>{{$car->Model}}</h1>
                <div class="car_attribute_wrapper">
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
                            4&nbsp; đánh giá </div>
                    </div>
                </div>
                <br class="clear" />
                <div class="single_car_content">
                    @if($car->Description != '')
                    {{$car->Description}}
                    @else
                    Chưa có mô tả
                    @endif
                </div>


                <div class="fullwidth_comment_wrapper sidebar">

                    <h3 class="comment_title">4 Đánh giá</span></h3>
                    <div class="avg_comment_rating_wrapper themeborder">
                        <div class="comment_rating_wrapper">
                            <div class="comment_rating_label">Driving</div>
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;"></a>
                                </div>
                            </div>
                        </div>
                        <div class="comment_rating_wrapper">
                            <div class="comment_rating_label">Interior Layout</div>
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;"></a>
                                </div>
                            </div>
                        </div>
                        <div class="comment_rating_wrapper">
                            <div class="comment_rating_label">Space &amp; Practicality</div>
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;"></a>
                                </div>
                            </div>
                        </div>
                        <div class="comment_rating_wrapper">
                            <div class="comment_rating_label">Overall</div>
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a name="comments"></a>

                        <div class="comment" id="comment-48">
                            <div class="gravatar">
                                <img src="upload/author1-100x100.jpg" width="60" height="60" alt="Jack Dawson"
                                    class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" />
                            </div>

                            <div class="right ">

                                <h7>Jack Dawson</h7>

                                <div class="comment_date">January 18, 2017 at 8:08 am</div>
                                <a rel='nofollow' class='comment-reply-link' href='#'
                                    aria-label='Reply to Jack Dawson'>Reply</a>
                                <div class="comment_text" />
                                <p>Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse
                                    Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. Deep v
                                    cliche lomo biodiesel Neutra selfies. Shorts fixie consequat flexitarian four loko
                                    tempor duis single-origin coffee. Banksy, elit small batch freegan sed.</p>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Driving</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Interior Layout</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Space &amp; Practicality</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Overall</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br class="clear" />
                    </li>
                    <!-- #comment-## -->

                    <div class="comment" id="comment-49">
                        <div class="gravatar">
                            <img src="upload/me-100x100.jpg" width="60" height="60" alt="Anna Kornikova"
                                class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" />
                        </div>

                        <div class="right ">

                            <h7>Anna Kornikova</h7>

                            <div class="comment_date">January 18, 2017 at 8:08 am</div>
                            <a rel='nofollow' class='comment-reply-link' href='#'
                                aria-label='Reply to Anna Kornikova'>Reply</a>
                            <div class="comment_text" />
                            <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft
                                beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v
                                laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag.
                                Selfies iPhone Kickstarter, drinking vinegar jean vinegar stumptown yr pop-up artisan
                                sunt. Craft beer elit seitan exercitation, photo booth,</p>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Driving</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Interior Layout</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Space &amp; Practicality</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Overall</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br class="clear" />
                </li>
                <!-- #comment-## -->

                <div class="comment" id="comment-50">
                    <div class="gravatar">
                        <img src="upload/avatar-100x100.png" width="60" height="60" alt="Marie Argeris"
                            class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" />
                    </div>

                    <div class="right ">

                        <h7>Marie Argeris</h7>

                        <div class="comment_date">January 18, 2017 at 8:08 am</div>
                        <a rel='nofollow' class='comment-reply-link' href='#'
                            aria-label='Reply to Marie Argeris'>Reply</a>
                        <div class="comment_text" />
                        <p>Statement buttons cover-up tweaks patch pockets perennial lapel collar flap chest pockets
                            topline stitching cropped jacket. Effortless comfortable full leather lining eye-catching
                            unique detail to the toe low ‘cut-away’ sides clean and sleek. Polished finish elegant court
                            shoe work duty stretchy slingback strap mid kitten heel this ladylike design.</p>
                        <div class="comment_rating_wrapper">
                            <div class="comment_rating_label">Driving</div>
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;"></a>
                                </div>
                            </div>
                        </div>
                        <div class="comment_rating_wrapper">
                            <div class="comment_rating_label">Interior Layout</div>
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                </div>
                            </div>
                        </div>
                        <div class="comment_rating_wrapper">
                            <div class="comment_rating_label">Space &amp; Practicality</div>
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                </div>
                            </div>
                        </div>
                        <div class="comment_rating_wrapper">
                            <div class="comment_rating_label">Overall</div>
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br class="clear" />
            </li>
            <!-- #comment-## -->

            <div class="comment" id="comment-51">
                <div class="gravatar">
                    <img src="upload/author2-100x100.jpg" width="60" height="60" alt="Jessica Medina"
                        class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" />
                </div>

                <div class="right ">

                    <h7>Jessica Medina</h7>

                    <div class="comment_date">January 18, 2017 at 8:08 am</div>
                    <a rel='nofollow' class='comment-reply-link' href='#' aria-label='Reply to Jessica Medina'>Reply</a>
                    <div class="comment_text" />
                    <p>Foam padding in the insoles leather finest quality staple flat slip-on design pointed toe
                        off-duty shoe. Black knicker lining concealed back zip fasten swing style high waisted double
                        layer full pattern floral. Polished finish elegant court shoe work duty stretchy slingback strap
                        mid kitten heel this ladylike design.</p>
                    <div class="comment_rating_wrapper">
                        <div class="comment_rating_label">Driving</div>
                        <div class="br-theme-fontawesome-stars-o">
                            <div class="br-widget">
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                            </div>
                        </div>
                    </div>
                    <div class="comment_rating_wrapper">
                        <div class="comment_rating_label">Interior Layout</div>
                        <div class="br-theme-fontawesome-stars-o">
                            <div class="br-widget">
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;"></a>
                            </div>
                        </div>
                    </div>
                    <div class="comment_rating_wrapper">
                        <div class="comment_rating_label">Space &amp; Practicality</div>
                        <div class="br-theme-fontawesome-stars-o">
                            <div class="br-widget">
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                            </div>
                        </div>
                    </div>
                    <div class="comment_rating_wrapper">
                        <div class="comment_rating_label">Overall</div>
                        <div class="br-theme-fontawesome-stars-o">
                            <div class="br-widget">
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br class="clear" />
        </li>
        <!-- #comment-## -->
    </div>

    <!-- End of thread -->
    <div style="height:10px"></div>

    <div id="respond" class="comment-respond">
        <h3 id="reply-title" class="comment-reply-title">Write A Review <small><a rel="nofollow"
                    id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small></h3>
        <form action="#" method="post" id="commentform" class="comment-form">
            <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required
                fields are marked <span class="required">*</span></p>
            <p class="comment-form-comment">
                <label for="comment">Comment</label>
                <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525"
                    required="required"></textarea>
            </p>
            <p class="comment-form-author">
                <label for="author">Name <span class="required">*</span></label>
                <input id="author" name="author" type="text" value="" size="30" maxlength="245" required='required' />
            </p>
            <p class="comment-form-email">
                <label for="email">Email <span class="required">*</span></label>
                <input id="email" name="email" type="text" value="" size="30" maxlength="100"
                    aria-describedby="email-notes" required='required' />
            </p>
            <p class="comment-form-url">
                <label for="url">Website</label>
                <input id="url" name="url" type="text" value="" size="30" maxlength="200" />
            </p>
            <p class="comment-form-rating">
                <label for="driving_rating">Driving</label>
                <span class="commentratingbox">
                    <select id="driving_rating" name="driving_rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
            </p>
            <p class="comment-form-rating"><label for="interior_rating">Interior Layout</label>
                <span class="commentratingbox">
                    <select id="interior_rating" name="interior_rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
            </p>
            <p class="comment-form-rating"><label for="space_rating">Space &amp; Practicality</label>
                <span class="commentratingbox">
                    <select id="space_rating" name="space_rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
            </p>
            <p class="comment-form-rating"><label for="overall_rating">Overall</label>
                <span class="commentratingbox">
                    <select id="overall_rating" name="overall_rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
            </p>
            <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Review" />
                <input type='hidden' name='comment_post_ID' value='153' id='comment_post_ID' />
                <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
            </p> \
        </form>
    </div><!-- #respond -->

</div>

</div>

<div class="sidebar_wrapper">

    <div class="sidebar_top"></div>

    <div class="sidebar">

        <div class="content">

            <div class="single_car_header_price">
                <span id="single_car_price_scroll"><span class="single_car_currency">VND</span><span
                        class="single_car_price">{{ number_format($car->price, 0, ',', '.') }}</span></span>
                <span id="single_car_price_per_unit_change_scroll" class="single_car_price_per_unit">
                    <br>
                    <span id="single_car_unit_scroll">/ ngày</span>


                    <ul id="price_per_unit_select_scroll">
                        <li class="icon arrow"></li>
                        <li class="active">
                            <a class="active" href="javascript:;" data-filter="car_price_day"
                                data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;127&lt;/span&gt;">Per
                                Day</a>
                        </li>
                        <li>
                            <a class="active" href="javascript:;" data-filter="car_price_hour"
                                data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;14&lt;/span&gt;">Per
                                Hour</a>
                        </li>
                        <li>
                            <a class="active" href="javascript:;" data-filter="car_price_airport"
                                data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;120&lt;/span&gt;">Airport
                                Transfer</a>
                        </li>
                    </ul>
                </span>
                <hr />
            </div>

            <div class="single_car_booking_wrapper themeborder book_instantly">
                <div role="form" class="wpcf7" id="wpcf7-f157-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="{{route('booking.store')}}" method="post" class="wpcf7-form">
                        @csrf
                        <p>
                            <label> Họ và tên
                                <br />
                                <span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" value=""
                                        size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                        aria-required="true" aria-invalid="false" placeholder="John Doe" />
                                    @error('name')
                                    <span style="color: crimson;">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </span>
                            </label>
                        </p>
                        <p>
                            <label> Emai
                                <br />
                                <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email"
                                        value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                        aria-required="true" aria-invalid="false"
                                        placeholder="sample@yourcompany.com" />
                                    @error('email')
                                    <span style="color: crimson;">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </span> </label>
                        </p>
                        <p>
                            <label> Số điện thoại
                                <br />
                                <span class="wpcf7-form-control-wrap your-tel"><input type="tel" name="tel" value=""
                                        size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                        aria-required="true" aria-invalid="false" placeholder="+66-4353434" />
                                    @error('tel')
                                    <span style="color: crimson;">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </span>
                            </label>
                        </p>
                        <p>
                            <label> Địa chỉ nhận xe
                                <br />
                                <span class="wpcf7-form-control-wrap pickup-address"><input type="text"
                                        name="pickupaddress" value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                        aria-required="true" aria-invalid="false" placeholder="34 Mainfield Road" />
                                    @error('pickupaddress')
                                    <span style="color: crimson;">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </span> </label>
                        </p>
                        <p>
                            <label> Ngày nhận xe
                                <br />
                                <span class="wpcf7-form-control-wrap pickup-date"><input type="date" name="pickupdate"
                                        value="mm/dd/yyyy"
                                        class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date"
                                        aria-required="true" aria-invalid="false" />
                                    @error('pickupdate')
                                    <span style="color: crimson;">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </span> </label>
                        </p>

                        <p>
                            <label> Địa chỉ trả xe
                                <br />
                                <span class="wpcf7-form-control-wrap dropoff-address"><input type="text"
                                        name="addpresstra" value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                        aria-required="true" aria-invalid="false"
                                        placeholder="Heatrow Airport" /></span> </label><span
                                class="wpcf7-form-control-wrap dynamicurl"><input type="hidden"
                                    value="http://themes.themegoods.com/grandcarrental/demo/car/mercedes-benz-gle/"
                                    size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden"
                                    aria-invalid="false" />
                                @error('addpresstra')
                                <span style="color: crimson;">
                                    {{ $message }}
                                </span>
                                @enderror
                            </span>
                        </p>
                        <input type="hidden" name="biensoxe" value="{{$car->VIN}}">
                        <p>
                            <input type="submit" value="Gửi yêu cầu" />
                        </p>
                        <!-- <div class="wpcf7-response-output wpcf7-display-none"></div> -->
                    </form>
                </div>
                <!-- <div class="single_car_booking_divider">
                    <span class="single_car_booking_divider_content">or</span>
                </div>
                <div class="single_car_booking_woocommerce_wrapper">
                    <button data-product="132" data-processing="Please wait..." data-url="#"
                        class="single_car_add_to_cart button">Book Instantly</button>
                </div> -->
                <!-- <div class="single_car_view_wrapper themeborder">
                    <div class="single_car_view_desc">
                        This car&#039;s been viewed&nbsp;544&nbsp;times in the past week </div>

                    <div class="single_car_view_icon ti-alarm-clock"></div>
                </div>
                <br class="clear" /> -->
            </div>

            <a id="single_car_share_button" href="javascript:;" class="button ghost themeborder"><span
                    class="ti-email"></span>Share this car</a>

            <div class="single_car_users_online_wrapper themeborder">
                <div class="single_car_users_online_icon">
                    <span class="ti-info-alt"></span>
                </div>
                <div class="single_car_users_online_content">
                    <strong>231</strong> traveler(s) are considering our cars right now!
                </div>
            </div>

        </div>

    </div>
    <br class="clear" />

    <div class="sidebar_bottom"></div>
</div>

</div>
<!-- End main content -->

<br class="clear" />
<div class="car_related">
    <h3 class="sub_title">Similar cars</h3>
    <div id="portfolio_filter_wrapper" class="gallery classic three_cols portfolio-content section content clearfix"
        data-columns="3">
        <div class="element grid classic3_cols">
            <div class="one_third gallery3 classic static filterable portfolio_type themeborder" data-id="post-240">

                <a class="car_image" href="#">
                    <img src="upload/2017-Audi-Q7-fornt-three-quarter-03-700x466.jpg" alt="Audi Q5" />
                </a>

                <div class="portfolio_info_wrapper">
                    <div class="car_attribute_wrapper">
                        <a class="car_link" href="#">
                            <h4>Audi Q5</h4>
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

                        <div class="car_attribute_wrapper_icon">
                            <div class="one_fourth">
                                <div class="car_attribute_icon ti-user"></div>
                                <div class="car_attribute_content">
                                    5 </div>
                            </div>

                            <div class="one_fourth">
                                <div class="car_attribute_icon ti-briefcase"></div>
                                <div class="car_attribute_content">
                                    4 </div>
                            </div>

                            <div class="one_fourth">
                                <div class="car_attribute_icon ti-panel"></div>
                                <div class="car_attribute_content">
                                    Auto </div>
                            </div>

                        </div>
                        <br class="clear" />
                    </div>
                    <div class="car_attribute_price">
                        <div class="car_attribute_price_day three_cols">
                            <span class="single_car_currency">$</span><span class="single_car_price">126</span> <span
                                class="car_unit_day">Per Day</span>
                        </div>
                    </div>
                    <br class="clear" />
                </div>
            </div>
        </div>
        <div class="element grid classic3_cols">
            <div class="one_third gallery3 classic static filterable portfolio_type themeborder" data-id="post-260">

                <a class="car_image" href="#">
                    <img src="upload/535a980f75319ea470a7306d90ae1524_XL-700x466.jpg" alt="MINI Countryman" />
                </a>

                <div class="portfolio_info_wrapper">
                    <div class="car_attribute_wrapper">
                        <a class="car_link" href="#">
                            <h4>MINI Countryman</h4>
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

                        <div class="car_attribute_wrapper_icon">
                            <div class="one_fourth">
                                <div class="car_attribute_icon ti-user"></div>
                                <div class="car_attribute_content">
                                    4 </div>
                            </div>

                            <div class="one_fourth">
                                <div class="car_attribute_icon ti-briefcase"></div>
                                <div class="car_attribute_content">
                                    2 </div>
                            </div>

                            <div class="one_fourth">
                                <div class="car_attribute_icon ti-panel"></div>
                                <div class="car_attribute_content">
                                    Auto </div>
                            </div>

                        </div>
                        <br class="clear" />
                    </div>
                    <div class="car_attribute_price">
                        <div class="car_attribute_price_day three_cols">
                            <span class="single_car_currency">$</span><span class="single_car_price">95</span> <span
                                class="car_unit_day">Per Day</span>
                        </div>
                    </div>
                    <br class="clear" />
                </div>
            </div>
        </div>
        <div class="element grid classic3_cols">
            <div class="one_third gallery3 classic static filterable portfolio_type themeborder" data-id="post-147">

                <a class="car_image" href="#">
                    <img src="upload/P14_0596_a4_rgb-1-700x466.jpg" alt="Porsche Cayenne" />
                </a>

                <div class="portfolio_info_wrapper">
                    <div class="car_attribute_wrapper">
                        <a class="car_link" href="#">
                            <h4>Porsche Cayenne</h4>
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

                        <div class="car_attribute_wrapper_icon">
                            <div class="one_fourth">
                                <div class="car_attribute_icon ti-user"></div>
                                <div class="car_attribute_content">
                                    5 </div>
                            </div>

                            <div class="one_fourth">
                                <div class="car_attribute_icon ti-briefcase"></div>
                                <div class="car_attribute_content">
                                    4 </div>
                            </div>

                            <div class="one_fourth">
                                <div class="car_attribute_icon ti-panel"></div>
                                <div class="car_attribute_content">
                                    Auto </div>
                            </div>

                        </div>
                        <br class="clear" />
                    </div>
                    <div class="car_attribute_price">
                        <div class="car_attribute_price_day three_cols">
                            <span class="single_car_currency">$</span><span class="single_car_price">127</span> <span
                                class="car_unit_day">Per Day</span>
                        </div>
                    </div>
                    <br class="clear" />
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>

<br class="clear" />
<div class="car_recently_view">

    <div class="standard_wrapper">

        <h3 class="sub_title">Recently View Cars</h3>

        <div id="portfolio_filter_wrapper" class="gallery grid four_cols portfolio-content section content clearfix"
            data-columns="4">
            <div class="element grid classic4_cols animated1">

                <div class="one_fourth gallery4 grid static filterable portfolio_type themeborder" data-id="post-1"
                    style="background-image:url(upload/Porsche-Boxster-Wheels-8-700x466.jpg);">
                    <a class="car_image" href="#"></a>
                    <div class="portfolio_info_wrapper">
                        <div class="car_attribute_wrapper">
                            <h5>Porsche Boxster</h5>
                        </div>
                        <div class="car_attribute_price">
                            <div class="car_attribute_price_day four_cols">
                                <span class="single_car_currency">$</span><span class="single_car_price">180</span>
                                <span class="car_unit_day">Per Day</span>
                            </div>
                        </div>
                        <br class="clear" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
