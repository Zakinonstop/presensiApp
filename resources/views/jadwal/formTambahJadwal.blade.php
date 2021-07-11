@extends('layouts.master')

@section('content')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Jadwal Pelajaran</h1>
          </div>
          {{-- <div class="alert alert-info">{{ Session::get('status') }}</div> --}}

          @if(session('status'))
              <div>{{ session('status')}}</div>
          @endif
          
          <div class="section-body">
              <h3>Tambah Jadwal Pelajaran</h3>
             
              @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
              <div class="row">
                <div class="col-md-12">
                    <form role="form" method="post" action="/insertJadwal">
                        {{ csrf_field() }}
                          <div class="card-body">

                            <div class="form-group">
                              <label>Kelas</label>
                              <select class="form-control" name="nama_kelas">
                                @foreach ($kelas as $ke)
                                <option value="{{ $ke->id}}">{{ $ke->nama_kelas}}</option>
                                 @endforeach
                              </select>
                            </div>

                            <div class="form-group">
                              <label>Hari</label>
                              <select class="form-control" name="hari">
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                                
                              </select>
                            </div>

                          
                            <div class="form-group">
                              <label>Jam Ke</label>
                              <select class="form-control" name="jam_ke">
                                @foreach ($jam as $ja)
                                      <option value="{{ $ja->id}}">{{ $ja->jam_ke}}</option>
                                  @endforeach
                               </select>
                             
                            </div>
                          
                            <div class="form-group">
                              <label>Mata Pelajaran</label>
                              <select class="form-control" name="nama_mapel">
                                @foreach ($mapel as $ma)
                                <option value="{{ $ma->id}}">{{ $ma->nama_mapel}}</option>
                                 @endforeach
                              </select>
                              
                            </div>
                          
                    
                            
                          
                           
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                 </div>
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