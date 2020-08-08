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
            @foreach($pertanyaan as $ask)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $ask->judul }}</td>
                    <td>{{ $ask->isi }}</td>
                    <!-- <td>07-08-2020</td>
                    <td>07-08-2020</td> -->
                    <td>
                        <a href="/{{$ask->id}}/edit" class="badge badge-success">Edit</a>
                        <a href="/{{$ask->id}}" class="badge badge-primary">Detail</a>
                        <form action="/{{$ask->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                            <input style="margin-left:10px;" type="submit" value="delete" class="btn btn-danger btn-sm">
                        </form>
                    </td>           
                </tr>
            @endforeach
    </tbody>
</table>


@endsection