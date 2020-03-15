@extends('layouts.app')
@section('judul','Login Page')
@section('content')
<div style="margin-top:150px ">
    <div class="container">
        <div class="row align-items-centre">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="component">
                    <div class="card">
                        <form action="/userLogin" method="post">
                            @csrf
                        <div class="card-header">
                            <center>
                                <span>LOGIN</span>
                            </center>
                        </div>
                        <br>
                    <div class="card-body">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                            </div>
                                <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" name="email">
                        </div>
                        <br>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                            </div>
                                <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password">
                        </div>
                        <br>
                        <a href="/userRegister">Belum Punya Akun?</a>
                    </div>
                        <div class="card-footer">
                            <button class="btn btn-md btn-outline-primary" type="submit">LOGIN</button>
                        </div>
                        </form>
                        @if (session('alert'))
                    <div class="d-flex justify-content-center mt-2 d-inline alert alert-danger">
                        {{ session('alert') }}
                    </div>
                @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection