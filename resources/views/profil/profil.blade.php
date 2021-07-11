@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Profil
            </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                      <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                      </div>
      
                      <h3 class="profile-username text-center">{{ Auth::user()->name }} <span class="caret"></span></h3>
      
                      {{-- <p class="text-muted text-center">Software Engineer</p> --}}
      
                      <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                          <b>Nama</b> <a class="float-right">{{ Auth::user()->name }}</a>
                        </li>
                        <li class="list-group-item">
                          <b>Email</b> <a class="float-right">{{ Auth::user()->email }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Kelas</b> <a class="float-right">{{ Auth::user()->kelas->nama_kelas }}</a>
                        </li>
                        <li class="list-group-item">
                          <b>Password</b> <a class="float-right">{{ Auth::user()->password }}</a>
                        </li>
                      </ul>
                      
                      <a class="btn btn-primary btn-block" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                      {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
                    </div>
                    <!-- /.card-body -->
                  </div>
            </div>
        </div>
    </div><br>
    
</div>
@endsection
