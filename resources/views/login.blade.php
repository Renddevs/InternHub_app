@extends('shared._empty_layout')

@section('content')
<div class="content-wrapper d-flex align-items-center auth px-0">
    <div class="row w-100 mx-0">
      <div class="col-lg-4 mx-auto">
        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
          {{-- <div class="brand-logo">
            <img src="../../images/logo.svg" alt="logo">
          </div> --}}
          <h5>Halo, gunakan akun e-learning !<h5>
          <h6 class="font-weight-light">Sign in terlebih dahulu, untuk lanjut.</h6>
          <form class="pt-3">
            <div class="form-group">
              <input type="text" class="form-control form-control-sm" id="exampleInputEmail1" placeholder="8 angka terakhir dari npm">
            </div>
            <div class="form-group">
              <input type="password" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="mt-3">
              <a class="btn btn-block btn-primary btn-sm font-weight-medium auth-form-btn" href="../../index.html">SIGN IN</a>
            </div>
            <div class="my-2 d-flex justify-content-between align-items-center">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection