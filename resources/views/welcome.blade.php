@extends('layouts.app')
@section('title','HOME | Triple A')
@section('content')
<div class="background">
    <img src="{{asset('images/backImage.jpg')}}" alt="">
</div>
<div class="welcomeContainer">


<div class="welcomeViewerContainer">
    <div class="welcomeViewerArrows">
        <span class="rightArrow">
            <img src="{{asset('SVG/arrow-right.svg')}}" alt="">
        </span>
        <span class="leftArrow">
            <img src="{{asset('SVG/arrow-left.svg')}}" alt="">
        </span>
    </div>
    <div class="welcomeViewer">
        
        <section>
            <img src="{{asset('images/img5.jpg')}}" alt="">
        </section>
        <section>
            <img src="{{asset('images/img4.jpg')}}" alt="">
        </section>
        <section>
            <img src="{{asset('images/img6.jpg')}}" alt="">
        </section>
    </div>
</div>
<div class="aboutPre">
    <section>
        <h2>
            With its Brazilian origin and Japanese heritage, the Mori Sushi brand has redefined sushi in all its restaurants across Egypt. Made with a recipe of passion and quality, 
            Mori Sushi began as a small and pioneering restaurant in São Paulo, making its way to the fine foods cravers of Egypt and Dubai to pamper their senses with the best Japanese cuisine in the region, continuing to surpass all culinary expectations. 
        </h2>
        <div><button><a href="about"><h3>Our Timeline</h3></a></button></div>
    </section>
    <section>
        <food-item itemName="RANSH" imgLink="{{asset('images/102.jpg')}}">

        </food-item>
        <food-item itemName="PHILO" imgLink="{{asset('images/101.jpg')}}" >

        </food-item>
        <food-item itemName="DONG TAO" imgLink="{{asset('images/104.jpg')}}" >

        </food-item>
        <food-item itemName="BIG FIRE" imgLink="{{asset('images/105.jpg')}}">

        </food-item>

        <button><a href="/menu"><h3>Our Menu</h3></a></button><div>
    </div>    </section>
    <section>
        <div class="textEreaContainer">
            <textarea name="" id="" cols="30" rows="10">

            </textarea>
        </div>
      <div>  <button><a href="">Feedback</a></button></div>
    </section>
</div>
</div>
@endsection