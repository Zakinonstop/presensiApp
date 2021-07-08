<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Presensiku &mdash; oke</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset ('stisla/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset ('stisla/assets/css/components.css')}}">
</head>


{{-- @extends('layouts.header') --}}

{{-- @extends('layouts.sidebar') --}}

<body>
    <div id="app">
      <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
          <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
              <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            </ul>
          </form>
          
        </nav>
        <div class="main-sidebar">
          <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
              <a href="index.html">PresensiKu</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
              <a href="index.html">St</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Menu</li>
                <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Data Siswa</span></a></li>
                <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Kelas</span></a></li><hr>
                <li><a class="nav-link" href="/jadwal"><i class="fas fa-pencil-ruler"></i> <span>Jadwal</span></a></li>
                <li><a class="nav-link" href="/mapel"><i class="fas fa-pencil-ruler"></i> <span>Mata Pelajaran</span></a></li>
                <li><a class="nav-link" href="/jam"><i class="fas fa-pencil-ruler"></i> <span>Jam Pelajaran</span></a></li>
                <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Riwayat Presensi</span></a></li>
              </ul>
  
          </aside>
        </div>
  
        @yield('content')

      <!-- Main Content -->
     

 @yield('script')