@extends('master')
@section('content')
 <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Tabel Detail</h4>
                        <p class="card-category">Here is a subtitle for this table</p>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>NIPD</th>
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Kelas</th>
                                <th>Alamat</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$siswas->nipd}}</td>
                                    <td>{{$siswas->nama}}</td>
                                    <td>{{$siswas->jenis_kelamin}}</td>
                                    <td>{{$siswas->kelas}}</td>
                                    <td>{{$siswas->alamat}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{route('siswa.index')}}" class="btn btn-primary mt-2" style="width: 100%">Back</a>
                    </div>
                </div>
            </div>
@endsection