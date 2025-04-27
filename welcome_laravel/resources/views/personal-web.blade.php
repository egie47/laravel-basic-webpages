<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>personal web</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        header {
            background-color: white;
            color: black;
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
            {{$nama}}
        </h1>
    </header>
    <main>
        <h2>Intro</h2>
        <p>
            halo nama saya
            {{$nama}}, dan saya
            {{$gender}}

    </main>
</body>

</html>