@extends('front.layout.master')

@section('title','Contact')

@section('body')
<!--Breadcrumd Section Begin-->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Contact</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumd Section End-->


<!--Map Section Begin-->
<div class="map spad">
    <div class="container">
        <div class="map-inner">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d501726.251541797!2d106.69522764999999!3d10.754792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529292e8d3dd1%3A0xf15f5aad773c112b!2zSOG7kyBDaMOtIE1pbmgsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaA!5e0!3m2!1svi!2s!4v1662784828413!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <div class="icon">
                <i class="fa fa-map-maker"></i>
            </div>
        </div>
    </div>
</div>
<!--Map Section End-->


<!--Contact Section Begin-->
<section class="contact-section spad">
    <section class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-title">
                    <h4>Contacts Us</h4>
                    <p>Contry to popular belief, lorem ipsum is simply random text. It has roots in a priece of classical Latin Literature from 45BC,maki years old.</p>
                </div>
                <div class="contact-widget">
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-location-pin"></i>
                        </div>
                        <div class="ci-text">
                            <span>Address</span>
                            <p>Hồ Chí Minh</p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-moblie"></i>
                        </div>
                        <div class="ci-text">
                            <span>Phone</span>
                            <p>+84 00.00.00.000</p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-email"></i>
                        </div>
                        <div class="ci-text">
                            <span>Email</span>
                            <p>tratran15062001@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-ld-1">
                <div class="contact-form">
                    <div class="leave-comment">
                        <h4>Leave Comment</h4>
                        <p>Our Staff will call back later and answer your question</p>
                        <form action="#" class="comment-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Your Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Your Email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Your Message"></textarea>
                                    <button type="submit" class="site-btn">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!--Contact Section End-->
@endsection