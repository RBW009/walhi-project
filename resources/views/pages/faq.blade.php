@extends('layouts.main')


@section('container')

{{-- Header title page  --}}
<section class="lapor pt-36">
    <div class="container">
    <div class="max-w-xl mx-auto text-center mt-10 ">
      <h1 class="font-bold text-3xl font-Inter text-green2 md:text-3xl lg:text-5xl mb-14">FREQUENTLY ASKED QUESTIONS
 </h1>         
    </div>
    </div>
</section>
{{-- end title page --}}
{{-- section form faq --}}
    <div class="container pb-96">
            <div class="w-full px-8 mb-12 mt-5" >
                <div class="w-full px-4 mb-8 bg-primary py-3 block shadow-[6px_6px_10px_-1px_rgba(0,0,0,0.25)] rounded-xl m-[15px]">
                    <input type="checkbox" id="input1" class="absolute peer opacity-0">
                    <label for="input1" class="text-lg font-semiblod text-white tracking-[1px] mx-[20px] h-[50px] flex-items-center">Apa yang dimaksud Pantau Lingkungan?</label>
                    <div class="float-right mt-1 rotate-0 peer-checked:rotate-180 duration-200"><img src="{{ asset('images/options.png') }}" alt="options"></div>
                    <div class="max-h-0 overflow-hidden peer-checked:max-h-full">
                        <p class="p-[20px] text-white text-base">
                        #PantauLingkungan adalah wadah data interaktif milik Wahana Lingkungan Hidup Indonesia (WALHI) yang menyajikan informasi seputar
                        pelaksanaan proyek pembangunan milik pemerintah atau swasta di Indonesia. 
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 mb-8 bg-primary py-3 block shadow-[6px_6px_10px_-1px_rgba(0,0,0,0.25)] rounded-xl m-[15px]">
                    <input type="checkbox" id="input2" class="absolute peer opacity-0">
                    <label for="input2" class="text-lg font-semiblod text-white tracking-[1px] mx-[20px] h-[50px] flex-items-center">Apa tujuan dan manfaat dari Platform Pantau Lingkungan?</label>
                    <div class="float-right mt-1 rotate-0 peer-checked:rotate-180 duration-200"><img src="{{ asset('images/options.png') }}" alt="options"></div>
                    <div class="max-h-0 overflow-hidden peer-checked:max-h-full">
                        <p class="p-[20px] text-white text-base">
                        #PantauLingkungan bertujuan dalam memberikan edukasi ke masyarakat mengenai ancaman kerusakan lingkungan hidup yang hadir 
                        akibat proyek pembangunan milik pemerintah atau swasta di Indonesia. 
                        </p>
                    </div>
                </div>

                <div class="w-full px-4 mb-8 bg-primary py-3 block shadow-[6px_6px_10px_-1px_rgba(0,0,0,0.25)] rounded-xl m-[15px]">
                    <input type="checkbox" id="input3" class="absolute peer opacity-0">
                    <label for="input3" class="text-lg font-semiblod text-white tracking-[1px] mx-[20px] h-[50px] flex-items-center">Bagaimana cara mengakses peta ancaman?</label>
                    <div class="float-right mt-1 rotate-0 peer-checked:rotate-180 duration-200"><img src="{{ asset('images/options.png') }}" alt="options"></div>
                    <div class="max-h-0 overflow-hidden peer-checked:max-h-full">
                        <p class="p-[20px] text-white text-base">
                        Untuk mengakses Peta Ancaman dari proyek pembangunan di Indonesia, kunjungi laman pantaulingkungan.id. Kemudian pilih menu Dashboard di bagian atas laman #PantauLingkungan. 
                        Pilih tahun, wilayah, dan kategori proyek, lalu klik tampilkan data. 
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 mb-8 bg-primary py-3 block shadow-[6px_6px_10px_-1px_rgba(0,0,0,0.25)] rounded-xl m-[15px]">
                    <input type="checkbox" id="input4" class="absolute peer opacity-0">
                    <label for="input4" class="text-lg font-semiblod text-white tracking-[1px] mx-[20px] h-[50px] flex-items-center">Bagaimana cara membuat laporan?</label>
                    <div class="float-right mt-1 rotate-0 peer-checked:rotate-180 duration-200"><img src="{{ asset('images/options.png') }}" alt="options"></div>
                    <div class="max-h-0 overflow-hidden peer-checked:max-h-full">
                        <p class="px-5 text-white text-base">1. Klik menu lapor</p>
                        <p class="px-5 text-white text-base">2. Isi kolom yang telah disediakan</p>
                        <p class="px-5 text-white text-base">3. Submit laporan</p>
                        <p class="px-5 text-white text-base">4. Tunggu respon dan progress laporan melalui kontak yang telah dicantumkan</p>
                    </div>
                </div>
            </div>
        </div>
{{-- end section form faq --}}      
         
@endsection