@extends('layouts.master')

@section('content')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Jadwal Pelajaran</h1>
          </div>

          
          @if(session('delJadwal'))
         

          <div>{{ session('delJadwal')}}</div>

         @elseif(session('update'))
         <div>{{ session('delJadwal')}}</div>
         @elseif(session('insert'))

         {{-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Holy guacamole!</strong> You should check in on some of those fields below.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> --}}
        
         <div>{{ session('insert')}}</div>
         @endif
          <div class="section-body">
              <h3>Daftar Jadwal Pelajaran</h3>
              <div class="row">
                  <div class="col-md-12 float-right">

                  <a href="/tambahJadwal" class="btn btn-primary float-right">Tambah Jadwal Pelajaran</a><br>

                  <form action="">
                      <div class="form-group">
                          {{-- <label for="hari"><h4>Pilih Hari :<h4></label> --}}

                            <h6>Pilih Hari</h6>

                            <select name="hari" id="hari">
                                {{-- <option value="" ><h5>Pilih hari<h5></option> --}}
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum'at">jum'at</option>
                            </select>
                      </div>
                  </form>
                    </div>
                </div>
              <table class="table">
                <thead>
                    <th>Hari</th>
                    <th>Jam Ke</th>
                    <th>Jam Masuk</th>
                    <th>Jam Keluar</th>
                    <th>Mata Pelajaran</th>
                    <th>Aksi</th>
                </thead>
                
                @foreach ($jadwal as $ja)
                    <tbody>
                    <td>{{ $ja->hari }}</td>
                    <td>{{ $ja->jam->jam_ke }}</td>
                    <td>{{ $ja->jam->jam_masuk }}</td>
                    <td>{{ $ja->jam->jam_keluar }}</td>
                    <td>{{ $ja->mapel->nama_mapel }}</td>
                    {{-- <td>{{ $ja->jam->jam_keluar }}</td> --}} 
{{-- 
                    <td><a href="#" class="btn btn-primary">Edit</a>  | <a href="/hapusJadwal/{{ $ja->id}}" class="btn btn-primary">Hapus</a> </td> --}}
                    <td><a href="/formEditJadwal/{{ $ja->id}}" class="btn btn-primary">Edit</a>  | <a href="/hapusJadwal/{{ $ja->id}}" class="btn btn-primary">Hapus</a> </td>
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