@extends('layouts.app')
@section('title','Menu | TripleA')
@section('content')
<div class="menuContainer">
    <img src="{{asset('images/aboutImage.jpg')}}" alt="">
    <div class="menuImage">
        <h1>Our Menu</h1>
        <h4>For Delivery</h4>
        <h4>01123283221</h4>
        <footer>
            <a href="">
                <section>
                    <img src="{{asset('images/aboutImage.jpg')}}" alt="">
                    <h5>chiken</h5>
                </section>
            </a>
            <a href="">
                <section>
                    <img src="{{asset('images/location.png')}}" alt="">
                    <h5>meals</h5>
                </section>
            </a>
            <a href="">
                <section>
                    <img src="{{asset('images/location.png')}}" alt="">
                    <h5>beaf</h5>
                </section>
            </a>
            <a href="">
                <section>
                    <img src="{{asset('images/location.png')}}" alt="">
                    <h5>kids</h5>
                </section>
            </a>
        </footer>
    </div>
</div>
@endsection