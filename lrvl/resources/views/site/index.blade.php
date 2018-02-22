<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 09.01.18
 * Time: 14:22
 */
?>
@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

<!-- Section: intro -->
<section id="intro" class="intro">

    <div class="slogan">
        <h2>WELCOME TO <span class="text_color">Stretch ON</span> </h2>
        <h4>Ваш персональный тренер по растяжке</h4>
    </div>
    <div class="page-scroll">
        <a href="#service" class="btn btn-circle">
            <i class="fa fa-angle-double-down animated"></i>
        </a>
    </div>
</section>
<!-- /Section: intro -->

<!-- Section: about -->
<section id="about" class="home-section text-center">
    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                        <div class="section-heading">
                            <h2>About us</h2>
                            <i class="fa fa-2x fa-angle-down"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
        <!--  <div class="row">
              <div class="col-md-3">
                  <div class="wow bounceInUp" data-wow-delay="0.2s">
                  <div class="team boxed-grey">
                      <div class="inner">
                          <h5>Anna Hanaceck</h5>
                          <p class="subtitle">Pixel Crafter</p>
                          <div class="avatar"><img src="img/team/1.jpg" alt="" class="img-responsive img-circle" /></div>
                      </div>
                  </div>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="wow bounceInUp" data-wow-delay="0.5s">
                  <div class="team boxed-grey">
                      <div class="inner">
                          <h5>Maura Daniels</h5>
                          <p class="subtitle">Ruby on Rails</p>
                          <div class="avatar"><img src="img/team/2.jpg" alt="" class="img-responsive img-circle" /></div>
                      </div>
                  </div>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="wow bounceInUp" data-wow-delay="0.8s">
                  <div class="team boxed-grey">
                      <div class="inner">
                          <h5>Jack Briane</h5>
                          <p class="subtitle">jQuery Ninja</p>
                          <div class="avatar"><img src="img/team/3.jpg" alt="" class="img-responsive img-circle" /></div>
                      </div>
                  </div>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="wow bounceInUp" data-wow-delay="1s">
                  <div class="team boxed-grey">
                      <div class="inner">
                          <h5>Tom Petterson</h5>
                          <p class="subtitle">Typographer</p>
                          <div class="avatar"><img src="img/team/4.jpg" alt="" class="img-responsive img-circle" /></div>
                      </div>
                  </div>
                  </div>
              </div>
          </div>	-->
    </div>
</section>
<!-- /Section: about -->


<!-- Section: services -->
<section id="service" class="home-section text-center bg-gray">

    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                        <div class="section-heading">
                            <h2>Our Services</h2>
                            <i class="fa fa-2x fa-angle-down"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
        <!--        <div class="row">
                    <div class="col-md-3">
                        <div class="wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="service-box">
                            <div class="service-icon">
                                <img src="img/icons/service-icon-1.png" alt="" />
                            </div>
                            <div class="service-desc">
                                <h5>Print</h5>
                                <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-box">
                            <div class="service-icon">
                                <img src="img/icons/service-icon-2.png" alt="" />
                            </div>
                            <div class="service-desc">
                                <h5>Web Design</h5>
                                <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-box">
                            <div class="service-icon">
                                <img src="img/icons/service-icon-3.png" alt="" />
                            </div>
                            <div class="service-desc">
                                <h5>Photography</h5>
                                <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="wow fadeInRight" data-wow-delay="0.2s">
                        <div class="service-box">
                            <div class="service-icon">
                                <img src="img/icons/service-icon-4.png" alt="" />
                            </div>
                            <div class="service-desc">
                                <h5>Cloud System</h5>
                                <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>	-->
    </div>
</section>
<!-- /Section: services -->




<!-- Section: contact -->
<section id="contact" class="home-section text-center">
    <div class="heading-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                        <div class="section-heading">
                            <h2>Get in touch</h2>
                            <i class="fa fa-2x fa-angle-down"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-lg-8">
                 <div class="boxed-grey">

                     <div id="sendmessage">Your message has been sent. Thank you!</div>
                     <div id="errormessage"></div>
                     <form id="contact-form" action="" method="post" role="form" class="contactForm">
                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="name">
                                     Name</label>
                                 <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                 <div class="validation"></div>
                             </div>
                             <div class="form-group">
                                 <label for="email">
                                     Email Address</label>
                                 <div class="form-group">
                                     <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                     <div class="validation"></div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="subject">
                                     Subject</label>
                                 <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                 <div class="validation"></div>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="name">
                                     Message</label>
                                 <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                 <div class="validation"></div>
                             </div>
                         </div>
                         <div class="col-md-12">
                             <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                                 Send Message</button>
                         </div>
                     </div>
                     </form>
                 </div>
             </div>-->

            <div class="col-lg-12">
                <div class="widget-contact">
                    <h5>Контакты</h5>

                    <address>
                        <!--				  <strong>Squas Design, Inc.</strong><br>
                                          Tower 795 Folsom Ave, Beautiful Suite 600<br>
                                          San Francisco, CA 94107<br>-->
                        <abbr title="Phone">Тел:</abbr> +38 (063) 060-98-10<br>
                        <abbr title="Phone">Тел:</abbr> +38 (095) 799-25-20<br>
                        <abbr title="Phone">Viber:</abbr> +38 (095) 799-25-20
                    </address>

                    <address>
                        <strong>Email</strong><br>
                        <a href="mailto:stretchon.kiev@gmail.com">stretchon.kiev@gmail.com</a>
                    </address>
                    <address>
                        <strong>We're on social networks</strong><br>
                        <ul class="company-social">
                            <li class="social-facebook"><a href="https://www.facebook.com/profile.php?id=100021653268591&fref=ts" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <!--<li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>-->
                            <li class="social-twitter"><a href="https://www.instagram.com/stretch.on/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <!--<li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>-->
                            <li class="social-google"><a href="https://plus.google.com/u/1/111624530438960933580" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <!--<li class="social-google"><a href="#" target="_blank"><i class="fa fa-"></i></a></li>-->
                        </ul>
                    </address>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- /Section: contact -->
{{--<h1>index site page</h1>--}}

@endsection
