@extends('layouts.app')

@section('page-title')
    Cocktails
@endsection

@section('main')
<div class="container py-5">
    <div class="row">
        <div class="col-12 mb-4">
            <h1>Lista Cocktails</h1>
            <a href="{{route('cocktails.create')}}" class="btn btn-primary">Crea nuovo</a>
            @if (session('message'))
                    <div class="alert alert-success my-3">
                        {{ session('message') }}
                    </div>
                @endif
        </div>
            @foreach ($cocktails as $cocktail)
                {{-- <li><a href="{{route('cocktails.show',$cocktail)}}">{{$cocktail->nome}}</a></li>
                <li>€{{$cocktail->prezzo}}</li> --}}
                <div class="col-auto my-3">
                    <div class="card" style="width: 18rem;">
                        @if (0)
                        <img src="#" class="card-img-top" alt="#">
                        @endif
                        <div class="card-body">
                          <h5 class="card-title">{{$cocktail->nome}}</h5>
                          <p class="card-text">€{{$cocktail->prezzo}}</p>
                          <a href="{{route('cocktails.show',$cocktail)}}" class="btn btn-info">Info</a>
                          <a href="{{route('cocktails.edit',$cocktail)}}" class="btn btn-primary">Modifica</a>
                          <form action="{{route('cocktails.destroy',$cocktail)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Cancella</button>
                          </form>
                        </div>
                    </div>
                </div>

            @endforeach
    </div>
</div>
@endsection