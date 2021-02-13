@extends('layouts.app')
@section('title','Contact US | Triple A')
@section('content')
<div class="AboutContainer">
    <div class="abouImage">
        <img src="{{asset('images/aboutImage.jpg')}}" alt="">
        <h1>Contact US</h1>
    </div>
    <div class="contactContent">
        <section class="getInTouch">
            <h1>Get in Touch</h1>
            <form action="">
                <input type="text" placeholder="Name">
                <input type="text" name="" id="" placeholder="Phone">
                <input type="email" name="" id="" placeholder="E-mail">
                <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                <section>
                <button>Send</button>
                </section>
            </form>
        </section>
        <section class="ourHeadOffice">
            <h1>Our Manger</h1>
            <section>
                <img src="{{asset('SVG/location.svg')}}" alt="">
                <h3> Tanta, Gharbia Governorate, Egypt</h3>
            </section>
            <section>
                <img src="{{asset('SVG/phone.svg')}}" alt="">
                <h3> Manger | 01123283221</h3>
            </section>
            <section>
                <img src="{{asset('SVG/phone.svg')}}" alt="">
                <h3> Delivery | 01123283221</h3>
            </section>
            <section>
                <img src="{{asset('SVG/email.svg')}}" alt="">
                <h3> triplea@gmail.com</h3>
            </section>

        </section>
    </div>
</div>
@endsection