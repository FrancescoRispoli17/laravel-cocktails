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
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control @if ($errors->get('nome')) is-invalid @endif" id="exampleFormControlInput1" name="nome" value="{{ old('nome') }}">
                @if ($errors->get('nome'))
                    <div class="invalid-feedback">
                        @foreach ($errors->get('title') as $error )
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">prezzo</label>
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