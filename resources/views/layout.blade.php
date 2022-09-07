<!DOCTYPE html>
<html lang="vi">

<head>
    @include('blocks.head')
</head>

<body>

    @include('elements.preload')

    <div class="wrapper-page">
        @include('blocks.sidebar')

        <!-- Main Content Pages -->
        <div class="content-pages">
            <div class="sub-home-pages">
                <!-- Subpages -->
                @yield('content')
                <!-- Portfolio Subpage -->
                <section id="portfolio" class="sub-page">
                    <div class="sub-page-inner">
                        <div class="section-title">
                            <div class="main-title">
                                <div class="title-main-page">
                                    <h4>Portfolio</h4>
                                    <p>Samples of some of my work from the past year.</p>
                                </div>
                            </div>
                        </div>

                        <div class="section-content">
                            <div class="filter-tabs">
                                <button class="fil-cat" data-rel="all"><span>0</span> All</button>
                                <button class="fil-cat" data-rel="photography"><span>05</span> Websites</button>
                                <button class="fil-cat" data-rel="web-design"><span>07</span> Decorations</button>
                                <button class="fil-cat" data-rel="branding"><span>12</span> Business Logo</button>
                            </div>

                            <div class="portfolio-grid portfolio-trigger" id="portfolio-page">
                                <div class="label-portfolio"><span class="rotated-sub">project</span><span
                                        class="project-count">8</span></div>
                                <div class="row">
                                    <div
                                        class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item branding photography all">
                                        <div class="portfolio-img">
                                            <img src="{{ asset('themes/nghia23d/images/portfolio/portfolio-img-1.jpeg') }}"
                                                class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-data">
                                            <h4><a href="portfolio-single.html">Company Branding</a></h4>
                                            <p class="meta">Branding + Photography</p>
                                            <div class="portfolio-attr">
                                                <a href="portfolio-single.html"><i class="lnr lnr-link"></i></a>
                                                <a href="{{ asset('themes/nghia23d/images/portfolio/portfolio-img-1.jpeg') }}"
                                                    data-rel="lightcase:gal" title="Image Caption"><i
                                                        class="lnr lnr-move"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item web-design branding all">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('themes/nghia23d/images/portfolio/portfolio-img-2.jpeg') }}"
                                                class="img-responsive" alt=""></div>
                                        <div class="portfolio-data">
                                            <h4><a href="portfolio-single.html">Home Decoration</a></h4>
                                            <p class="meta">Web design + Branding</p>
                                            <div class="portfolio-attr">
                                                <a href="portfolio-single.html"><i class="lnr lnr-link"></i></a>
                                                <a href="{{ asset('themes/nghia23d/images/portfolio/portfolio-img-2.jpeg') }}"
                                                    data-rel="lightcase:gal" title="Image Caption"><i
                                                        class="lnr lnr-move"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item branding all">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('themes/nghia23d/images/portfolio/portfolio-img-3.jpeg') }}"
                                                class="img-responsive" alt=""></div>
                                        <div class="portfolio-data">
                                            <h4><a href="portfolio-single.html">Photography</a></h4>
                                            <p class="meta">Branding</p>
                                            <div class="portfolio-attr">
                                                <a href="portfolio-single.html"><i class="lnr lnr-link"></i></a>
                                                <a href="{{ asset('themes/nghia23d/images/portfolio/portfolio-img-3.jpeg') }}"
                                                    data-rel="lightcase:gal" title="Image Caption"><i
                                                        class="lnr lnr-move"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item web-design branding all">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('themes/nghia23d/images/portfolio/portfolio-img-4.jpeg') }}"
                                                class="img-responsive" alt=""></div>
                                        <div class="portfolio-data">
                                            <h4><a href="portfolio-single.html">Furniture branding</a></h4>
                                            <p class="meta">Web design + Branding</p>
                                            <div class="portfolio-attr">
                                                <a href="portfolio-single.html"><i class="lnr lnr-link"></i></a>
                                                <a href="{{ asset('themes/nghia23d/images/portfolio/portfolio-img-4.jpeg') }}"
                                                    data-rel="lightcase:gal" title="Image Caption"><i
                                                        class="lnr lnr-move"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item branding all">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('themes/nghia23d/images/portfolio/portfolio-img-4.jpeg') }}"
                                                class="img-responsive" alt=""></div>
                                        <div class="portfolio-data">
                                            <h4><a href="portfolio-single.html">Flowers power</a></h4>
                                            <p class="meta">Branding</p>
                                            <div class="portfolio-attr">
                                                <a href="portfolio-single.html"><i class="lnr lnr-link"></i></a>
                                                <a href="{{ asset('themes/nghia23d/images/portfolio/portfolio-img-5.jpeg') }}"
                                                    data-rel="lightcase:gal" title="Image Caption"><i
                                                        class="lnr lnr-move"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item web-design branding all">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('themes/nghia23d/images/portfolio/portfolio-img-6.jpeg') }}"
                                                class="img-responsive" alt=""></div>
                                        <div class="portfolio-data">
                                            <h4><a href="portfolio-single.html">Furniture branding</a></h4>
                                            <p class="meta">Web design + Branding</p>
                                            <div class="portfolio-attr">
                                                <a href="portfolio-single.html"><i class="lnr lnr-link"></i></a>
                                                <a href="{{ asset('themes/nghia23d/images/portfolio/portfolio-img-6.jpeg') }}"
                                                    data-rel="lightcase:gal" title="Image Caption"><i
                                                        class="lnr lnr-move"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item branding all">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('themes/nghia23d/images/portfolio/portfolio-img-7.jpeg') }}"
                                                class="img-responsive" alt=""></div>
                                        <div class="portfolio-data">
                                            <h4><a href="portfolio-single.html">Flowers power</a></h4>
                                            <p class="meta">Branding</p>
                                            <div class="portfolio-attr">
                                                <a href="portfolio-single.html"><i class="lnr lnr-link"></i></a>
                                                <a href="{{ asset('themes/nghia23d/images/portfolio/portfolio-img-7.jpeg') }}"
                                                    data-rel="lightcase:gal" title="Image Caption"><i
                                                        class="lnr lnr-move"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item web-design branding all">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('themes/nghia23d/images/portfolio/portfolio-img-8.jpeg') }}"
                                                class="img-responsive" alt=""></div>
                                        <div class="portfolio-data">
                                            <h4><a href="portfolio-single.html">Furniture branding</a></h4>
                                            <p class="meta">Web design + Branding</p>
                                            <div class="portfolio-attr">
                                                <a href="portfolio-single.html"><i class="lnr lnr-link"></i></a>
                                                <a href="{{ asset('themes/nghia23d/images/portfolio/portfolio-img-8.jpeg') }}"
                                                    data-rel="lightcase:gal" title="Image Caption"><i
                                                        class="lnr lnr-move"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /Portfolio Subpage -->

                <!-- Blog Subpage -->
                <section id="blog" class="sub-page">
                    <div class="sub-page-inner">
                        <div class="section-title">
                            <div class="main-title">
                                <div class="title-main-page">
                                    <h4>Blog</h4>
                                    <p>We share our news and blog</p>
                                </div>
                            </div>
                        </div>

                        <div class="section-content">
                            <div class="row blog-grid-flex">
                                <div class="col-md-4 col-sm-6 blog-item-quote blog-item">
                                    <div class="blog-article">
                                        <div class="post-format"> <span class="post-format-icon"><i
                                                    class="fas fa-quote-right"></i></span> </div>
                                        <div class="comment-like"> <span><i class="fas fa-comment"
                                                    aria-hidden="true"></i>
                                                30</span> <span><i class="fas fa-heart" aria-hidden="true"></i>
                                                15</span> </div>
                                        <div class="article-img">
                                            <a href="blog-single.html"><img
                                                    src="{{ asset('themes/nghia23d/images/blog/1.jpeg') }}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                        <div class="article-content">
                                            <div>
                                                <h4><a href="blog-single.html">Design is not just what it looks like
                                                        .Design is how it works .</a></h4>
                                                <div class="meta"> <span><i>Feb</i> 16,2016</span> <span><i>In</i> <a
                                                            href="#">Shopping</a></span> <span><i>Tags</i> <a
                                                            href="#">Trends</a></span> </div>
                                                <div class="article-link"> <a href="blog-single.html"><i
                                                            class="lnr lnr-arrow-right"></i></a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-6 blog-item">
                                    <div class="blog-article">
                                        <div class="post-format"> <span class="post-format-icon"><i
                                                    class="lnr lnr-picture"></i></span> </div>
                                        <div class="comment-like"> <span><i class="fas fa-comment"
                                                    aria-hidden="true"></i>
                                                30</span> <span><i class="fas fa-heart" aria-hidden="true"></i>
                                                15</span> </div>
                                        <div class="article-img">
                                            <a href="blog-single.html"> <img
                                                    src="{{ asset('themes/nghia23d/images/blog/2.jpeg') }}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                        <div class="article-link"> <a href="blog-single.html"><i
                                                    class="lnr lnr-arrow-right"></i></a>
                                        </div>
                                        <div class="article-content">
                                            <h4><a href="blog-single.html">The new clear bolg </a></h4>
                                            <div class="meta"> <span><i>Feb</i> 16,2016</span> <span><i>In</i> <a
                                                        href="#">Shopping</a></span> <span><i>Tags</i> <a
                                                        href="#">Trends</a></span> </div>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majority .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 blog-item">
                                    <div class="blog-article">
                                        <div class="post-format"> <span class="post-format-icon"><i
                                                    class="lnr lnr-film-play"></i></span> </div>
                                        <div class="comment-like"> <span><i class="fas fa-comment"
                                                    aria-hidden="true"></i>
                                                30</span> <span><i class="fas fa-heart" aria-hidden="true"></i>
                                                15</span> </div>
                                        <div class="article-img">
                                            <a href="blog-single.html"> <img
                                                    src="{{ asset('themes/nghia23d/images/blog/3.jpeg') }}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                        <div class="article-link"> <a href="blog-single.html"><i
                                                    class="lnr lnr-arrow-right"></i></a>
                                        </div>
                                        <div class="article-content">
                                            <h4><a href="blog-single.html">Content builder posts</a></h4>
                                            <div class="meta"> <span><i>Feb</i> 16,2016</span> <span><i>In</i> <a
                                                        href="#">Shopping</a></span> <span><i>Tags</i> <a
                                                        href="#">Trends</a></span> </div>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majority .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 blog-item">
                                    <div class="blog-article">
                                        <div class="post-format"> <span class="post-format-icon"><i
                                                    class="lnr lnr-picture"></i></span> </div>
                                        <div class="comment-like"> <span><i class="fas fa-comment"
                                                    aria-hidden="true"></i>
                                                30</span> <span><i class="fas fa-heart" aria-hidden="true"></i>
                                                15</span> </div>
                                        <div class="article-img">
                                            <a href="blog-single.html"> <img
                                                    src="{{ asset('themes/nghia23d/images/blog/4.jpeg') }}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                        <div class="article-link"> <a href="blog-single.html"><i
                                                    class="lnr lnr-arrow-right"></i></a>
                                        </div>
                                        <div class="article-content">
                                            <h4><a href="blog-single.html">Transitions In Design</a></h4>
                                            <div class="meta"> <span><i>Feb</i> 16,2016</span> <span><i>In</i> <a
                                                        href="#">Shopping</a></span> <span><i>Tags</i> <a
                                                        href="#">Trends</a></span> </div>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majority .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 blog-item">
                                    <div class="blog-article">
                                        <div class="post-format"> <span class="post-format-icon"><i
                                                    class="lnr lnr-picture"></i></span> </div>
                                        <div class="comment-like"> <span><i class="fas fa-comment"
                                                    aria-hidden="true"></i>
                                                30</span> <span><i class="fas fa-heart" aria-hidden="true"></i>
                                                15</span> </div>
                                        <div class="article-img">
                                            <a href="blog-single.html"> <img
                                                    src="{{ asset('themes/nghia23d/images/blog/5.jpeg') }}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                        <div class="article-link"> <a href="blog-single.html"><i
                                                    class="lnr lnr-arrow-right"></i></a>
                                        </div>
                                        <div class="article-content">
                                            <h4><a href="blog-single.html">Comfort classy outfits</a></h4>
                                            <div class="meta"> <span><i>Feb</i> 16,2016</span> <span><i>In</i> <a
                                                        href="#">Shopping</a></span> <span><i>Tags</i> <a
                                                        href="#">Trends</a></span> </div>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majority .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 blog-item">
                                    <div class="blog-article">
                                        <div class="post-format"> <span class="post-format-icon"><i
                                                    class="lnr lnr-film-play"></i></span> </div>
                                        <div class="comment-like"> <span><i class="fas fa-comment"
                                                    aria-hidden="true"></i>
                                                30</span> <span><i class="fas fa-heart" aria-hidden="true"></i>
                                                15</span> </div>
                                        <div class="article-img">
                                            <a href="blog-single.html"> <img
                                                    src="{{ asset('themes/nghia23d/images/blog/6.jpeg') }}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                        <div class="article-link"> <a href="blog-single.html"><i
                                                    class="lnr lnr-arrow-right"></i></a>
                                        </div>
                                        <div class="article-content">
                                            <h4><a href="blog-single.html">Recent trends in story</a></h4>
                                            <div class="meta"> <span><i>Feb</i> 16,2016</span> <span><i>In</i> <a
                                                        href="#">Shopping</a></span> <span><i>Tags</i> <a
                                                        href="#">Trends</a></span> </div>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majority .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 blog-item">
                                    <div class="blog-article">
                                        <div class="post-format"> <span class="post-format-icon"><i
                                                    class="lnr lnr-music-note"></i></span></div>
                                        <div class="comment-like"> <span><i class="fas fa-comment"
                                                    aria-hidden="true"></i>
                                                30</span> <span><i class="fas fa-heart" aria-hidden="true"></i>
                                                15</span> </div>
                                        <div class="article-img">
                                            <a href="blog-single.html"> <img
                                                    src="{{ asset('themes/nghia23d/images/blog/7.jpeg') }}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                        <div class="article-link"> <a href="blog-single.html"><i
                                                    class="lnr lnr-arrow-right"></i></a>
                                        </div>
                                        <div class="article-content">
                                            <h4><a href="blog-single.html">Social media websites</a></h4>
                                            <div class="meta"> <span><i>Feb</i> 16,2016</span> <span><i>In</i> <a
                                                        href="#">Shopping</a></span> <span><i>Tags</i> <a
                                                        href="#">Trends</a></span> </div>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majority .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 blog-item-quote blog-item">
                                    <div class="blog-article">
                                        <div class="post-format"> <span class="post-format-icon"><i
                                                    class="lnr lnr-picture"></i></span> </div>
                                        <div class="comment-like"> <span><i class="fas fa-comment"
                                                    aria-hidden="true"></i>
                                                30</span> <span><i class="fas fa-heart" aria-hidden="true"></i>
                                                15</span> </div>
                                        <div class="article-img">
                                            <a href="blog-single.html"> <img
                                                    src="{{ asset('themes/nghia23d/images/blog/8.jpeg') }}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                        <div class="article-content">
                                            <div>
                                                <h4><a href="blog-single.html">Design is not just what it looks like
                                                        .Design is how it works .</a></h4>
                                                <div class="meta"> <span><i>Feb</i> 16,2016</span> <span><i>In</i> <a
                                                            href="#">Shopping</a></span> <span><i>Tags</i> <a
                                                            href="#">Trends</a></span> </div>
                                                <div class="article-link"> <a href="blog-single.html"><i
                                                            class="lnr lnr-arrow-right"></i></a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-nav nav-center">
                                <a href="#" class="btn btn-prev"><i class="lnr lnr-arrow-left"></i> prev</a>
                                <a href="#" class="btn btn-next">next <i class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="contact" class="sub-page">
                    <div class="sub-page-inner">
                        <div class="section-title">
                            <div class="main-title">
                                <div class="title-main-page">
                                    <h4>Contact</h4>
                                    <p>NEED SOME HELP?</p>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Form -->
                        <div class="row contact-form pb-30">
                            <div class="col-sm-12 col-md-5 col-lg-5 left-background">
                                <img src="{{ asset('themes/nghia23d/images/') }}mailbox.png" alt="image" />
                            </div>
                            <div class="col-sm-12 col-md-7 col-lg-7">
                                <div class="form-contact-me">
                                    <div id="show_contact_msg"></div>
                                    <form method="post" id="contact-form" action="php/contact.php">
                                        <input name="name" id="name" type="text" placeholder="Name:"
                                            required autocomplete="off">
                                        <input name="email" id="email" type="email" placeholder="Email:"
                                            required autocomplete="off">
                                        <textarea name="comment" id="comment" placeholder="Message:" required rows="6"></textarea>
                                        <input class="bt-submit" type="submit" value="Send Message">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Contact Form -->

                        <!-- Contact Details -->
                        <div class="pt-50 pb-30">
                            <div class="section-head">
                                <h4>
                                    <span>Contact Information</span>
                                    Find me here
                                </h4>
                            </div>

                            <!-- Contact Info -->
                            <div class="sidebar-textbox row pb-50">
                                <div class="contact-info d-flex col-md-4">
                                    <div class="w-25">
                                        <div class="contact-icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="contact-text w-75">
                                        <h2>Phone</h2>
                                        <p>(+881) 111 222 333</p>
                                        <p>(+881) 111 222 333</p>
                                    </div>
                                </div>
                                <div class="contact-info d-flex col-md-4">
                                    <div class="w-25">
                                        <div class="contact-icon">
                                            <i class="far fa-envelope-open"></i>
                                        </div>
                                    </div>
                                    <div class="contact-text w-75">
                                        <h2>Email</h2>
                                        <p>info@domain.com</p>
                                        <p>name@domain.com</p>
                                    </div>
                                </div>
                                <div class="contact-info d-flex col-md-4">
                                    <div class="w-25">
                                        <div class="contact-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                    </div>
                                    <div class="contact-text w-75">
                                        <h2>Address</h2>
                                        <p>123 New Yourk D Block 1100, <br> Street 2011 USA</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Contact info -->

                            <!-- Map Container -->
                            <div class="contact-map pt-50">
                                <!-- GOOGLE MAP -->
                                <div id="google-map"></div>
                            </div>
                            <!-- /Map Container -->

                            <!-- Social Media -->
                            <div class="pt-50">
                                <div class="social-media-block">
                                    <h4>Follow Me: </h4>
                                    <ul class="social-media-links">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-snapchat-ghost"></i></a></li>
                                        <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Social Media -->
                        </div>
                        <!-- /Contact Details -->
                    </div>
                </section>
            </div>

        </div>
    </div>

    @include('blocks.script')
</body>

</html>
