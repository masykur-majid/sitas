<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Tentang Saya</title>
</head>
<body>
    <a href="/">Home</a>
    <a href="/plant-manager">Kelola</a>
    <a href="/about"">Tentang Saya</a>
    <div class="flex items-center justify-center mt-10">

        <div class="rounded-full overflow-hidden w-50 h-50 pr-10 pb-20">
            <img src="{{ asset('storage/face.png') }}" class="object-cover w-full h-full scale-350 ">
        </div>


        <div class="text-7xl font-black outline-black outline-1 p-0 justify-end">
            <h1>ABOUT</h1>
            <h1>ME</h1>
        </div>
            <p></p>
    </div>
</body>
</html>
