@extends('layouts.master')

@section('content')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Jadwal Pelajaran</h1>
          </div>

          @if(session('insert'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('insert')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
         @elseif(session('delete'))
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
           {{ session('delete')}}
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         @elseif(session('update'))
         <div class="alert alert-warning alert-dismissible fade show" role="alert">
           {{ session('update')}}
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         @endif
         
          <div class="section-body">
              {{-- <h3>Daftar Jadwal Pelajaran</h3> --}}
              <div class="row">
                  <div class="col-md-12 float-right">
                  <a href="/tambahJadwal" class="btn btn-primary float-right">Tambah Jadwal Pelajaran</a><br>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-3">

                    <h5>Cari berdasar Kelas</h5>
                  </div>
                  </div>
                <div class="row">
                  <form class="form-inline" >
                    <div class="form-group mx-md-3 mb-2">
                      <select class="form-control" name="keyword">
                        @foreach ($CariKelas as $ke)
                             {{-- <option value="{{ $ke->id}}">{{ $ke->nama_kelas}}</option> --}}
                             {{-- <option value="{{ $ja->id}}" <?php if($jad->jam->jam_ke == $ja->jam_ke){echo "selected =' selected'";};?> >{{ $ja->jam_ke}}</option> --}}
                             
                             <option value="{{ $ke->id}}" <?php if($jadwal[0]->kelas_id == $ke->id){echo "selected =' selected'";};?> >{{ $ke->nama_kelas}}</option>

                         @endforeach
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Cari</button>
                  </form>
                </div>
                
            <br>
              <table class="table">
                <thead>
                    <th>Kelas</th>
                    <th>Hari</th>
                    <th>Jam Ke</th>
                    <th>Jam Masuk</th>
                    <th>Jam Keluar</th>
                    <th>Mata Pelajaran</th>
                    <th>Aksi</th>
                </thead>
                
                @foreach ($jadwal as $ja)
                    <tbody>
                    <td>{{ $ja->kelas->nama_kelas }}</td>
                    <td>{{ $ja->hari }}</td>
                    <td>{{ $ja->jam->jam_ke }}</td>
                    <td>{{ $ja->jam->jam_masuk }}</td>
                    <td>{{ $ja->jam->jam_keluar }}</td>
                    <td>{{ $ja->mapel->nama_mapel }}</td>
                    {{-- <td>{{ $ja->jam->jam_keluar }}</td> --}} 
{{-- 
                    <td><a href="#" class="btn btn-primary">Edit</a>  | <a href="/hapusJadwal/{{ $ja->id}}" class="btn btn-primary">Hapus</a> </td> --}}
                    <td><a href="/formEditJadwal/{{ $ja->id}}" class="btn btn-primary">Edit</a>  | <a href="/hapusJadwal/{{ $ja->id}}" class="btn btn-danger">Hapus</a> </td>
                </tbody>
                @endforeach
                
              </table>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  @endsection

  @section('script')
      
  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset ('stisla/assets/js/stisla.js')}}"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="{{ asset ('stisla/assets/js/scripts.js')}}"></script>
  <script src="{{ asset ('stisla/assets/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
</body>
</html>

  @endsection