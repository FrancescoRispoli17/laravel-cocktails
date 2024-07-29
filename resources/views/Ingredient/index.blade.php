@extends('layouts.app')

@section('page-title')
Ingredients
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

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Modifica</th>
                    <th scope="col">Cancella</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ingredients as $ingredient)
                <tr>
                    <th scope="row">{{$ingredient->id}}</th>
                    <td>{{$ingredient->name}}</td>
                    <td><button class="btn btn-primary"> Modifica</button></td>
                    <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#{{$ingredient->id}}"> Cancella</button>
                          <div class="modal fade" id="{{$ingredient->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                  <form action="{{route('ingredients.destroy',$ingredient)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Cancella</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection