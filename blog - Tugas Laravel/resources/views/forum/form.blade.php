@extends('master')

@section('content')

<h4 style="margin-left:10px;">Form Ajukan Pertanyaan</h4>

<form action="/pertanyaan" method="POST">
@csrf
    <input style="margin:15px 10px; width:250px; " type="text" name="judul" placeholder="Tuliskan judul Pertanyaan"><br>
    <textarea style="margin-left:10px;" name="isi" id=""placeholder="Isi"></textarea><br>
    <button style="margin-left:10px;" type="submit" class="btn btn-dark">Ajukan</button>
</form>

@endsection