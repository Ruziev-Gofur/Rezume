@extends('rezume.layout.master')
@section('content')
    <section class="site-hero" style="background-image: url('{{asset('assets/images/image_1.jpg')}}')" id="section-home" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row intro-text align-items-center justify-content-center">
                <div class="col-md-10 text-center pt-5">

                    <h1 class="site-heading site-animate">Hello, I'm <strong class="d-block">Ruziev Gofur</strong></h1>
                    <strong class="d-block text-white text-uppercase letter-spacing">AND THIS IS MY REZUME</strong>

                </div>
            </div>
        </div>
    </section> <!-- section -->

    <section class="site-section " id="section-resume">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="section-heading text-center">
                        <h2>My <strong>Resume</strong></h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="mb-5">Education</h2>
                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> From 1999 to 2006.</span>
                        <h3>School No. 32</h3>
                        <p>Our school specialized in specific subjects had comfortable conditions, and the teachers of our school gave interesting lessons.</p>
                        <span class="school">Olaja village, Khanka district</span>
                    </div>

                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> From 2006 to 2008</span>
                        <h3>Boarding school</h3>
                        <p>Mathematics is based on computer science.</p>
                        <span class="school">Urgench city</span>
                    </div>

                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> From 2008 to 2011.</span>
                        <h3>Private tutor</h3>
                        <p>I studied mathematics, computer science, and physics in depth.</p>
                        <span class="school">Urgench city</span>
                    </div>

                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> From 2011 to 2015.</span>
                        <h3>Urgench Branch of Tashkent university of Information Technologies Named After Muhammad al-Khwarizmi</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <span class="school">Urgench city University</span>
                    </div>

                </div>
                <div class="col-md-6">

                    <h2 class="mb-5">Experience</h2>

                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> From 2012 to 2018</span>
                        <h3>Private tutor</h3>
                        <p>I worked as a mathematics tutor.</p>
                        <span class="school">Urgench city</span>
                    </div>

                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> From 2015 to 2018 </span>
                        <h3>Urganch College of Domestic Service</h3>
                        <p> Teacher of Urganch College of Domestic Service.</p>
                        <span class="school">Urgench city</span>
                    </div>

                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> From 2020 to 2022 </span>
                        <h3> PHP developer</h3>
                        <p> I learned HTML, CSS, PHP, Laravel, MySQL on my own, and at the same time I also mastered the English language.</p>
                        <span class="school">Urgench city</span>
                    </div>

                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> From 2022 to now</span>
                        <h3><a href="http://amusoft.uz/">AmuSoft</a></h3>
                        <p>You can contact us on any project where our team consists of experienced masters of their craft.</p>
                        <span class="school">Urgench city</span>
                    </div>

                </div>
            </div>
        </div>
    </section> <!-- .section -->

    <section class="site-section" id="section-about">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-7 pr-lg-5 mb-5 mb-lg-0">
                    <img src="{{asset('assets/images/image_1.jpg')}}" alt="Image placeholder" class="img-fluid">
                </div>
                <div class="col-lg-5 pl-lg-5">
                    <div class="section-heading">
                        <h2> <strong>About</strong> Me</h2>
                    </div>
                    <p class="lead">I was born in 1992 in the village of Olaja, Khanka District, Khorezim Region of the Republic of Uzbekistan.</p>
                    <p class="mb-5  ">I have been very interested in Mathematics since I was young, and I took prestigious places in the school olympiads. I also read fiction books, my hobby is watching detective movies..</p>

                    <p>
                        <a href="#section-contact" class="btn btn-primary px-4 py-2 btn-sm smoothscroll">Hire Me</a>
{{--                        <a href="#" class="btn btn-secondary px-4 py-2 btn-sm">Download CV</a>--}}
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="section-heading text-center">

    <section class="site-section" id="section-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="section-heading text-center">
                        <h2>Get <strong>In Touch</strong></h2>
                    </div>
                </div>

                <div class="col-md-7 mb-5 mb-md-0">
                    <form action="{{route('rezume.store')}}" method="POST" class="site-form">
                        @csrf
                        <h3 class="mb-5">Get In Touch</h3>
                        <div class="form-group">
                            <input type="text" name="name" id="name" required class="form-control px-3 py-4" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" id="email" required class="form-control px-3 py-4" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" required class="form-control px-3 py-4" placeholder="Your Phone ">
                        </div>
                        <div class="form-group mb-5">
                            <textarea type="text" name="message" id="message" required class="form-control px-3 py-4"cols="30" rows="10" placeholder="Write a Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary  px-4 py-3" value="Send Message">
                        </div>
                    </form>
                </div>
                <div class="col-md-5 pl-md-5">
                    <h3 class="mb-5">My Contact Details</h3>
                    <ul class="site-contact-details">
                        <li>
                            <span class="text-uppercase">Email</span>
                            <a href="mailto://gofur.ru92@gmail.com">gofur.ru92@gmail.com</a>
                        </li>
                        <li>
                            <span class="text-uppercase">Phone</span>
                            <a href="tel:">+998 99 189 9292</a>
                        </li>
                        <li>
                            <span class="text-uppercase">Address</span>
                            Uzbekiston Xorezm <br>
                            Olaja village <br>
                            Yagdu street, 47
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <p>
                    <a style="font-size: 40px; padding: 10px" href="https://www.facebook.com/gofur.ruziev" class="social-item"><span class="icon-facebook2"></span></a>
                    <a style="font-size: 40px; padding: 10px" href="https://www.instagram.com/gofur_ruziev/" class="social-item"><span class="icon-instagram2"></span></a>
                    <a style="font-size: 40px; padding: 10px" href="https://t.me/Gofur_ru" class="social-item"><span class="icon-telegram"></span></a>
                    <a style="font-size: 40px; padding: 10px" href="mailto://gofur.ru92@gmail.com" class="social-item"><span class="icon-email"></span></a>
                    <a style="font-size: 40px; padding: 10px" href="https://github.com/Ruziev-Gofur" class="social-item"><span class="icon-github2"></span></a>
                </p>
            </div>
        </div>

    </section>
@endsection
