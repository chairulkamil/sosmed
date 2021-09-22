<div class="card">
    <div class="card-body">
        <a href="/post/create" class="btn btn-primary">Tambah</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>status</th>
                    <th>Foto</th>
                    <th>caption</th>
                    <th>quotes</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $post as $data)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $data->status }}</td>
                        <td><img src="{{ URL($data->image) }}" height="100" width="150"> </td>
                        <td>{{ $data->caption }}</td>
                        <td>{{ $data->quotes }}</td>
                        <td>
                            <a href="/post/{{$data->id}}/edit" class="btn btn-primary">Edit</a>
                            <form action="/post/{{$data->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger my-1" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>