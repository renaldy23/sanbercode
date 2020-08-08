@extends('master')

@section('content')

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Isi</th>
            <th scope="col">Action</th>
        </tr>
    </thead>

    <tbody>
            <tr>
                <th scope="row">1</th>
                <td>{{ $pertanyaan->judul }}</td>
                <td>{{ $pertanyaan->isi }}</td>
                <td>
                    <a href="/{{$pertanyaan->id}}/edit" class="badge badge-success">Edit</a>
                    <form action="/{{$pertanyaan->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                        <input style="margin-left:10px;" type="submit" value="delete" class="btn btn-danger btn-sm">
                    </form>
                </td>           
            </tr>
    </tbody>
</table>
@endsection