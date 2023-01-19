@extends('layouts.main')


@section('container')

{{-- Header title page  --}}
<section class="plingkungan pt-36">
    <div class="container">
    <div class="max-w-xl mx-auto text-center mt-10">
      <h1 class="font-bold text-3xl font-Inter text-green2 md:text-3xl lg:text-5xl mb-16">PANTAU LINGKUNGAN </h1>
     
      <a href="/pLingkungan-INA"><h1 class="font-bold text-xl font-Inter text-white md:text-3xl lg:text-2xl mb-16 inline-block mr-5 text-center">Indonesia </h1></a>      
      <a href="/pLingkungan-EN"><h1 class="font-bold text-xl font-Inter text-green2 md:text-3xl lg:text-2xl mb-16 inline-block mr-5 text-center underline-offset-8"><u>English</u></h1></a>      
    </div>
    </div>
</section>
{{-- end title page --}}
{{-- section about walhi --}}
<section class="plingkungan ">
    <div class="container">
        <div class="max-w-2xl mx-auto text-justify mt-10">
          <h4 class="font-bold text-xl font-Inter text-white md:text-3xl lg:text-3xl mb-10 text-center"> MONITOR THE ENVIRONMENT </h4>
          <p class=" text-white text-xl mb-16 leading-relaxed ">#MonitortheEnvironment is an interactive data container managed by the Indonesian Forum for the Environment (WALHI) 
            for the public which aims to provide information about the impact that has occurred as a result of projects owned by the government or private companies in Indonesia on the environment.</p>
          <h4 class="font-bold text-xl font-Inter text-white md:text-3xl lg:text-2xl mb-10 text-center">WALHI ROLE IN ENVIRONMENTAL MONITORING</h4>
            <p class=" text-white text-xl mb-16 leading-relaxed ">Since 1980, WALHI has been actively involved in encouraging efforts to save and restore the environment. 
              Not only recognition of the environment, WALHI also encourages the realization of the protection and fulfillment of human rights as the state's responsibility for fulfilling people's sources of life. 
              In the midst of the struggle, of course there are challenges that must be faced. The oligarchic power over the state and the increasingly severe environmental damage require WALHI to continue the fight in a strategic way by creating qualified cadres and good organizational governance. 
              To achieve this goal, WALHI established an Ecology Academy which aims to educate, regenerate, and preserve and develop ecological knowledge. In order to ensure good organizational governance, WALHI needs to develop and implement standardized organizational management systems and mechanisms, starting from the national to regional levels. 
              One of WALHI's efforts to create a standardized system is to develop the #PantauLingkungan web page as a forum for environmental education. 
              #MonitortheEnvironment is used to monitor and criticize the implementation of development projects in Indonesia that threaten the environment.
            </p>
        </div>
    </div>
</section>
{{-- end section about walhi --}}

@endsection