<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('tittle','Sistem Informasi Akademik')</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{route('layout.dosen')}}" class="nav-link">Dosen</a></li>
                <li class="nav-item"><a href="{{route('layout.mahasiswa')}}" class="nav-link">Mahasiswa</a></li>
                <li class="nav-item"><a href="{{route('layout.matakuliah')}}" class="nav-link">Mata Kuliah</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')

</body>
</html>