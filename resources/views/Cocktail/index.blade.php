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
                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#{{$cocktail->id}}"> Cancella</button>
                          <div class="modal fade" id="{{$cocktail->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Sicuro di voler procedere?</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  Non sarà più possibile recuperare il record
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                                  <form action="{{route('cocktails.destroy',$cocktail)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Cancella</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>

            @endforeach
    </div>
</div>
@endsection