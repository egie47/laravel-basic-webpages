<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ini Homepage</title>
</head>

<body>
    <h1>Hello from home.blade.php</h1>
    <p>{{ $fullname }}, umur saya adalah {{$umur}} dan nilai saya {{$nilai}}</p>

    @if ($umur > 20)
    <p>Anda Sudah dewasa</p>
    @else
    <p>Anda belum dewasa</p>
    @endif

    @if ($nilai > 85)
    <p>grade A</p>

    @elseif ($nilai > 75)
    <p>grade B</p>

    @elseif ($nilai > 65)
    <p>grade C</p>

    @elseif ($nilai < 65) <p>grade D</p>
        @endif


        @for($i = 0; $i < 5; $i++) <div>
            <p>loop ke {{$i}}</p>

            </div>
            @endfor

            <H1>List Mahasiswa Brainrot</H1>

            {{--//cara pertama

            @foreach($listmahasiswa as $mahasiswa)
            <P> {{$mahasiswa}}</P>
            @endforeach

            --}}




            @forelse($listmahasiswa as $mahasiswa)
            <P> {{$mahasiswa}}</P>
            @empty
            <p>daftar mahasiswa kosong</p>
            @endforelse

            <h1>daftar siswa</h1>
            @foreach($daftarsiswa as $siswa)
            <p>nama : {{$siswa["nama"]}}</p>
            <p>NISN : {{$siswa["nisn"]}}</p>
            <p>jenis kelamin : {{$siswa["jenis_kelamin"]}}</p>
            <p>umur : {{$siswa["umur"]}}</p>
            <hr>
            @endforeach








            @php

            $a = 10 + 20;
            echo $a;

            @endphp
</body>

</html>