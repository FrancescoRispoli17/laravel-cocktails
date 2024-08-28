@extends('layouts.app')

@section('page-title')
    Cocktails
@endsection

@section('main')
<div class="container py-5">
    <div class="row">
        <form action="{{ route('cocktails.store') }}" method="POST" class="mt-5">
            @csrf
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="text" class="form-control @if ($errors->get('nome')) is-invalid @endif" id="exampleFormControlInput1" name="nome" value="{{ old('nome') }}">
                @if ($errors->get('nome'))
                    <div class="invalid-feedback">
                        @foreach ($errors->get('nome') as $error )
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
            </div>
            

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Strumenti utilizzati</label>
                <div>
                    @foreach ($ingredients as $ingredient)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="tec-{{ $ingredient->id }}" value="{{ $ingredient->id }}" name="ingredients[]" {{ in_array($ingredient->id, old('ingredients', [])) ? 'checked' : ' '}}>
                        <label class="form-check-label" for="tec-{{ $ingredient->id }}">{{ $ingredient->name }}</label>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tasso alcolico</label>
                <input type="number" class="form-control @if ($errors->get('tasso_alcolico')) is-invalid @endif" id="exampleFormControlInput1" name="tasso_alcolico" value="{{ old('tasso_alcolico') }}">
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
                <input type="text" class="form-control @if ($errors->get('descrizione')) is-invalid @endif" id="exampleFormControlInput1" name="descrizione" value="{{ old('descrizione') }}">
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
                <input type="number" class="form-control @if ($errors->get('prezzo')) is-invalid @endif" id="exampleFormControlInput1" name="prezzo" value="{{ old('prezzo') }}">
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