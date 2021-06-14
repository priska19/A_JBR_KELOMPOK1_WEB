@extends('layouts.app')

@section ('content')

<div class="container p-0">
  @if(Session::has('success'))
  <div class="row">
    <div class="col-12">
      <div id="charge-message" class="alert alert-success">
        {{ Session::get('success') }}
      </div>
    </div>
  </div>
  @endif
  <!-- GET FIT FROM HOME [S]-->
  <!-- banner -->
  <div class="row">
      <div class="col-12 promowrap">
        <div class="row m-0 p-0">
          <div class="col-4 promo-info h-100">
            <div class="infowrapper d-flex flex-column h-100 justify-content-center">
              <h2>GET FIT FROM HOME</h2>
              <h4>30% off all listed items!</h4>
              <p>Sale ends 23rd June 2020</p>
              <a href="{{ route('product.index') }}" class="w-100 button">SHOP NOW</a>
            </div>   
          </div> 
        </div>
        <img class="d-block w-100" src="{{ asset('photo/fitfromhome.jpg') }}" alt="">
      </div>
    </div>
    <!-- end banner -->
    <div class="row">
      <div class="col-12 promowrap">
        <div class="row m-0 p-0">
        </div>
        <img class="d-block w-100" src="{{ asset('photo/bannerbakso.jpg') }}" alt="">
      </div>
    </div>
    <!-- GET FIT FROM HOME [E]-->

    <!-- MEN & WOMEN [S]-->
    <div class="row pt-4">
      <div class="col-6 d-flex flex-column align-items-center genderwrapper">
        <a href="{{ route('product.index') }}">
          <button id="maleBtn">
          <div class="menu">
            <img class="d-block w-100" src="{{ asset('photo/makanan.png') }}" alt="">
            <h2 class="pt-2">MAKANAN</h2>
          </div>
        </button>
        </a>
      </div>
      <div class="col-6 d-flex flex-column align-items-center genderwrapper">
        <a href="{{ route('product.index') }}">
          <button id="femaleBtn">
          <div class="menu">
            <img class="d-block w-100" src="{{ asset('photo/minuman.png') }}" alt="">
            <h2 class="pt-2">MINUMAN</h2>
          </div>
        </button>
        </a>
      </div>
    </div>
    <!-- MEN & WOMEN [E]-->
    <BR></BR>
     
    <!-- FEATURED SHOES [S]-->
    <h2 class="pt-4">REKOMENDASI MENU - BEST SELLER</h2>
    <div class="row d-flex justify-content-center">
      @foreach ($products as $product)    
      <div class="col-lg-3 col-md-6 col-sm-6 col-6 pt-3">
        <div class="card">
          <a href="{{ route('product.show',['product'=>$product->id]) }}">
            <div class="card-body ">
              <div class="product-info">
                <div class="info-1"><img src="{{ asset('photo') }}/{{ $product->gambar }}" alt=""></div>
                <div class="info-4"><h5>{{ $product->brand }}</h5></div>
                <div class="info-2"><a href="product/{{ $product->id }}"><h4>{{ $product->name }}</h4></a></div>
                <div class="info-3"><h5>Rp.{{ $product->price }}</h5></div>
              </div>
            </div>
          </a>
        </div>
      </div>
      @endforeach
    </div>
    <!-- FEATURED SHOES [E]-->

    <!-- ADVANTAGE [S]-->
    <h2 class="pt-4">KEUNGGULAN WARUNG BAKSO VIRAL JEMBER</h2>
    <div class="row m-0 pt-4">
      <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center advantagewrapper">
        <img class="" height="80px" src="{{ asset('photo/gratisongkir.jpg') }}" alt="">
          <h4>FREE ONGKIR</h4>
      </div>
      <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center advantagewrapper">
        <img class="" height="80px" src="{{ asset('photo/higienis.jpg') }}" alt="">
          <h4>HIGIENIS</h4>
      </div>
      <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center advantagewrapper">
        <img class="" height="80px" src="{{ asset('photo/murah.png') }}" alt="">
          <h4>MURAH</h4>
      </div>
    </div>
    <!-- ADVANTAGE [E]-->

</div>

@endsection