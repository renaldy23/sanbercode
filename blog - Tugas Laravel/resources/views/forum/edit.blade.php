@extends('master')

@section('content')

<h4 style="margin-left:10px;">Edit Pertanyaan</h4>

<form action="/{{$pertanyaan->id}}" method="post">
@csrf
@method('PUT')
    <input style="margin:15px 10px; width:250px; " type="text" name="judul" placeholder="Tuliskan judul Pertanyaan" value="{{old('judul' , $pertanyaan->judul)}}"><br>
    <textarea style="margin-left:10px;" name="isi" id=""placeholder="Isi">{{old('isi' , $pertanyaan->isi)}}</textarea><br>
    <button style="margin-left:10px;" type="submit" class="btn btn-dark">Ajukan</button>
</form>

@endsection