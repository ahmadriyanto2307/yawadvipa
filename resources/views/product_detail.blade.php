@extends('layouts.main')

@section('content')
    {{-- Start Jumbotron --}}
    <div class="p-5" id="jumbotron" style="background-image: url('{{ asset('assets/files/pictures/slider-bg-1.jpg') }}')">
        <div class="container py-5">

        </div>
    </div>>
    {{-- End Jumbotron --}}

    {{-- Start Our Service --}}
    <div class="rounded-3">
        <div class="container pb-5">
            <h2 class="text-center pb-3 under-line">360 Virtual Tour {{ $region }}</h2>
            <div class="row">
                @foreach ($product_list as $item)
                    <div class="col-lg-4 py-1 service">
                        <a href="{{ route('product_detail', [$item->id, $item->slug]) }}">
                            <img src="{{ asset('assets/files/pictures/SEMARANG.jpg') }}" class="rounded h-100 w-100 service-image" alt="...">
                            <div class="service-caption">
                                <div class="caption-text">
                                    <h2>{{ $item->name }}</h2>
                                    <h4>Virtual Tour 360</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- End Our Service --}}
@endsection
