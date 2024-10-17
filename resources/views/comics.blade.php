{{-- estendo la pagina ad app --}}
@extends('layouts.app')

{{-- nello yield collego il titolo con la sezione --}}
@section('page-title', '| Comics')

@section('main-content')

    <div class="row">

        {{-- ciclo per leggere tutti i fumetti --}}
        @foreach ($comics as $comic)

            <div class="col-2">
                <div>
                    <img src="{{ $comic['thumb']}}" :alt="{{ $comic['title']}}">
                </div>
                <h4>
                    {{ $comic['title']}}
                </h4>

            </div>
            
        @endforeach
    </div>

@endsection
