<x-layout>
    <header>
        <div class="vh-100 container-fluid masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-end">
                     <div class="col-12 col-md-8 col-xl-6">
                         <h1
                         class="my-text-shadow display-1 fw-bold text-white"
                         data-aos="fade-up"
                         data-aos-delay="200"
                         data-aos-duration="1000"
                         data-aos-easing="ease-in-out"
                         data-aos-once="true"
                         >Presto.it</h1>
                         <p class="my-box-shadow text-white lead fs-4"
                         class="display-1 fw-bold text-white"
                         data-aos="fade-up"
                         data-aos-delay="500"
                         data-aos-duration="1000"
                         data-aos-easing="ease-in-out"
                         data-aos-once="true"> {{__('ui.lorem')}}</p>
                         <form action="{{route('search')}}" method="get">
                            <section class="container-fluid p-0" 
                            data-aos="fade-up"
                         data-aos-delay="800"
                         data-aos-duration="1000"
                         data-aos-easing="ease-in-out"
                         data-aos-once="true">
                                <div class="row h-100 align-items-center justify-content-center p-0">
                                    <div class="col-12 text-center ">
                                        <div class="input-group  input-search">
                                            <input type="text" class="form-control" placeholder="{{__('ui.cercaAnnunci')}}" aria-label="Cerca un annuncio" aria-describedby="button-addon2" name='q'>
                                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">{{__('ui.cerca')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                     </div>
                 </div>
            </div>
        </div>
    </header>

@if (session('access.denied.revisor.only'))
<div class="container">
    <div class="row">
        <div class="alert alert-danger alert-block">    
            {{__('ui.accessDeniedMessage')}}
        </div>   
    </div>
</div>
@endif


<div class="container py-5">
        <h1 class="my-5 fw-bold text-center">{{__('ui.cosaVendi')}} <span class='main-text-color fw-bold my-h1-size'>{{__('ui.vendere')}}</span>?</h1>
        <div class="row w-100 justify-content-between">
            <div class="col-12 col-lg-6">
                <div class='text-start'>
                <p class='py-3 fs-4'>{{__('ui.lorem')}}</p>
                <a href="{{route('create')}}" class='my-3 p-3 btn btn-warning'>{{__('ui.inserisciAnnuncio')}}</a>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class='float-end'>
                <img class='roundedImage' src="https://picsum.photos/400/400" alt="immagine prova">
                </div>
            </div>
        </div>
</div>

<h2 class="fw-bold text-center mt-5 mb-5">{{__('ui.ultimiArticoli')}} <span class='main-text-color fw-bold my-h1-size'>{{__('ui.annunci')}}</span>:</h2>
<div class="container">
    <div class="row justify-content-around">
        @foreach ($announcements as $announcement)
        <div class="card text-center col-12 col-md-4 my-5 mx-5">
            <div class="card-header">
                {{$announcement->category->name}}
            </div>
            <div class="card-body">
                    <h5 class="card-title">{{$announcement->title}}</h5>
                    <p class="card-text">{{$announcement->user->name}}</p>
                    <p class="card-text">{{$announcement->description}}</p>
                    @foreach($announcement->images as $image)
                        @if ($loop -> first)
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <img width="100%" height="100%" 
                                        src="{{$image->getUrl(400, 300)}}" alt="">
                                    </div>
                                </div>
                        @endif        
                    @endforeach
                    <p class="card-text">{{$announcement->price}}</p>
                    <a href="{{route('show',compact('announcement'))}}" class="text-white btn main-bg-color">{{__('ui.dettaglio')}}</a>
            </div>
            <div class="card-footer text-muted">
                {{$announcement->created_at->format('d/m/Y')}}
            </div>
        </div>
        @endforeach

    </div>
</div>
<!-- <div class="swiper mySwiper my-5">
      <div class="swiper-wrapper">
      @foreach ($announcements as $announcement)
      <div class="swiper-slide">
          
        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
      </div>

      @endforeach
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div> -->

<form action="{{route('search')}}" method="get">
<section class="container-fluid cta-bg">
    <div class="row h-100 align-items-center justify-content-center">
        <div class="col-12 col-md-6 text-center">
            <h2 class="text-white">{{__('ui.cercaAnnunci')}} <span class='main-text-color fw-bold my-h1-size'>{{__('ui.annunci')}}</span></h2>

            <a href="{{route('index')}}" class="display-1 text-white btn btn-main main-bg-color mt-3"
                         data-aos="fade-up"
                         data-aos-delay="800"
                         data-aos-duration="1000"
                         data-aos-easing="ease-in-out"
                         data-aos-once="true">
                {{__('ui.nostriProdotti')}}
            </a>
        </div>
    </div>
</section>
</form>

<div class='d-flex justify-content-center min-vh-50 p-5'>
    <a href="#" class='btn main-bg-color text-white'>
        Torna su
    </a>
</div>
<!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->

</x-layout>