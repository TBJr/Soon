@extends('layouts.welcome')

@section('header')
    <div class="container d-flex flex-column align-items-center">
        <h1>Coming Soon</h1>
        <h2>Our website and portal are under construction and will soon be ready for launch.</h2>
        <div class="countdown d-flex justify-content-center" data-count="2021/12/5">
            <div>
                <h3>%d</h3>
                <h4>Days</h4>
            </div>
            <div>
                <h3>%h</h3>
                <h4>Hours</h4>
            </div>
            <div>
                <h3>%m</h3>
                <h4>Minutes</h4>
            </div>
            <div>
                <h3>%s</h3>
                <h4>Seconds</h4>
            </div>
        </div>

        <div class="subscribe">
            <h4>Subscribe now to get the latest updates!</h4>
            <form action="{{ route('newsletter') }}" method="POST" class="php-email-form">
                @csrf

                <div class="subscribe-form">
                    <input type="email" name="email"><input type="submit" value="Subscribe">
                </div>
            </form>
        </div>

        <div class="social-links text-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
@endsection

@section('content')
    <section id="about" class="about">
        <div class="container">
            <div class="row content">
                <div class="col-lg-6">
                    <h2>LUX DENTAL CLINIC</h2>
                    <h3>One of the best dental clinic in The Gambia.</h3>
                    <p>
                        We at Lux Dental Clinic have consultants under both general as well as cosmetic dentistry, who cater to every need related to dental care.
                        Please find below a list of services the we provide.
                    </p>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">

                    <ul>
                        <li><i class="bi bi-check"></i> Replacement of missing teeth. (e.g. <b>dental implants</b>, <b>fixed caps or bridges</b>, <b>removable dentures</b>, etc..)</li>
                        <li><i class="bi bi-check"></i> Cavity Filling. (<b> Depending on need and circumstance of the patient</b>)</li>
                        <li><i class="bi bi-check"></i> Teeth Whitening / Bleaching.</li>
                        <li><i class="bi bi-check"></i> Single Sitting Root Canal Treatment.</li>
                        <li><i class="bi bi-check"></i> Orthodontic Treatment.</li>
                        <li><i class="bi bi-check"></i> Extraction Procedures.</li>
                        <li><i class="bi bi-check"></i> Cleaning and Polishing</li>
                        <li><i class="bi bi-check"></i> Cosmetic Procedures.</li>
                    </ul>
                    <p class="fst-italic">
                        We understand how some patients, especially, may feel anxious before a treatment or precedure, and may even refuse to
                        co-operate. In consideration of this, we also offer all our dental treatments under concious sedation, in a
                        single siting. This is carried out with extreme care and admission to a hospital us not required.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="info-wrap">
                        <div class="row">
                            <div class="col-lg-4 info">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>54 Kairaba Avenue<br>Opp. American Embassy</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>
                                    backendbackbonner@outlook.com<br>
                                </p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 (551) 340-5856 <br>+220 712-2989</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <form action="{{ route('contactUs') }}" method="POST" class="php-email-form">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>

                            <div class="form-group d-none">
                                <input type="text" class="form-control" name="first_name">
                                <div class="validate"></div>
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>

                        <div class="form-group mt-3">
                            <textarea type="text" class="form-control" name="messages" id="messages" rows="5" placeholder="Message" required></textarea>
                        </div>

                        <!-- <div class="form-check form-group ps-0">
                            <input id="privacy-policy" type="checkbox" name="privacy" value="accept" required>
                            <label class="form-check-label ps-1" for="privacy-policy">
                                Accept our <a href="terms.html">terms of service</a> and <a href="privacy.html">privacy policy</a>
                            </label>
                        </div> -->

                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>

                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
