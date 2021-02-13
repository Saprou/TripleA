@extends('layouts.app')
@section('title'.'')
@section('content')
<div class="itemContainer">
    <section>
        <h1>Gradients</h1>
    
        <h1>{{$name}}</h1>
    
    </section>
    <div>
            <div class="itemGrad">
                @foreach ($items as $item)
                <section>
                    <img src="{{asset('images/itemArrow3D.png')}}" alt="">
                    <h2>{{$item}}</h2>
                    <img src="{{asset('images/itemArrow3D2.png')}}" alt="">
                </section>
                @endforeach
            </div>
            <div class="itemImage">
                <img src="{{asset('items/'.$id.'.jpg')}}" alt="">
            </div>
    </div>
    <form action="">
        <button>ORDER</button>
    </form>
</div>

@endsection