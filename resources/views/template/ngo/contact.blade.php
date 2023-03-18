@extends('template.ngo.include.master')


@section('content')
@include('template.ngo.include.slider')

<section class="w3l-contact-7 py-5" id="contact">
    <div class="contacts-9 py-lg-5 py-md-4">
        <div class="container">
            <div class="top-map">
                <div class="row map-content-9">
                    <div class="col-lg-8">
                        <h3 class="title-big">Send us a Message</h3>
                        <p class="mb-4 mt-lg-0 mt-2">Your email address will not be published. Required fields are marked *</p>
                        <form action="{{ route('contactmessage.store') }}" method="post" class="text-right">
                            @csrf
                            <div class="form-grid">
                                <input type="text" name="name" id="name" placeholder="Name*" required="">
                                @error('name')
                            	<span class="error text-red">{{ $message }}</span>
                        	    @enderror
                                <input type="email" name="email" id="email" placeholder="Email*" required="">
                                <input type="text" name="phone" id="phone" placeholder="Phone number*"
                                    required="">
                                <input type="text" name="subject" id="subject" placeholder="Subject">
                            </div>
                            <textarea name="message" id="message" placeholder="Message"></textarea>
                            <button type="submit" class="btn btn-primary btn-style mt-3">Send Message</button>
                        </form>
                    </div>
                    <div class="col-lg-4 cont-details">
                        <address>
                            <h5 class="">Contact Address</h5>
                            <p><span class="fa fa-map-marker"></span>ka-147/1/1, Khilkhet, Dhaka-1229</p>
                            <p> <a href="mailto:jufoundation.bd@gmail.com"><span
                                        class="fa fa-envelope"></span>jufoundation.bd@gmail.com</a></p>
                            <p><span class="fa fa-phone"></span><a href="tel:+88-01827-510787"> +88-01827-510787</a></p>
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
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233605.6819184073!2d90.2819396385011!3d23.815441856538804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka%2C%20Bangladesh!5e0!3m2!1sen!2sin!4v1679139987210!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

@endsection