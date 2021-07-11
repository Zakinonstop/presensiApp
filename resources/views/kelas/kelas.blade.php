@extends('layouts.master')

@section('content')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Kelas</h1>
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
              <h3>Daftar Kelas</h3>
              <div class="row">
                  <div class="col-md-4 float-right">
                  <a href="/tambahKelas" class="btn btn-primary">Tambah Kelas</a>
                    </div>
                </div><br>
              <table class="table">
                <thead>
                    <th>Id kelas</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </thead>
                @foreach ($kelas as $ke)
                    <tbody>
                    <td>{{ $ke->id }}</td>
                    <td>{{ $ke->nama_kelas }}</td>
                    <td><a href="/formEditKelas/{{ $ke->id}}" class="btn btn-primary">Edit</a>  | <a href="/hapusKelas/{{ $ke->id}}" class="btn btn-danger">Hapus</a> </td>
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