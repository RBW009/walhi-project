@extends('layouts.main')


@section('container')

{{-- Header title page  --}}
<section class="lapor pt-36">
<div class="container">
    <div class="max-w-xl mx-auto text-center mt-10 ">
      <h1 class="font-bold text-3xl font-Inter text-green2 md:text-3xl lg:text-5xl mb-14">LAPOR </h1>          
    </div>
     @if($message = Session::get('success'))
  <p class="font-bold text-xl font-Inter text-green2  mb-14">{{ $message }}</p>        
    @endif
    </div>
     <div class="container bg-primary border border-primary shadow-sm">
<form action="/add" method="post">
@csrf
   <div class="w-full px-4 mb-8 mt-5">
    <label for="lokasi" class="text-base text-white font-bold uppercase">Lokasi</label>
    <input type="text" name="lokasi" id="lokasi" class="w-full text-black p-3 rounded-md text-xl font-semibold focus:outline-primary focus:ring-1 focus:border-primary">
    </div>

  <div class="w-full px-4 mb-8 ">
    <label for="Peristiwa" class="text-base text-white font-bold uppercase">Peristiwa</label>
    <input type="text" name="peristiwa" id="Peristiwa" class="w-full text-black p-3 text-xl rounded-md font-semibold focus:outline-primary focus:ring-1 focus:border-primary">
    </div>
  
   <div class="w-full px-4 mb-8 ">
    <label for="organisasi" class="text-base text-white font-bold uppercase">Organisasi</label>
    <input type="text" id="organisasi" name="organisasi" class="w-full text-black p-3 text-xl rounded-md font-semibold focus:outline-primary focus:ring-1 focus:border-primary">
    </div>
     <div class="w-full px-4 mb-8 ">
    <label for="Media" class="text-base text-white font-bold uppercase">Media</label>
    <input type="text" id="Media" name="media" class="w-full text-black text-xl p-3 rounded-md font-semibold focus:outline-primary focus:ring-1 focus:border-primary">
    </div>
  <div class="w-full px-4 mb-8 ">
    <label for="Kontak" class="text-base text-white font-bold uppercase">Kontak</label>
    <input type="text" id="Kontak" name="kontak" class="w-full text-black p-3 text-xl rounded-md font-semibold focus:outline-primary focus:ring-1 focus:border-primary">
    </div>
     <div class="w-full px-4 text-center mb-10">
  <button type="submit" class="text-xl font-semibold bg-green2 py-3 px-8 rounded-full hover:shadow-lg  hover:opacity-80 transition duration-300 ease-in-out">Submit</button>
  </div>
</form>
</div>
    </section>
{{-- end section  form lapor     --}}

@endsection