

<footer class="site-footer">
    <div class="footer-top">
         <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 footer-col-4">
                    <div class="widget widget_about">
                        <div class="logo-footer"><img src="{{ asset('frontend/asset/images/logo-light.png') }}" alt=""></div>
                        <p class="m-tb20"><strong>At Ezeogidi Motors, </strong>We understand that purchasing a used car is a significant decision, and we strive to make the process as hassle-free as possible. Our financing options are flexible and tailored to meet your specific financial situation</p>
                        
                        <ul class="dlab-contact-info">
                            <li><i class="flaticon-placeholder"></i>Demo Address #8901 Marmora Road Chi Minh City, Vietnam</li>
                            <li><i class="flaticon-customer-service"></i>Phone : 0800-123456 (24/7 Support Line)</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 footer-col-4">
                    <div class="widget widget_services">
                        <h4 class="m-b15 text-uppercase">Useful Links</h4>
                        <div class="dlab-separator bg-primary"></div>
                        <ul>
                            <li><a href="#">Latest Cars</a></li>
                            <li><a href="#">Upcoming Cars</a></li>
                            <li><a href="#">Search Used Car</a></li>
                            <li><a href="{{ route('become.vendor') }}">Car Sell</a></li>
                            <li><a href="#">Compare Car</a></li>
                            <li><a href="#">Car Reviews</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 footer-col-4">
                    <div class="widget recent-posts-entry">
                        <h4 class="m-b15 text-uppercase">recent posts </h4>
                        <div class="dlab-separator bg-primary"></div>
                        <div class="widget-post-bx">
                            <div class="widget-post clearfix">
                                <div class="dlab-post-media"> <img src="{{ asset('frontend/asset/images/blog/recent-blog/pic1.jpg') }}" alt="" width="200" height="143"> </div>
                                <div class="dlab-post-info">
                                    <div class="dlab-post-header">
                                        <h5><a href="blog-single.html">Time to change...</a></h5>
                                    </div>
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-author">By Admin</li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-post clearfix">
                                <div class="dlab-post-media"> <img src="{{ asset('frontend/asset/images/blog/recent-blog/pic2.jpg') }}" alt="" width="200" height="160"> </div>
                                <div class="dlab-post-info">
                                    <div class="dlab-post-header">
                                        <h5><a href="blog-single.html">Time to change...</a></h5>
                                    </div>
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-author">By Admin</li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-post clearfix">
                                <div class="dlab-post-media"> <img src="{{ asset('frontend/asset/images/blog/recent-blog/pic3.jpg') }}" alt="" width="200" height="160"> </div>
                                <div class="dlab-post-info">
                                    <div class="dlab-post-header">
                                        <h5><a href="blog-single.html">Time to change...</a></h5>
                                    </div>
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-author">By Admin</li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 footer-col-4">
                    <div class="widget ">
                        <h4 class="m-b15 text-uppercase">Newsletter </h4>
                        <div class="dlab-separator bg-primary"></div>
                        <p class="m-tb20">Keep up on our always evolving products features and technology. Enter your e-mail and subscribe to our newsletter.</p>
                        <form action="https://carzone.dexignlab.com/xhtml/script/mailchamp.php" method="post" class="dlab-subscribe-form dzSubscribe">
                            <div class="dzSubscribeMsg"></div>
                            <div class="input-group m-b15">
                                <input name="dzEmail" required="required" type="email" class="form-control" placeholder="Enter Your Email">
                            </div>
                            <div class="input-group">
                                <button name="submit" value="Submit" type="submit" class="site-button btn-block">
                                    SUBSCRIBE <i class="fa fa-angle-right font-18 m-l10"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <ul class="full-social-icon clearfix">
                    <li class="fb col-md-3 col-sm-6 col-xs-6 m-b30">
                        <a href="#"><i class="fa fa-facebook"></i> Share On Facebook </a>
                    </li>
                    <li class="tw col-md-3 col-sm-6 col-xs-6 m-b30">
                        <a href="#"><i class="fa fa-twitter"></i> Tweet About it </a>
                    </li>
                    <li class="gplus col-md-3 col-sm-6 col-xs-6 m-b30">
                        <a href="#"><i class="fa fa-google-plus"></i> Google Plus | 78+ </a>
                    </li>
                    <li class="linkd col-md-3 col-sm-6 col-xs-6 m-b30">
                        <a href="#"><i class="fa fa-linkedin"></i> Linkedin | 21k </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- footer bottom part -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-left"> © Copyright 2020 - {{ date("Y") }} developed by <a href="wwww.swinotech.com" target="_blank">Swinotech</a> </div>
                <div class="col-md-6 col-sm-6 text-right "> 
                    <a href="/about"> About Us</a> | 
                    <a href="/contactus"> Contact Us</a> | 
                    <a href="#"> Privacy Policy</a> 
                </div>
            </div>
        </div>
    </div>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-55435e5f-af2d-4db7-805f-5d9bf0a75395"></div>
</footer>