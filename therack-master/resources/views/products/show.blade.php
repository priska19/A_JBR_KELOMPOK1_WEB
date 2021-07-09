@extends('layouts.app')

@section ('content')

<div class="container p-0 show">
   <div class="row sixtyvh">
       <div class="col-6 d-flex flex-column align-items-center">
            <img height="300px" src="{{ asset('/storage/products/'.$product->image) }}" alt="">
       </div>
       <div class="col-lg-4 col-sm-12 pl-5 pr-5">
        <h5><strong>{{ $product->name }}</strong></h5>
        <h6>RP. {{ $product->price }}</h6>
            <div class="card">
                <div class="card-body">
                    <div class="show-info">
                        <div class="info-1">
                            <h6>BUY NEW</h6>
                        </div>
                        <div class="info-3">
                            <p>Menggunakan bahan dengan kualitas terbaik dan menjaga kualitasnya hingga di tangan konsumen untuk menjamin kepuasan anda. 
                            </p>
                        </div>
                        
                        <a href="{{ route('cart.add',['product'=>$product->id]) }}" class="add-to-cart">
                            <div class="info-4">
                                ADD TO CART
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>

@endsection