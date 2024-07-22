@extends('layouts.app')

@section('page-title')
    Cocktails
@endsection

@section('main')
<div class="container py-5">
    <div class="row">
        <form action="{{ route('cocktails.update',$cocktail) }}" method="POST" class="mt-5">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="text" class="form-control @if ($errors->get('nome')) is-invalid @endif" id="exampleFormControlInput1" name="nome" value="{{ old('nome',$cocktail->nome) }}">
                @if ($errors->get('nome'))
                    <div class="invalid-feedback">
                        @foreach ($errors->get('nome') as $error )
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ingredienti</label>
                <input type="text" class="form-control @if ($errors->get('ingredienti')) is-invalid @endif" id="exampleFormControlInput1" name="ingredienti" value="{{ old('ingredienti',$cocktail->ingredienti) }}">
                @if ($errors->get('ingredienti'))
                    <div class="invalid-feedback">
                        @foreach ($errors->get('ingredienti') as $error )
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tasso alcolico</label>
                <input type="number" class="form-control @if ($errors->get('tasso_alcolico')) is-invalid @endif" id="exampleFormControlInput1" name="tasso_alcolico" value="{{ old('tasso_alcolico',$cocktail->tasso_alcolico) }}">
                @if ($errors->get('tasso_alcolico'))
                    <div class="invalid-feedback">
                        @foreach ($errors->get('tasso_alcolico') as $error )
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Descrizione</label>
                <input type="text" class="form-control @if ($errors->get('descrizione')) is-invalid @endif" id="exampleFormControlInput1" name="descrizione" value="{{ old('descrizione',$cocktail->descrizione) }}">
                @if ($errors->get('descrizione'))
                    <div class="invalid-feedback">
                        @foreach ($errors->get('descrizione') as $error )
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Prezzo</label>
                <input type="sumber" class="form-control @if ($errors->get('prezzo')) is-invalid @endif" id="exampleFormControlInput1" name="prezzo" value="{{ old('prezzo',$cocktail->prezzo) }}">
                @if ($errors->get('prezzo'))
                    <div class="invalid-feedback">
                        @foreach ($errors->get('prezzo') as $error )
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>
</div>
@endsection