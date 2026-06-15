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



    <section class="kontak">
        <h2>Kontak Saya</h2>

        <div class="kontak-box">

            <!-- KIRI -->
            <div class="kontak-kiri">

                <div class="item">
                    <img src="storage/wa.png" alt="">
                    <span>+62 856-4302-8827</span>
                </div>

                <div class="item">
                    <a href="https://www.youtube.com/@Slesnesh" target="_blank">
                        <img src="storage/ytt.png" alt="">
                    </a>
                    <a href="https://www.youtube.com/@Slesnesh" target="_blank">
                        <span>Slesnesh</span>
                    </a>

                    
                </div>

                <div class="item">
                    <img src="storage/mail.png" alt="">
                    <span>reifanalifaldiansyah@gmail.com</span>
                </div>

            </div>

            <!-- KANAN -->
            <div class="kontak-kanan">

                <div class="item">
                    <a href="https://www.tiktok.com/@slesnesh" target="_blank">
                        <img src="storage/tiktok.png" alt="">
                    </a>
                    <a href="https://www.youtube.com/@Slesnesh" target="_blank">
                       <span>Slesnesh</span>
                    </a>
                    
                </div>

                <div class="item">
                    <a href="https://www.instagram.com/slesnesh/" target="_blank">
                        <img src="storage/ig.png" alt="">
                    </a>
                    <a href="https://www.instagram.com/slesnesh/" target="_blank">
                        <span>Slesnesh</span>
                    </a>
                   
                </div>

            </div>

        </div>
    </section>



</body>

</html>
