@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{-- @forelse ($data_absen as $absen)
                    Jangan Lupa Presensi Keluar !
                    @empty
                        Anda Belum Melakukan Presensi !
                    @endforelse --}}
                    {{ $info['status']}}
            </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-resposive">
                        <form action="/absen" method="post">
                        {{csrf_field()}}

                        <tr>
                            <td>
                                <input type="text" class="form-control" placeholder="Keterangan.." name="note">
                            </td>
                            <td>
                                <button type="submit" class="btn btn-flat btn-primary " name="btnIn" value="1" {{ $info['btnIn']}}>
                                    Presensi Masuk
                                </button>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-flat btn-primary " name="btnOut" value="2" {{ $info['btnOut']}}>
                                    Presensi Keluar
                                </button>
                            </td>
                        </tr>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Riwayat Presensi</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-resposive">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data_absen as $absen)
                            <tr>
                                <td>{{$absen->date}}</td>
                                <td>{{$absen->time_in}}</td>
                                <td>{{$absen->time_out}}</td>
                                <td>{{$absen->note}}</td>
                            </tr>
                            @empty
                                <tr><td colspan="4">Tidak ada data yang ditampilkan</td></tr>
                                
                            @endforelse
                        </tbody>
                    </table>
                    {!! $data_absen->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
