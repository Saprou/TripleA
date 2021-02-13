@extends('layouts.app')
@section('title','Visit Us | TripleA')
@section('content')
<div class="AboutContainer">
    <div class="abouImage">
        <img src="{{asset('images/location.png')}}" alt="">
        <h1>Visit US</h1>
    </div>
    <div class="aboutContent">
        <section>
            <h4>We are located in Tanta, Gharbia Governorate, Egypt</h4>
            <h4 style="direction: rtl">موقعنا: طنطا شارع الاستاد امام شارع 306</h4>
            <a href="https://www.google.com/maps/dir/?api=1&destination=30.817484466037%2C30.992259979248&fbclid=IwAR3uwRAOybncEzZt_4TUcFEDvVHlv2eys4CBG2uyaLKWHTcPXNMq2S72lIk" target="blank">
                <img src="{{asset('images/locationIcon.png')}}" style="height:50px;">
                <h2 style="color:#ff9100">Triple A location</h2>
            </a>
        </section>
    </div>
</div>
@endsection
