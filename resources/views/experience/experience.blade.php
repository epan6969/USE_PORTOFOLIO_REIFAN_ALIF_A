<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Saya</title>
    <link rel="stylesheet" href="{{ asset('utama.css') }}">
</head>
<body>
     <nav class="navbar">
    <div class="navbar-brand">PORTFOLIO</div>

    <button class="navbar-toggle" id="navToggle" aria-label="Toggle menu">
        <span></span><span></span><span></span>
    </button>

    <ul class="navbar-menu" id="navMenu">
        <li><a href="{{ url('/utama') }}">About Me</a></li>
        <li><a href="{{ url('/projeck') }}">Project</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
</nav>
  <br>><br>

    <h1>Kontak Saya</h1>

    <div class="kontak-box">

        <div class="kolom">

            <div class="item">
                <img src="{{ asset('images/wa.png') }}" alt="WhatsApp">
                <span>+62 856-4302-8827</span>
            </div>

            <div class="item">
                <img src="{{ asset('images/youtube.png') }}" alt="YouTube">
                <span>Slesnesh</span>
            </div>

            <div class="item">
                <img src="{{ asset('images/gmail.png') }}" alt="Gmail">
                <span>reifanalifaldiansyah@gmail.com</span>
            </div>

        </div>

        <div class="kolom">

            <div class="item">
                <img src="{{ asset('images/tiktok.png') }}" alt="TikTok">
                <span>Slesnesh</span>
            </div>

            <div class="item">
                <img src="{{ asset('images/instagram.png') }}" alt="Instagram">
                <span>Slesnesh</span>
            </div>

        </div>

    </div>

</body>
</html>