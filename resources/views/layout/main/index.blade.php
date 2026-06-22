<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <title>{{env("APP_TITLE")}}</title>
    <style>
        .gallery {
        background: #EEE;
        }

        .gallery-cell {
        width: 66%;
        height: 200px;
        margin-right: 10px;
        background: #8C8;
        counter-increment: gallery-cell;
        }

        /* cell number */
        .gallery-cell:before {
        display: block;
        text-align: center;
        content: counter(gallery-cell);
        line-height: 200px;
        font-size: 80px;
        color: white;
        }
    </style>
</head>
<body>
    @include('component.navbar.index')

    @yield("body")

    <div class="w-full py-12 px-4 md:px-12 lg:px-32">
        <div class="max-w-7xl mx-auto space-y-12">
            @yield("section")
        </div>
    </div>

    @include("component.footer.index")
</body>
</html>
