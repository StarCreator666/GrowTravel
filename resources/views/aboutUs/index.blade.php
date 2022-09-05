@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">

<div class="jumbotron" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(../images/bg-cars.jpg) no-repeat;    background-size: cover;
    background-attachment: fixed;">
    <h1>About GTI</h1>
</div>
<section class="best-sell">

    <h1 class="heading" style="color:black; font-weight:700;">Travel Is About The Human Connection</h1>
    <h2 class="heading" style="font-size: 2.2rem">WE ARE GROWIN TRAVEL</h2>
    <section class="main-desciption" style="text-align: center; font-size:17px;">
        <p>Travel like a human. The human part was always more important than the travel part. What we are about is belonging, and at the center of belonging is love.</p>

           <p>Over the past 10 years, the team at Tour Mount Bromo has always believed in building that relationship with each customers to turn every trip into a memorable experience. It is the human connection that separates a tour/trip and an experience to remember.</p>
            
           <p>We value and love every teammate and we help them to succeed in every way that we can. It is only through being truly passionate , knowledgeable and focused that we can do the best for our customers.</p> 
    </section>

    <div class="box-container" style="margin:2%;height:70vh; background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(../images/about-1.jpg) no-repeat;    background-size: cover;">
        <center><h1>Real Connection</h1></center>
    </div>

</section>

<section class="best-sell" >

    <h1 class="heading" style="color:black; font-weight:700;">What GrowIn Travel offers</h1>
    <h2 class="heading" style="font-size: 2.2rem">We don't just offer you a tour. We offer you a unique experience</h2>
    <section class="main-desciption" style="text-align: center; font-size:16px; padding-top:0; ">
        <p>We understand that holidays are times when folks want to rest, relax and unwind.</p>

           <p>So, we make your holiday experience stress-free by taking care of all your travel needs and ensuring your experience is enjoyable one.</p>
    </section>
    <div class="box-container">
        <div class="box">
            <img src="{{ asset('images/offer-1.png') }}" class="offer-img" style="border-radius: 0% " alt="">
            <h3 class="h-offer">Experienced guides</h3>
            <p class="p-offer">know each area with impeccable familiarity</p>
        </div>
        <div class="box">
            <img src="{{ asset('images/offer-2.png') }}" class="offer-img" style="border-radius: 0%" alt="">
            <h3 class="h-offer">Flexible cancellation</h3>
            <p class="p-offer">seamless & safe booking with no hidden fees</p>
        </div>
        <div class="box">
            <img src="{{ asset('images/offer-3.png') }}" class="offer-img" style="border-radius: 0%" alt="">
            <h3 class="h-offer">Guide tips</h3>
            <p class="p-offer">we offer personal guide tips just for you</p>
        </div>
        <div class="box">
            <img src="{{ asset('images/offer-4.png') }}" class="offer-img" style="border-radius: 0%" alt="">
            <h3 class="h-offer">All tour types</h3>
            <p class="p-offer">every one can find suitable tours with us</p>
        </div>
        <div class="box">
            <img src="{{ asset('images/offer-5.png') }}" class="offer-img" style="border-radius: 0%" alt="">
            <h3 class="h-offer">Local experience</h3>
            <p class="p-offer">travel as a local and visit unique attractions</p>
        </div>
        <div class="box">
            <img src="{{ asset('images/offer-6.png') }}" class="offer-img" style="border-radius: 0%" alt="">
            <h3 class="h-offer">Made itineraries</h3>
            <p class="p-offer">are crafted, tested and proven by us</p>
        </div>
    </div>

    <div class="box-container-pink">
        <div class="box-pink">
            <img src="{{ asset('images/best-1.png') }}" class="offer-img" style="border-radius: 0% " alt="">
            <h3 class="h-best">Travel in post-COVID19 world</h3>
            <p class="p-best">Travel is not going to be the same in Post COVID19 world. The health and wellbeing of our guests, team members and all who are on our tours are Tour Mount Bromo’s highest priority. </p>
        </div>
        <div class="box-pink">
            <img src="{{ asset('images/best-2.png') }}" class="offer-img" style="border-radius: 0%" alt="">
            <h3 class="h-best">Our commitment to your well-being</h3>
            <p class="p-best">We follow World Health Organisation (WHO) guidelines to ensure the appropriate disinfectant are used during the journey and in the hotel rooms. To reduce exposure to COVID19 risks. </p>
        </div>
        <div class="box-pink">
            <img src="{{ asset('images/best-3.png') }}" class="offer-img" style="border-radius: 0%" alt="">
            <h3 class="h-best">Flexible booking policy</h3>
            <p class="p-best">We know plans change, which is why we make sure those hard-earned funds are protected. From 1st June 2020, we have a flexible 100% refund policy for Covid19 related cancellations. </p>
        </div>
    </div>
    
    <h1 class="heading" style="color:black; font-weight:700; margin-top:50px;">We are here to assist you with your trip</h1>
    <h2 style="font-weight: 300; font-size:17px; text-align:center;">Travel is back and our contact centers are busier than ever. You can call us for faster and more convenient responses.</h2>
    <div class="box-container" style="padding-right:2%; padding-left:3%; margin-top:4%; ">
        <div class="box">
            <img src="{{ asset('images/kontak-1.png') }}" class="kontak-image" style="border-radius: 0%; " alt="">
            <h3 class="h-offer">Live Chat via WhatsApp</h3>
            <p class="p-kontak">+65 8888 9999</p>
        </div>
        <div class="box">
            <img src="{{ asset('images/kontak-2.png') }}" class="kontak-image" style="border-radius: 0%" alt="">
            <h3 class="h-offer">Email Us</h3>
            <p class="p-kontak">hello@example.com</p>
        </div>
        <div class="box">
            <img src="{{ asset('images/kontak-3.png') }}" class="kontak-image" style="border-radius: 0%" alt="">
            <h3 class="h-offer">Call Us</h3>
            <p class="p-kontak">+65 8888 9999</p>
        </div>
        <div class="box">
            <img src="{{ asset('images/kontak-4.png') }}" class="kontak-image" style="border-radius: 0%" alt="">
            <h3 class="h-offer">Follow Us on Facebook</h3>
            <p class="p-kontak">for promotions</p>
        </div>
        <div class="box">
            <img src="{{ asset('images/kontak-5.png') }}" class="kontak-image" style="border-radius: 0%" alt="">
            <h3 class="h-offer">Follow Us on Instagram</h3>
            <p class="p-kontak">for latest infos</p>
        </div>
    </div>


</section>
<div class="map" style="height: 60vh; background: rgba(255,206,236,0.5);">
    <div class="left">
        <h1>Locate Us</h1>
        <h3>Indonesia Office:</h3>
        <h3>Level 3, TripleOne Somerset 111 Somerset Road, Singapore 238164 (Please call us first before visiting)</h3>
    </div>
    <div class="right">dsad</div>
</div>
@endsection