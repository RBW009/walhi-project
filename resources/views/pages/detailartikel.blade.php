@extends('layouts.main')

@section('container')
<section id="detailartikel" class="pt-36">
    <div class="container">
    <div class="flex flex-wrap">
    {{-- Bagian Kanan --}}
    <div class="w-full self-center px-4">
    <div class="max-w-xl mx-auto text-center mt-10">
      <h1 class=" text-3xl font-Inter text-white md:text-2xl lg:text-2xl mb-14"><span class="text-gray-300"><a href="/">BERANDA</a></span> / ARTIKEL</h1>    
       <h2 class="text-2xl font-Inter mb-10 text-white font-bold">{{ $artikel->judul }}</h2>
       <small class="text-sm text-white font-semibold ">Admin, 09 Desember 2022</small>
    </div>
    <div class="mt-10">
    @if ($artikel->image)
       <img src="{{ asset('storage/' . $artikel->image ) }}" alt="artikel" class="w-[750px]  mx-auto">
    @else
    <img src="{{ asset('images/artikel/default.jpg') }}" alt="artikel" class="w-[750px]  mx-auto">
    
    @endif
    <div class="text-white  text-xl  font-semibold">
    <p class="mt-10 text-justify">{!! $artikel->deskripsi !!}</p>
    </div>
    </div>
    </div>
    </div>
</section>
{{-- End Detail Artikel --}}
@endsection