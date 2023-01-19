@extends('layouts.main')


@section('container')

<style>
  .img-artikel {
    height: 255px;
    width: 400px;
  }
</style>

{{-- Header title page  --}}
<section class="plingkungan pt-36">
    <div class="container">
    <div class="max-w-xl mx-auto text-center mt-10">
      <h1 class="font-bold text-3xl font-Inter text-green2 md:text-3xl lg:text-5xl mb-14">SEMUA ARTIKEL </h1>     
      <h1 class="font-bold text-xl font-Inter text-white md:text-3xl lg:text-3xl mt-2 mb-16 ">NEWS </h1>      
    </div>
    </div>
</section>
{{-- end title page --}}
{{-- section  Artikel  --}}
<section class="artikel pb-32">
    <div class="container">
    <div class="flex flex-wrap">
    @if($artikels->count())
    @foreach ($artikels as $artikel )
      
       <div class="w-full px-4 mb-10 lg:w-1/3 text-white font-semibold">
      @if($artikel->image)
      <div class="mt-10">
      <img src="{{ asset('storage/' . $artikel->image) }}" alt="artikel1" class="img-artikel max-w-full mx-auto shadow hover:shadow-2xl">
      </div>

      @else
      <div class="mt-10">
      <img src="{{ asset('images/artikel/default.jpg') }}" alt="artikel1" class="max-w-full mx-auto shadow hover:shadow-2xl">
      </div>
      @endif
      <h1 class="font-bold mb-5 text-white mt-5 font-Inter text-xl ">{{ $artikel->judul }}</h1>
      <p class="font-semibold text-white  font-Inter text-base mb-2 ">{{  $artikel->excerpt  }}</p>
        <small><a href="/artikel/{{ $artikel->id }}" class="text-green2 font-Inter font-semibold">Selengkapnya</a></small>
        <span class=" mt-5 flex text-sm text-white font-semibold">{{ $artikel->created_at->format('m/d/Y') }}</span>
      </div>
    @endforeach
    @else
     <div class="w-full px-4 mb-10 text-white font-semibold">
      <h1 class="font-bold mb-5 text-white mt-5 font-Inter text-xl text-center ">Tidak Ada Data Artikel</h1>
      </div>
    @endif
    
    </section>

{{-- end section  dashboard --}}

@endsection