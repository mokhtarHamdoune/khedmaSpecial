<!DOCTYPE html>
<!--
Template Name: JB desks
Version: 1.0.0
Author: Webstrot

-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--[endif]-->


<!-- Mirrored from webstrot.com/html/jbdesk/main_version/main_pages/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2019 12:00:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <title>JB desks Responsive HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="JB desks,job portal,job" />
    <meta name="keywords" content="JB desks,job portal,job" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/fonts.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/flaticon.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css//owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/dropify.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/nice-select.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/reset.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    @yield("head")
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}" />
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="{{asset('images/favicon.png')}}" />
</head>

<body>
    <!-- preloader Start -->
    <div class="jb_preloader">
        <div class="spinner_wrap">
            <div class="spinner"></div>
        </div>
    </div>
    <div class="cursor"></div>
    <!-- Top Scroll Start --><a href="javascript:" id="return-to-top"><i class="fas fa-angle-double-up"></i></a>
    <!-- Top Scroll End -->
    <!-- cp navi wrapper Start -->
    <nav class="cd-dropdown  d-block d-sm-block d-md-block d-lg-none d-xl-none">
        <h2><a href="index.html"> <span><img src="images/logo.png" alt="img"></span></a></h2>
        <a href="#0" class="cd-close">Close</a>
        <ul class="cd-dropdown-content">
            <li>
                <form class="cd-search">
                    <input type="search" placeholder="Search...">
                </form>
            </li>
            <li class="has-children">
                <a href="#">home</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <li><a href="index.html">home I</a></li>
                    <li><a href="index_II.html">home II</a></li>
                    <li><a href="index_III.html">home III</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a href="#">jobs</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <li><a href="job_listing_grid_left_filter.html">job listing grid </a></li>
                    <li><a href="job_listing_list_left_filter.html">job listing list</a></li>
                    <li><a href="job_single.html">job single</a></li>
                </ul>
            </li>
            <!-- .has-children -->
            <li class="has-children">
                <a href="#">pages</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <li><a href="about_us.html">about us</a></li>
                    <li><a href="companies.html">companies</a></li>
                    <li><a href="company_single.html">company single</a></li>
                    <li><a href="error_page.html">error page</a></li>
                    <li><a href="login.html">login</a></li>
                    <li><a href="pricing_table.html">pricing table</a></li>
                    <li><a href="sign_up.html">sign up</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a href="#">dashboard</a>
                <ul class="cd-secondary-dropdown is-hidden">
                    <li class="go-back"><a href="#0">Menu</a>
                    </li>
                    <li class="has-children"> <a href="#">candidate</a>
                        <ul class="cd-secondary-dropdown is-hidden">
                            <li class="go-back"><a href="#0">Menu</a>
                            </li>
                            <li>
                                <a href="../dashboard/candidate_applied_job.html">applied job </a>
                            </li>
                            <li>
                                <a href="../dashboard/candidate_dashboard.html">dashboard</a>
                            </li>
                            <li>
                                <a href="../dashboard/candidate_edit_profile.html"> edit profile</a>
                            </li>
                            <li>
                                <a href="../dashboard/candidate_favourite_job.html">favourite job</a>
                            </li>
                            <li>
                                <a href="../dashboard/candidate_resume.html"> resume</a>
                            </li>
                            <li>
                                <a href="../dashboard/message.html"> message</a>
                            </li>
                            <li>
                                <a href="../dashboard/pricing_plans.html">pricing plans</a>
                            </li>
                        </ul>
                        <!-- .cd-secondary-dropdown -->
                    </li>
                    <!-- .has-children -->
                    <li class="has-children"> <a href="#">company</a>
                        <ul class="cd-secondary-dropdown is-hidden">
                            <li class="go-back"><a href="#0">Menu</a>
                            </li>
                            <li>
                                <a href="../dashboard/comp_applications.html"> applications </a>
                            </li>
                            <li>
                                <a href="../dashboard/comp_company_page.html">company page</a>
                            </li>
                            <li>
                                <a href="../dashboard/comp_employer_dashboard.html"> dashboard</a>
                            </li>
                            <li>
                                <a href="../dashboard/comp_employer_edit_profile.html">edit profile</a>
                            </li>
                            <li>
                                <a href="../dashboard/comp_employer_manage_jobs.html"> manage jobs</a>
                            </li>
                            <li>
                                <a href="../dashboard/comp_post_new_job.html"> post new job</a>
                            </li>
                            <li>
                                <a href="../dashboard/message.html">message</a>
                            </li>
                            <li>
                                <a href="../dashboard/pricing_plans.html">pricing plans</a>
                            </li>
                        </ul>
                        <!-- .cd-secondary-dropdown -->
                    </li>
                </ul>
                <!-- .cd-secondary-dropdown -->
            </li>
            <li class="has-children">
                <a href="#">blog</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <li><a href="blog_single.html">blog single</a></li>
                    <li><a href="blog_category_right_sidebar.html">blog category</a></li>
                </ul>
            </li>
            <li><a href="contact_us.html">contact us </a></li>
            <li><a href="login.html">login</a></li>
        </ul>
        <!-- .cd-dropdown-content -->
    </nav>
    <div class="cp_navi_main_wrapper jb_cover">
        <div class="container-fluid">
            <div class="cp_logo_wrapper">
                <a href="index.html">
                    <img src="{{asset('images/logo.png')}}" alt="logo">
                </a>
            </div>
            <!-- mobile menu area start -->
            <header class="mobail_menu d-block d-sm-block d-md-block d-lg-none d-xl-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cd-dropdown-wrapper">
                                <a class="house_toggle" href="#0">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                        <g>
                                            <g>
                                                <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#004165" />
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                                <!-- .cd-dropdown -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- .cd-dropdown-wrapper -->
            </header>
            @auth('employer')edit_profile
            <div class="menu_btn_box header_btn jb_cover">
                <h3>profile details</h3>
                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"><i class="fas fa-sign-in-alt"></i>
                                 {{ __('Logout') }}
                             </a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
            </div>
            @elseauth('candidate')
            <div class="menu_btn_box jb_cover">
               <div class="jb_profile_box">
                   <div class="nice-select" tabindex="0"> <span class="current">
				   <img src="images/pf.png" alt="img">
				   <div class="luca_profile_wrapper"><h1><a href="#">Luca Wallace</a></h1>
				   <p><a href="#">luca@example.com</a></p>
				   </div></span>
                      <ul class="list">
							<li><a href="#"><i class="fas fa-user-edit"></i>account</a>
							</li>
							<li><a href="#"><i class="fas fa-cog"></i>Setting</a>
							</li>
							<li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"><i class="fas fa-sign-in-alt"></i>
                                 {{ __('Logout') }}
                             </a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
							</li>
					</ul>
                   </div>
                </div>
            </div>
            @else
            <div class="menu_btn_box header_btn jb_cover">
                <ul>
                    <li>
                        <a href="{{url('/sign_up')}}"><i class="flaticon-man-user"></i> sign up</a>
                    </li>
                    <li>
                        <a href="{{url('/login')}}"> <i class="flaticon-login"></i> login</a>
                    </li>
                </ul>
            </div>
            @endauth
            <div class="jb_navigation_wrapper">
                <div class="mainmenu d-xl-block d-lg-block d-md-none d-sm-none d-none">
                    <ul class="main_nav_ul">
                        <li class="has-mega gc_main_navigation">
                            <a href="{{url('/')}}" class="gc_main_navigation {{ Request::is('/') ? 'active_class3' : '' }} ">home</a>
                        </li>
                        <li class="has-mega gc_main_navigation">
                            <a href="{{url('/jobs')}}" class="gc_main_navigation {{ Request::is('jobs') ? 'active_class3' : '' }}">jobs</a>
                        </li>
                        <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">dashboard</a>
                                <ul class="navi_2_dropdown">
                                    <li class="parent">
                                        <a href="{{url('/candidat')}}"><i class="fas fa-square"></i>candidate<span><i class="fas fa-chevron-right"></i></span></a>
                                    </li>
                                    <li class="parent">
                                        <a href="{{url('/recruteur')}}"><i class="fas fa-square"></i>company<span><i class="fas fa-chevron-right"></i></span></a>
                                    </li>
                                </ul>
                            </li>
                        <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">blog</a>
                            <ul class="navi_2_dropdown">
                                    <li class="parent">
                                        <a href="blog_single.html"> <i class="fas fa-square"></i>blog single</a>
                                    </li>
                                    <li class="parent">
                                        <a href="blog_category_right_sidebar.html"> <i class="fas fa-square"></i>blog category</a>
                                    </li>
                                </ul>
                        </li>
                        <li class="has-mega gc_main_navigation"><a href="{{url('/about_us')}}" class="gc_main_navigation {{ Request::is('about_us') ? 'active_class3' : '' }}">About US</a></li>
                    <li><a href="{{url('/contact_us')}}" class="gc_main_navigation {{ Request::is('contact_us') ? 'active_class3' : '' }}">contact</a></li>


                    </ul>
                </div>
                <!-- mainmenu end -->
                <div class="jb_search_btn_wrapper d-none d-sm-none d-md-none d-lg-block d-xl-block">
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button radius-xl"><i class="fas fa-search"></i></button>
                        </div>
                    </div>

                    <!-- Quik search -->
                    <div class="dez-quik-search bg-primary-dark">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search...">
                            <span id="quik-search-remove"><i class="fas fa-times"></i></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- navi wrapper End -->
    @yield('content')
    <!-- footer Wrapper Start -->
    <div class="footer jb_cover">

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footerNav jb_cover">
                        <a href="#"><img src="{{asset('images/logo2.png')}}" alt="img"></a>
                        <ul class="footer_first_contact">
                            <li><i class="flaticon-location-pointer"></i>
                                <p>123 City Avenue, Floor 10,
                                    <br> malbourne, Australia.
                                </p>
                            </li>
                            <li><i class="flaticon-telephone"></i>
                                <p>1 -234 -456 -7890
                                    <br> 1 -234 -456 -7890</p>
                            </li>
                            <li><i class="flaticon-envelope"></i><a href="#">info@Jbdesks.com </a>
                                <br>
                                <a href="#">support@Jbdesks.com</a>
                            </li>

                        </ul>

                        <ul class="icon_list_news jb_cover">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i>
                                    </a>
                            </li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footerNav jb_cover footer_border_displ">
                        <h5>features</h5>
                        <ul class="nav-widget">
                            <li><a href="#"><i class="fa fa-square"></i>Job Management & Billing
