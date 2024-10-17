{{-- estendo la pagina ad app --}}
@extends('layouts.app')

{{-- nello yield collego il titolo con la sezione --}}
@section('page-title', '| Comics')

@section('main-content')

    {{-- sezione jumbo + fumetti --}}
    <section  class="bg-black">

        <div class="jumbo"> </div>

        <div class="myContainer product-container pt-5 pb-4 text-center">

            <div class="section-label py-2 px-3 fw-bold fs-4">
                CURRENT SERIES
            </div>
  
            <div class="row">

                {{-- ciclo per leggere tutti i fumetti --}}
                @foreach ($comics as $comic)
  
                    <div class="col-2 mb-5 text-start">
        
                        <!-- immagine -->
                        <div class="img-container mb-3">
                            <img src="{{ $comic['thumb']}}" :alt="{{ $comic['title']}}">
                        </div>
                        <!-- titolo -->
                        <div class="text-white">
                            {{ $comic['title']}}
                        </div>
    
                    </div>

              @endforeach
  
            </div>
  
            <div>
              <button class="load-more-button py-2 px-5 fw-bold">
                LOAD MORE
              </button>
            </div>
  
        </div>

    </section>

    {{-- sezione banner blu --}}
    <section class="bg-blue">
        <div class="myContainer">

            <ul class="mb-0 py-4">
                @foreach ($iconLinks as $item)
                <li>
                    <a href="#" class="d-flex align-items-center">
                        <img class="product-img m-2" src="{{$item['img']}}" alt="{{$item['name']}}">
                        <span class="text-white product-text">
                            {{$item['name']}}
                        </span>
                    </a>
                </li>
                    
                @endforeach
            </ul>

        </div>
    </section>

@endsection
