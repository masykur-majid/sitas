<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
     @if($errors->any())
    <div class="bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded mb-6">
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach

    </div>
    @endif
    
    <form action="{{ route('location.store') }}" method="POST">
        @csrf
        <label>Nama Lokasi</label>
        <input type="text" name='lokasi_name'>
        <button type="submit">Simpan</button>
    </form>

</body>
</html>