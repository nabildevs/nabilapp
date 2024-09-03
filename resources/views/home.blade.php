<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }} &mdash; {{ env('APP_NAME') }}</title>

    {{-- Font Styles --}}
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@400;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>

<body class="font-comm">

    {{-- Hero Section --}}
    <section id="home" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 lg:w-1/2 self-center px-4">
                    <h1 class="text-5xl lg:text-6xl font-black text-primary mb-4">Full-stack<br>web
                        developer
                        <h2 class="text-lg lg:text-2xl font-medium text-secondary">Hi👋🏻 always enjoys crafting
                            impactful and visually captivating websites
                        </h2>
                    </h1>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/2 self-right px-4">
                    <div class="relative">
                        <img src="{{ asset('img/home/hero.png') }}" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section id="about" class="bg-light pt-12 pb-12">
        <div class="container">
            <div class="w-full px-4 mb-10">
                <p class="text-lg lg:text-xl text-primary mb-5">I'm a full-stack web developer who has been helping my
                    clients create the websites they need for over a year. I'm always eager to learn and explore new
                    ways to make the web more exciting!</p>
                <a href=""
                    class="px-3.5 py-2 bg-primary hover:opacity-90 text-white font-semibold rounded-md transition duration-300 ease-in-out">About
                    me</a>
            </div>
        </div>
    </section>
</body>

</html>
