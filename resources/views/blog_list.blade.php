@extends('layouts.main')

@section('content')
    <div class="container mt-5 pt-3">
        <div class="text-center mb-5">
            <h1 class="under-line">Blog</h1>
            <p>Dapatkan informasi dan update seputar project yawadvipa di blog kami.</p>
        </div>
        <div class="row mb-3">
            <div class="col-lg-6">
                <img src="{{ asset('assets/files/pictures/blog/marmut.jpeg') }}" class="rounded img-fluid d-block mx-auto" alt="">
            </div>
            <div class="col-lg-6">
                <h1 class="text-uppercase under-line-heading-blog pb-3">mari mudik reels & photo contest 2022</h1>
                <p class="text-justify pb-3">mari mudik reels & photo contest 2022 adalah kompetesi yang diadakan oleh svcc 4-1 dalam rangka .....</p>
                <a href="" type="button" class="btn fw-bold d-flex align-items-center" id="button-mod" style="width: 170px">
                    <span class="pe-3">Selengkapnya</span>
                    <i class="bi bi-arrow-right-circle" style="font-size: 24px"></i>
                </a>
            </div>
        </div>
    </div>
@endsection
