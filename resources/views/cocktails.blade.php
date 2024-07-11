@extends('layouts.app')

@section('page-title')
    Cocktails
@endsection

@section('main')
<div class="container">
    <div class="row">
        <div class="image-container mt-5 mx-auto  rounded-5 bg-secondary-subtle w-75 d-flex"> 

            <img class="w-50 " src="{{ Vite::asset('resources/img/coctails.png') }}" alt=""> 
                
            <div class="w-50 " >
                <h2>Cocktails name</h2>
                <div class="d-flex justify-content-between"><p>tasso alcolemico</p> <p>prezzo</p></div>
                <h4>Ingrediente 1</h4>
                <h4>Ingrediente 2</h4>
                <h4>Ingrediente 3</h4>
                <h4>Ingrediente 4</h4>
                
                <h5 class="mt-5">Descrizione </h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam labore soluta dicta quia id vitae ea quos incidunt. Quod voluptatibus in nulla dicta vero repellat assumenda amet aspernatur error! Optio!</p>
            </div>
        </div> 
    </div>
</div>
@endsection