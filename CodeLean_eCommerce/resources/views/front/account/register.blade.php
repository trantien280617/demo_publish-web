@extends('front.layout.master')

@section('title','Register')

@section('body')
<!--Breadcrumd Section Begin-->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Register</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumd Section End-->


<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>Register</h2>
                    <form action="" method="post">
                        @csrf
                        <div class="group-input">
                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div class="group-input">
                            <label for="email">Email address *</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="group-input">
                            <label for="pass">Password *</label>
                            <input type="password" id="pass" name="password">
                        </div>
                        <div class="group-input">
                            <label for="con-pass">Confirm Password *</label>
                            <input type="text" id="con-pass" name="password_confignation">
                        </div>
                        <button type="submit" class="site-btn register-btn">Register</button>
                    </form>
                    <div class="switch-login">
                        <a href="./account/login" class="or-login">Or Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Register Section End-->
@endsection