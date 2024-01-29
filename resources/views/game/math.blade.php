<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tebak Matematika</title>
    <link rel="stylesheet" href="/css/game/style.css">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/vendor/aos/aos.css" rel="stylesheet">
    <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>

<body>
    <div id="game-container">
        <div class="row mb-3">
            <div class="col text-start">
                <a href="/" class="btn btn-outline-secondary">Kembali</a>
            </div>
            <div class="col text-end">
                <div class="text mt-2">
                    <i class="bi bi-crosshair2 text-warning"></i> {{ $data['user']->point }} Poin
                </div>
            </div>

        </div>
        <h1>Tebak Matematika</h1>
        <p>Pilih soal: </p>
        <button id="easy">Mudah</button>
        <button id="medium">Menengah</button>
        <button id="hard">Sulit</button>
        </form>
        <div id="question"></div>
        <input type="text" id="input-answer" placeholder="Jawaban">
        <form action="{{ route('game.math') }}" method="post">
            @csrf
            <input type="hidden" name="correct" value="0" id="correct">
            <button id="submit-btn" type="submit" onclick="checkAnswer()">Submit</button>
        </form>
        <div id="result"></div>
        <button style="display: none" id="next">Lanjut</button>
    </div>

    <script src="/js/game/math.js"></script>
</body>

</html>
