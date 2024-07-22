@extends('layouts.app')

@section('page-title')
    Cocktails
@endsection

@section('main')
<div class="container py-5">
    <div class="row">
        <div class="col-12 mb-5">
            <h1>Lista Cocktails</h1>
            <a href="{{route('cocktails.create')}}" class="btn btn-primary">Crea nuovo</a>
        </div>
            @foreach ($cocktails as $cocktail)
                {{-- <li><a href="{{route('cocktails.show',$cocktail)}}">{{$cocktail->nome}}</a></li>
                <li>€{{$cocktail->prezzo}}</li> --}}
                <div class="col-auto">
                    <div class="card" style="width: 18rem;">
                        @if (0)
                        <img src="#" class="card-img-top" alt="#">
                        @endif
                        <div class="card-body">
                          <h5 class="card-title">{{$cocktail->nome}}</h5>
                          <p class="card-text">€{{$cocktail->prezzo}}</p>
                          <a href="{{route('cocktails.show',$cocktail)}}" class="btn btn-info">Info</a>
                          <a href="#" class="btn btn-primary">Modifica</a>
                          <a href="#" class="btn btn-danger">Cancella</a>
                        </div>
                    </div>
                </div>

            @endforeach
    </div>
</div>
@endsection