@extends('adminlte::page')

@section('title', 'Show PIU')

@section('content_header')
<h1 class="m-0 text-dark text-center">Show PIU</h1>
@stop

@section('content')
<form action="" method="post">
    @method('PUT')
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputName">Nama PIU</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            id="exampleInputName" placeholder="Nama PIU" name="name"
                            value="{{ $user->name ?? old('name') }}" disabled readonly>
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">No Telephone</label>
                        <input type="text" name="notel" class="form-control" id="notel" placeholder="No. Telephone"
                            onkeypress="return onlyNumberKey(event)" readonly>
                        @error('number') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                            id="exampleInputEmail" placeholder="Masukkan Email" name="email"
                            value="{{ $user->email ?? old('email') }}" disabled readonly>
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="exampleInputPassword" placeholder="Password" name="password" disabled readonly>
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword"
                            placeholder="Konfirmasi Password" name="password_confirmation" disabled readonly>
                    </div>

                </div>

                <div class="card-footer">
                    <a href="/piu" class="btn bg-gray-dark">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </div>
    @stop
