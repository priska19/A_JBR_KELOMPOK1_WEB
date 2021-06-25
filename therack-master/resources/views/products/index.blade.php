@extends('layouts.app')

@section ('content')

<div class="container p-0">
  <div class="row">

    <div class="col-lg-3 col-md-3 col-sm-4 col-5 pl-4 filter">
      <div class="fixedfilter">

        <h3><i class="fa fa-filter"></i> Filter </h3>
        <input class="mt-3" type="text" id="search" placeholder="Enter product name" style="width:100%;">

        <div class="filterprice card">
          <div class="card-body">
            <h5 class="card-title">Price</h5>
            <input type="range" min="{{ $minPrice }}" max="{{ $maxPrice }}" value="{{ $maxPrice }}" class="slider selector" id="pricerange">
            <p class="p-0 m-0">Max: RP <span id="currentrange">{{ $maxPrice }}</span></p>
          </div>
        </div>

        <div class="filtercategory card">
          <div class="card-body">
            <h5 class="card-title">Categories</h5>
            @foreach ($categories as $categories)
              <input type="checkbox" id="{{ $categories['category'] }}" class="category selector" name="category" value="{{ $categories['category'] }}" >
              <label for="{{ $categories['category'] }}">{{ $categories['category'] }}</label><br>
            @endforeach
          </div>
        </div>

      </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-8 col-7 pr-4">
      <h3>Product</h3>
      
      <div class="row d-flex justify-content-start" id="products">
        
      </div>

    </div>

  </div>
</div>



@endsection