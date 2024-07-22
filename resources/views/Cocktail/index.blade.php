@extends('layouts.app')

@section('page-title')
    Cocktails
@endsection

@section('main')
<div class="container">
    <div class="row">
        <ul>
            @foreach ($cocktails as $cocktail)
                {{-- <li><a href="{{route('cocktails.show',$cocktail)}}">{{$cocktail->nome}}</a></li>
                <li>€{{$cocktail->prezzo}}</li> --}}

            @endforeach
        </ul>
    </div>
</div>
@endsection