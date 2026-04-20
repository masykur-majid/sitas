<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1>Data Lokasi</h1>

    {{ session('success') }}<br>

<div>
    <div>
    <a href="{{ route('location.create') }}" >Tambah Data baru</a>
    </div>

    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Lokasi</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($location as $data)
                <tr>
                    <td> {{ $data->id }}</td>
                    <td> <a href="{{ route('location.show', $data) }}">{{ $data->location_name }}</a></td>
                    <td>
                        <form method="POST" action="{{ route('location.destroy', $data) }}">
                            @csrf
                            @method('DELETE')
                            <a  href="{{ route('location.edit', $data) }}">Edit</a>

                            <button type="submit" onclick="return confirm('sure?')">Hapus</button>
                        </form>                       
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
     {{ $location->links() }}
</div>
   
</body>
</html>
