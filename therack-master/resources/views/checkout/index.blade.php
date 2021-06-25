@extends('layouts.app')

@section ('content')

<div class="container">
    <div class="row">
        <div class="col-7 mx-auto">
            <h3>CHECKOUT</h3>
            <hr>
            
            <form action="{{ route('checkout') }}" method="POST" id="checkout-form">
                @csrf
                <div class="row ">
                    
                    <div class="col-12">
                        <h5>SHIPPING DETAILS</h5>
                    </div>

                    <div class="col-12">
                        <label for="name" class="">{{ __('Name') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->name ??'' }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="telpon" class="">{{ __('Nomor Telpon') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="telpon" type="text" class="form-control @error('telpon') is-invalid @enderror" name="telpon" value="{{ old('telpon') ?? $user->profile->telpon ??'' }}" required autocomplete="telpon" autofocus>
                                @error('telpon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="kecamatan" class="">{{ __('Kecamatan') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="kecamatan" type="text" class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan" value="{{ old('kecamatan') ?? $user->profile->kecamatan ??'' }}" required autocomplete="kecamatan" autofocus>
                                @error('kecamatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="alamat" class="">{{ __('Alamat Pengantaran') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') ?? $user->profile->alamat ??'' }}" required autocomplete="alamat" autofocus>
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                   
                </div>
                
                <button type="submit" class="button-primary w-100">BUY NOW</button>
            
            </form>
        </div>
    </div>
</div>

@endsection