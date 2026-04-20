<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <form action="{{ route('location.update', $location) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama Lokasi</label>
        <input type="text" name='location_name' value="{{ $location->location_name }}">
        <button type="submit">Simpan</button>
    </form>

</body>
</html>