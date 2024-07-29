@extends('layouts.app')

@section('page-title')
    Cocktails
@endsection

@section('main')
<div class="container">
    <div >
        <a href="{{route('cocktails.index')}}" class="w-100 btn btn-secondary my-2">Torna a lista cocktails</a>

        <div class="d-flex justify-content-between">
            
        <h1 class="text-uppercase">{{$cocktail->nome}}</h1>
        <h1>Prezzo:{{$cocktail->prezzo}}€</h1>
        </div>
        <div class="w-100 px-auto"> 
            <img src="https://res.cloudinary.com/hv9ssmzrz/image/fetch/c_fill,f_auto,q_auto/https://s3-eu-west-1.amazonaws.com/images-ca-1-0-1-eu/recipe_photos/slide/205750/sex_on_the_beach_cocktail.jpg" alt="">
        </div> 
        <div class="info">
            <div class="d-flex justify-content-between">
            <h3>Ingredienti:</h3>
            <h3>Tasso alcolemico: {{$cocktail->tasso_alcolico}}% </h3>
            </div>
            <!-- <p>{{$cocktail->ingredienti}}</p> -->
            <h3>Descrizione:</h3>
            <p>{{$cocktail->descrizione}}</p>

        </div>   
        
    </div>
</div>
@endsection