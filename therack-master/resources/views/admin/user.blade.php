@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
    <div class="card">
        <div class="card-header">
            <h5>USER LIST</h5>
        </div>
        
        <div class="card-body">
        <a href="{{ route('admin.form') }}" class="btn btn-success mb-4" style="color:white; width:150px;">ADD USER</a>
            <table class="table table-striped">
            <!-- <button type="button" class="btn btn-secondary mb-4">Tambah User</button> -->
                <thead>
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor Telpon</th>
                    <th scope="col">Kecamatan</th>
                    <th scope="col">Alamat</th>                    
                  </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                  <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->telpon }}</td>
                    <td>{{ $user->kecamatan }}</td>
                    <td>{{ $user->alamat }}</td>                    
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
        
    </div>
</div>
    
@endsection