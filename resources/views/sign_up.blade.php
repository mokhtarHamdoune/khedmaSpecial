@extends("layout.header_wrapper")
@section("body")
<div class="login_wrapper jb_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="login_top_box jb_cover">
                    <div class="login_banner_wrapper">
                        <img src="{{asset('images/logo.png')}}" alt="logo">
                        <div class="header_btn search_btn facebook_wrap jb_cover">
                            <a href="#">login with facebook <i class="fab fa-facebook-f"></i></a>
                        </div>
                        <div class="header_btn search_btn google_wrap jb_cover">

                            <a href="#">login with pinterest <i class="fab fa-pinterest-p"></i></a>

                        </div>
                        <div class="jp_regis_center_tag_wrapper jb_register_red_or">
                            <h1>OR</h1>
                        </div>
                    </div>
                    <form class="login_form_wrapper signup_wrapper" method="POST" action="{{url($trait_url)}}">
                        @csrf
                        <h2>sign up</h2>
                            <div class="form-row justify-content-around">
                                <label for="condidat"><input type="radio" name="role" class="form-control role"  checked><span style="font-size:1.7em">cadidat</span></label>
                                <label for="employer"><input type="radio" name="role"  class="form-control role" ><span style="font-size:1.7em">employer</span></label>
                            </div>
                            <div class="form-group icon_form comments_form">
                                <input type="text" class="form-control require" name="name" placeholder="Full Name*">
                                <i class="fas fa-user"></i>
                            </div>
                        <div class="form-group icon_form comments_form">

                            <input type="email" class="form-control require" name="email" placeholder="Email Address*">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="form-group icon_form comments_form">
                            <input type="password" name="password" class="form-control require" placeholder="Password *">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="login_remember_box">
                            <label class="control control--checkbox">Remember me
                                <input type="checkbox">
                                <span class="control__indicator"></span>
                            </label>
                            <a href="#" class="forget_password">
                                Forgot Password
                            </a>
                        </div>
                        <button type="submit" class="btn jb_cover">Sign up</button>
                        <div class="dont_have_account jb_cover">
                            <p>Don’t have an acount ? <a href="login.html">login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
