<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Form</title>
</head>

<body class="bg-slate-300">
    <section class="container pt-20">
        <div class="row-flex justify-center items-center">
            {{ $slot }}
        </div>
        <div class="pt-20">
            <a href="/" class="p-3 border-2 border-sky-600 bg-sky-600 text-slate-100 font-semibold rounded-3xl hover:bg-slate-200 hover:text-slate-900">
              <- Back to Homepage
            </a>
        </div>
    </section>
</body>

</html>