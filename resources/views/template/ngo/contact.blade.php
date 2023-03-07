@extends('template.ngo.include.master')


@section('content')
<section class="w3l-contact-7 py-5" id="contact">
    <div class="contacts-9 py-lg-5 py-md-4">
        <div class="container">
            <div class="top-map">
                <div class="row map-content-9">
                    <div class="col-lg-8">
                        <h3 class="title-big">Send us a Message</h3>
                        <p class="mb-4 mt-lg-0 mt-2">Your email address will not be published. Required fields are marked *</p>
                        <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="text-right">
                            <div class="form-grid">
                                <input type="text" name="w3lName" id="w3lName" placeholder="Name*" required="">
                                <input type="email" name="w3lSender" id="w3lSender" placeholder="Email*" required="">
                                <input type="text" name="w3lPhone" id="w3lPhone" placeholder="Phone number*"
                                    required="">
                                <input type="text" name="w3lSubject" id="w3lSubject" placeholder="Subject">
                            </div>
                            <textarea name="w3lMessage" id="w3lMessage" placeholder="Message"></textarea>
                            <button type="submit" class="btn btn-primary btn-style mt-3">Send Message</button>
                        </form>
                    </div>
                    <div class="col-lg-4 cont-details">
                        <address>
                            <h5 class="">Contact Address</h5>
                            <p><span class="fa fa-map-marker"></span>235 Terry, 10001 20C Trolley Square, DE 19806 U.S.A. </p>
                            <p> <a href="mailto:info@example.com"><span
                                        class="fa fa-envelope"></span>info@example.com</a></p>
                            <p><span class="fa fa-phone"></span><a href="tel:+44-000-888-999"> +44-000-888-999</a></p>
                            <a href="donate.html" class="btn btn-style btn-outline-primary mt-4">
                                <span class="fa fa-heart mr-1"></span> Make Donation</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"
        frameborder="0" style="border:0" allowfullscreen=""></iframe>
</div>

@endsection