@extends('layouts.main')


@section('container')

{{-- Header title page  --}}
<section class="plingkungan pt-36">
    <div class="container">
    <div class="max-w-xl mx-auto text-center mt-10">
      <h1 class="font-bold text-3xl font-Inter text-green2 md:text-3xl lg:text-5xl mb-16">PANTAU LINGKUNGAN </h1>
     
      <a href="/pLingkungan-INA"><h1 class="font-bold text-xl font-Inter text-green2 md:text-3xl lg:text-2xl mb-16 inline-block mr-5 text-center underline-offset-8"><u>Indonesia</u></h1></a>      
      <a href="/pLingkungan-EN"><h1 class="font-bold text-xl font-Inter text-white md:text-3xl lg:text-2xl mb-16 inline-block mr-5 text-center">English</h1></a>      
    </div>
    </div>
</section>
{{-- end title page --}}
{{-- section about walhi --}}
<section class="plingkungan ">
    <div class="container">
        <div class="max-w-2xl mx-auto text-justify mt-10">
          <h4 class="font-bold text-xl font-Inter text-white md:text-3xl lg:text-3xl mb-10 text-center">PANTAU LINGKUNGAN </h4>
            <p class=" text-white text-xl mb-16 leading-relaxed ">#PantauLingkungan adalah wadah data interaktif yang dikelola oleh Wahana 
            Lingkungan Hidup Indonesia (WALHI) untuk masyarakat yang bertujuan menyajikan informasi seputar dampak yang terjadi akibat dari proyek milik pemerintah atau swasta di Indonesia terhadap lingkungan hidup.</p>
          <h4 class="font-bold text-xl font-Inter text-white md:text-3xl lg:text-2xl mb-10 text-center">PERAN WALHI DALAM PANTAU LINGKUNGAN</h4>
            <p class=" text-white text-xl mb-16 leading-relaxed ">Sejak tahun 1980, WALHI terlibat aktif
              mendorong upaya penyelamatan dan
              pemulihan lingkungan hidup. Tidak hanya
              pengakuan atas lingkungan hidup, WALHI juga mendorong terwujudnya perlindungan dan pemenuhan HAM sebagai tanggung jawab negara atas pemenuhan sumber-sumber kehidupan masyarakat. 
              Di tengah perjuangan, tentu ada tantangan yang harus dihadapi. Kekuasaan oligarki atas negara dan kerusakan lingkungan yang semakin parah menuntut WALHI untuk melanjutkan perlawanan melalui cara yang strategis dengan menciptakan kader yang mumpuni dan tata organisasi yang baik. 

              Untuk menciptakan tujuan tersebut, WALHI
              membentuk Akademi Ekologi yang bertujuan untuk edukasi, kaderisasi, serta pelestarian dan pengembangan pengetahuan ekologi. 
              Demi memastikan tata kelola organisasi berjalan baik, WALHI perlu menyusun dan menerapkan sistem dan mekanisme pengelolaan organisasi yang terstandar, mulai dari tingkat nasional hingga daerah. 
              Salah satu upaya WALHI dalam menciptakan sistem yang terstandar adalah dengan mengembangkan laman web #PantauLingkungan sebagai wadah edukasi lingkungan hidup. 
              #PantauLingkungan digunakan sebagai pemantau dan kritik atas pelaksanaan proyek-proyek pembangunan di Indonesia yang mengancam lingkungan hidup.
            </p>
        </div>
    </div>
</section>
{{-- end section  about walhi --}}

@endsection