@extends('layouts.app')

@section('content')
<div class="container sixtyvh">
    <form method="POST" action="{{ route('profile.update',['user'])  }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="row">
            
            <div class="col-8 mx-auto">
                <h3 class="offset-md-5">Edit Profile</h3>
                <hr>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama:') }}</label>
        
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->name }}" required autocomplete="name" autofocus>
        
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="telpon" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Telpon:') }}</label>
        
                    <div class="col-md-6">
                        <input id="telpon" type="text" class="form-control @error('telpon') is-invalid @enderror" name="telpon" value="{{ old('telpon') ?? $user->profile->telpon  }}" required autocomplete="telpon" autofocus>
        
                        @error('telpon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="kecamatan" class="col-md-4 col-form-label text-md-right">{{ __('Kecamatan:') }}</label>
        
                    <div class="col-md-6">
                        <input id="kecamatan" type="text" class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan" value="{{ old('kecamatan') ?? $user->profile->kecamatan  }}" required autocomplete="kecamatan" autofocus>
        
                        @error('kecamatan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat:') }}</label>
        
                    <div class="col-md-6">
                        <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') ?? $user->profile->alamat }}" required autocomplete="alamat" autofocus>
        
                        @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>                                
        
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="button-primary w-100">
                            {{ __('Done') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>

        
    </form>
</div>
@endsection
