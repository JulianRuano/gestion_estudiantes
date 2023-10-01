<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a9354fe65c.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    <style>
        /* Spinner */
        .border-gray-900 {
            border-color: #cbd5e0;
        }
    </style>
</head>

<body>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script>
        const img = new Image();
        img.src = 'https://res.cloudinary.com/dzxhdnqm4/image/upload/v1696144096/pexels-keira-burton-6147150_dg3x1z.avif';
        img.onload = function() {
            const spinner = document.getElementById('spinner');
            const formulario = document.getElementById('formulario');
            spinner.style.display = 'none';
            formulario.style.display = "block";
        };
    </script>

</body>

</html>
