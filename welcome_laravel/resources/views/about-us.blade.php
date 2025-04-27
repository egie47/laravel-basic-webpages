<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>halaman</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        header {
            background-color: black;
            color: white;
            padding: 24px;
        }

        main {
            padding: 24px
        }

        img {
            width: 120px;
        }
    </style>
</head>

<body>
    <header>
        <h1>
            {{ $nama_lengkap }}
        </h1>
    </header>
    <main>
        <h2>ini adalah about</h2>
        <p>
            halo nama saya
            {{$nama_lengkap}}, umur saya
            {{$umur}}, hobi saya adalah
            {{$hobi}}
        </p>

        <p>
            {{$biografi}}
        </p>

        <p>
            {{ $umur > 18? "dewasa" : "remaja"}}
        </p>

        <img src="/firefly.jpg" alt="firefly">
    </main>
</body>

</html>