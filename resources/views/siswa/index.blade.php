@extends('master')
@section('content')
 <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Tabel Siswa</h4>
                        <a href="{{route('siswa.create-siswa')}}"><button class="btn btn-primary" style="position: absolute; left: 80%; top: 20px;">Tambah Siswa</button></a>
                        <p class="card-category">Here is a subtitle for this table</p>
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                            <strong>Success!</strong> {{ $message }}.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>NIPD</th>
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Kelas</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                               @foreach ($siswas as $sis)
                                <tr>
                                    <td>{{$sis->nipd}}</td>
                                    <td>{{$sis->nama}}</td>
                                    <td>{{$sis->jenis_kelamin}}</td>
                                    <td>{{$sis->kelas}}</td>
                                    <td>{{$sis->alamat}}</td>
                                    <td>     <form action="{{ route('siswa.destroy',$sis->id) }}" method="POST">
   
                                        {{-- <a class="btn btn-info" href="{{ route('siswa.show',$user->id) }}">Show</a> --}}
                        
                                        <a class="btn btn-warning" href="{{ route('siswa.show-siswa',$sis->id)}}">Show</a>
                                        
                                        <a class="btn btn-primary" href="{{ route('siswa.edit-siswa',$sis->id) }}">Edit</a>
                       
                                        @csrf
                                        @method('DELETE')
                          
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form></td>
                                </tr>
                           
                                @endforeach
                            </tbody>
                        </table>
                        {{$siswas->render()}}
                    </div>
                </div>
            </div>
@endsection