</a></li>

                            <li><a href="#"><i class="fa fa-square"></i>Time & Materials Tracking
</a></li>

                            <li><a href="#"><i class="fa fa-square"></i>Standards Compliance
</a></li>

                            <li><a href="#"><i class="fa fa-square"></i>Real Time GPS Tracking
</a></li>

                            <li><a href="#"><i class="fa fa-square"></i>Client Portal
</a></li>

                            <li><a href="#"><i class="fa fa-square"></i> Powerful Workflow</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footerNav jb_cover footer_border_displ">
                        <h5>browse</h5>
                        <ul class="nav-widget">

                            <li><a href="#"><i class="fa fa-square"></i>Freelancers by Category</a></li>

                            <li><a href="#"><i class="fa fa-square"></i> Freelancers in USA </a></li>

                            <li><a href="#"><i class="fa fa-square"></i> Freelancers in UK</a></li>

                            <li><a href="#"><i class="fa fa-square"></i> Freelancers in Canada</a></li>
                            <li><a href="#"><i class="fa fa-square"></i> Freelancers in india</a></li>
                            <li><a href="#"><i class="fa fa-square"></i> find jobs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footerNav jb_cover footer_border_displ">
                        <h5>app & integration</h5>
                        <ul class="nav-widget">
                            <li>
                                <a href="#"><img src="{{asset('images/ft1.png')}}" alt="img">Xero
                                </a>
                            </li>

                            <li>
                                <a href="#"><img src="{{asset('images/ft2.png')}}" alt="img">Reckon
                                </a>
                            </li>

                            <li>
                                <a href="#"><img src="{{asset('images/ft3.png')}}" alt="img">Flexidocs
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('images/ft4.png')}}" alt="img">Microsoft Exchange</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('images/ft5.png')}}" alt="img"> Mailchimp
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('images/ft6.png')}}" alt="img"> MYOB
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="copyright_left"><i class="fa fa-copyright"></i> 2019 <a href="#">  JB desks.  </a> All Rights Reserved.
                </div>

                <div class="clearfix"></div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
        <div class="waveWrapper waveAnimation">
            <div class="waveWrapperInner bgTop gradient-color">
                <div class="wave waveTop"></div>
            </div>
            <div class="waveWrapperInner bgMiddle">
                <div class="wave waveMiddle"></div>
            </div>
            <div class="waveWrapperInner bgBottom">
                <div class="wave waveBottom"></div>
            </div>
        </div>

    </div>

    <!-- footer Wrapper End -->
    <!-- chat box Wrapper start -->
    <div id="chat-circle" class="btn btn-raised">
        <i class="fas fa-comment-alt"></i>
    </div>
    <div class="chat-box">
        <div class="chat-box-header">
            ChatBot
            <span class="chat-box-toggle"><i class="fas fa-times"></i></span>
        </div>
        <div class="chat-box-body">
            <div class="chat-box-overlay">
            </div>
            <div class="chat-logs">

            </div>
            <!--chat-log -->
        </div>
        <div class="chat-input">
            <form>
                <input type="text" id="chat-input" placeholder="Send a message..." />
                <button type="submit" class="chat-submit" id="chat-submit"><i class="fas fa-paper-plane"></i></button>
            </form>
        </div>
    </div>
    <!-- chat box Wrapper end -->
    <!--custom js files-->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/modernizr.js')}}"></script>
    <script src="{{asset('js/jquery.menu-aim.js')}}"></script>
    <script src="{{asset('js/plugin.js')}}"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/jquery.countTo.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('js/dropify.min.js')}}"></script>
    <script src="{{asset('js/jquery.inview.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <!-- custom js-->
</body>


<!-- Mirrored from webstrot.com/html/jbdesk/main_version/main_pages/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2019 12:01:27 GMT -->
</html>
