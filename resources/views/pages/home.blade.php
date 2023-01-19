@extends('layouts.main')


@section('container')
{{-- Section Hero --}}
<section id="home" class="pt-36">
    <div class="container">
    <div class="flex flex-wrap">
    {{-- Bagian Kanan --}}
    <div class="w-full self-center px-4 lg:w-1/2">
    <h1 class="text-xl font-Inter font-semibold md:text-2xl lg:text-3xl text-white">Selamat Datang di Platform</h1>
    <h1 class="text-3xl font-Inter mb-5 md:text-3xl lg:text-5xl text-green2 font-semibold ">PANTAU <span class="block">LINGKUNGAN</span></h1>
    <h2 class="text-xl font-Inter mb-10 text-white font-semibold">Pantau Lingkungan  merupakan platform data interaktf milik WALHI.</h2>

    {{-- Button search and location --}}
    <button type="button" class="text-white bg-green2 hover:opacity-80 focus:ring-4 focus:outline-none focus:ring-emerald-300-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
        </svg><a href="#" class="text-black font-Inter font-extrabold"> Enter your location</a>
    </button>
    <button type="button" class="text-white bg-green2 hover:opacity-80 focus:ring-4 focus:outline-none focus:ring-emerald-300-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black">
    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
    </svg>
        <a href="#" class="text-black font-Inter font-extrabold"> Search </a>
    </button>
    {{-- end Button search and location  --}}
    </div>
    {{-- End Bagian Kanan --}}
    {{-- Bagian Kiri --}}
    <div class="w-full self-end px-4 lg:w-1/2">
    <div class="mt-10">
    <img src="{{ asset('images/bg1.png') }}" alt="bg-hero" class="max-w-full mx-auto">
    </div>
    </div>
    {{-- End Bagian Kiri --}}
    </div>
    </div>
</section>
{{-- End Section Hero --}}

{{-- Section Dashboard --}}
<section class="dashboard pt-36 pb-32">
    <div class="container">
    <div class="max-w-xl mx-auto text-center mt-10">
      <h4 class="font-bold text-xl font-Inter text-white md:text-2xl lg:text-3xl mb-16">Dashboard</h4>
    </div>
    </div>
    <div class="flex flex-wrap">
    <div class="w-full self-center px-4 mb-10 lg:w-1/2">
    <div class="mt-10">
    <img src="{{ asset('images/peta.png') }}" alt="Peta" class="max-w-full mx-auto shadow hover:shadow-2xl">
    </div>
    </div>
    <div class="w-full self-start px-4 mb-10 lg:w-1/2">
    <h2 class="font-bold mb-5 text-white mt-5 font-Inter text-xl md:text-2xl lg:text-3xl">Dashboard Pantau Lingkungan</h2>
    <p class="font-semibold text-white  font-Inter text-base mb-14 md:text-base lg:text-xl">Dashboard Pantau Lingkungan  dikembangkan untuk memantau sebuah lingkungan yang terkena dampak pembuatan proyek di suatu wilayah tanpa izin ataupun dapat merusak kelestarian lingkungan yang ada berdasarkan data akurat untuk mengawasi wilayah yang terdampak di wilayah Indonesia dalam upaya melindungi alam dan menyingkirkan proyek ilegal yang tersebar dari sabang sampai merauke</p>
    <a href="/dashboard" class="text-base font-semibold text-black font-Inter bg-green2 py-3 px-8 rounded-full hover:shadow-lg  hover:opacity-80 transition duration-300 ease-in-out">Lihat Dashboard</a>
    </div>
    </div>
    </div>
    </div>
</section>
{{-- End Section Dashboard --}}


{{-- Section Artikel --}}
<section class="artikel pt-12 pb-32">
    <div class="container">
     <div class="max-w-xl mx-auto text-center mt-10">
      <h4 class="font-bold mb-5 text-xl font-Inter text-white md:text-2xl lg:text-3xl">Artikel</h4>
    </div>
    <div class="flex flex-wrap">

  @if($artikels->count())
    @foreach ( $artikels as $artikel )
    <div class="w-full px-4 mb-10 lg:w-1/3 text-white font-semibold">
    <h1 class="font-bold mb-5 text-white mt-5 font-Inter text-xl ">{{ $artikel->judul }}</h1>
    <p class="font-semibold text-white  font-Inter text-base mb-2 ">{{  $artikel->excerpt  }}</p>
      <small><a href="/artikel/{{ $artikel->id }}" class="text-green2 font-Inter font-semibold">Selengkapnya</a></small>
       <span class=" mt-5 flex text-sm text-white font-semibold">{{ $artikel->created_at->format('m/d/Y') }}</span>
    </div>
    @endforeach
  <div class="max-w-xl mx-auto text-center mt-10">
      <a href="/artikel" class="text-base font-semibold text-black font-Inter bg-green2 py-3 px-8 rounded-full hover:shadow-lg  hover:opacity-80 transition duration-300 ease-in-out ">Lihat Selengkapnya</a>
    </div>
    </div>
  @else
  <div class=" px-4 mb-10 w-full text-white font-semibold">
    <h1 class="font-semibold text-white  font-Inter mb-2 text-center ">Tidak Ada Data Artikel</h1>
    </div>

    
  @endif

   
</section>
{{-- End Section Artikel --}}

@endsection