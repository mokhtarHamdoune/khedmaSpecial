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
                    <form class="login_form_wrapper signup_wrapper" action="{{ route('login') }}" method="POST" >
                        @csrf
                        <h2>Log in</h2>
                        @if (session('user'))
                            <div class="alert alert-warning">
                                <span class="" role="alert">
                                    <strong>
                                        {{ session('user') }}
                                    </strong>
                                </span>
                            </div>
                        @endif

                        <div class="form-row justify-content-around">
                            <label for="candidat"><input type="radio" name="role" class="form-control role" value="candidate" checked><span style="font-size:1.7em">cadidat</span></label>
                            <label for="employer"><input type="radio" name="role"  class="form-control role" value="employer"><span style="font-size:1.7em">employer</span></label>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group icon_form comments_form">
                            <input type="email" class="form-control @error('email') is-invalid @enderror require" name="email" placeholder="exemple@mail.com" value="{{old('email')}}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <i class="fas fa-user"></i>
                        </div>

                        <div class="form-group icon_form comments_form">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror require" placeholder="Password *">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <i class="fas fa-lock"></i>
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
