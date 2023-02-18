<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ht3aa Website</title>
    @vite('resources/css/app.css')
    @vite('resources/css/pages/portfolio.css')
</head>

<body>
    @include('sections.nav')
    <div class="wrapper">
        <header>
            <h1>Hi, My name is <span>Hassan Tahseen</span>. An Iraqi <span>Muslim</span> Full-Stack Web Developer.</h1>
        </header>

        <main>
            <h2 class="title">Certificates</h2>
            <section class="certificatesContainer">
                @foreach ($certificates as $key => $certificate)
                    <div>
                        @foreach ($certificate as $key => $value)
                            <div class="imgContainer">
                                <img class="{{ str_contains($key, 'A certificate of appreciation') ? 'appreciationCertificate' : 'completionCertificate' }}"
                                    src="{{ asset('/images/' . $value) }}" alt="{{ $key }}">
                                <div class="imgLink">
                                    <button><a href="#">hello</a></button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </section>
        </main>
    </div>
    @include('sections.footer')
</body>

</html>
