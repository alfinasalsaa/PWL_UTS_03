@extends('nasabah.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Bank Muamalat Politeknik Negeri Malang</h2>
            </div>
        <div class="float-right my-2">
            <a class="btn btnsuccess" href="{{ route('nasabah.create') }}"> Input Nasabah</a>
            </div>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th>No_Rekening</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis_Tabungan</th>
            <th>Saldo</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($nasbah as $Nasabah)
        <tr>
 
            <td>{{ $Nasabah->No_Rekening }}</td>
            <td>{{ $Nasabah->Nama }}</td>
            <td>{{ $Nasabah->Alamat }}</td>
            <td>{{ $Nasabah->Jenis_Tabungan}}</td>
            <td>{{ $Nasabah->Saldo }}</td>
            <td>
            <form action="{{ route('nasabah.destroy',$Nasabah->No_Rekening) }}" method="POST">
 
                    <a class="btn btninfo" href="{{ route('nasabah.show',$Nasabah->No_Rekening) }}">Show</a>
                    <a class="btn btnprimary" href="{{ route('nasabah.edit',$Nasabah->No_Rekening) }}">Edit</a>
            @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection