@extends("layout.header_wrapper")
@section("body")
<div class="login_wrapper jb_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 p-5">
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

                    <form class="login_form_wrapper signup_wrapper" method="POST" action="{{ route('sign_up') }}">
                        @csrf
                        <h2>sign up</h2>
                        <div class="form-row justify-content-around role_container" >
                            <label for="condidat"><input type="radio" name="role" class="form-control role" value="candidate" checked><span>Candidate</span></label>
                            <label for="employer"><input type="radio" name="role"  class="form-control role" value="employer"><span>Employer</span></label>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @if (session('error'))
                                <div class="alert alert-warning">
                                    <span class="" role="alert">
                                        <strong>
                                            {{ session('error') }}
                                        </strong>
                                    </span>
                                </div>
                            @endif
                        </div>
                        <div class="form-group icon_form comments_form">
                            <input type="text" class="form-control require" name="name" placeholder="Full Name*">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <i class="fas fa-user"></i>
                        </div>

                        <div class="form-group icon_form comments_form">
                            <input type="email" class="form-control require" name="email" placeholder="Email Address*">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="form-group icon_form comments_form">
                            <input type="password" name="password" class="form-control require" placeholder="Password *">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
