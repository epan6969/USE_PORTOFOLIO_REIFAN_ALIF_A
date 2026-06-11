<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Reifan Alif Aldiansyah</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet"/>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --bg: #f5f4f0;
      --dark: #1a1f1a;
      --olive: #4a5c3a;
      --olive-btn: #3d5030;
      --text: #2a2a2a;
      --muted: #666;
    }

    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--bg);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .card {
      background: #fff;
      border-radius: 4px;
      width: 420px;
      padding: 48px 40px 0;
      box-shadow: 0 4px 32px rgba(0,0,0,0.08);
      display: flex;
      flex-direction: column;
      align-items: center;
      overflow: hidden;
      animation: fadeUp 0.7s ease both;
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(24px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    .name {
      font-family: 'Playfair Display', serif;
      font-size: 1.05rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--text);
      margin-bottom: 28px;
      text-align: center;
    }

    .avatar-wrap {
      width: 130px;
      height: 130px;
      border-radius: 50%;
      overflow: hidden;
      border: 3px solid var(--olive);
      margin-bottom: 24px;
      flex-shrink: 0;
    }

    .avatar-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* Placeholder avatar using CSS when no image */
    .avatar-placeholder {
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, #c5cba0 0%, #8a9e6e 100%);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .avatar-placeholder svg {
      width: 60px;
      height: 60px;
      fill: #fff;
      opacity: 0.85;
    }

    .title {
      font-family: 'DM Sans', sans-serif;
      font-weight: 400;
      font-size: 0.88rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--muted);
      text-align: center;
      line-height: 1.6;
      margin-bottom: 20px;
    }

    .btn-next {
      display: inline-block;
      background: var(--olive-btn);
      color: #fff;
      font-family: 'DM Sans', sans-serif;
      font-size: 0.8rem;
      font-weight: 500;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      text-decoration: none;
      padding: 8px 28px;
      border: none;
      cursor: pointer;
      border-radius: 2px;
      margin-bottom: 36px;
      transition: background 0.2s, transform 0.15s;
    }

    .btn-next:hover {
      background: var(--olive);
      transform: translateY(-1px);
    }

    .footer-bar {
      width: calc(100% + 80px);
      background: var(--dark);
      padding: 16px 0;
      display: flex;
      justify-content: center;
      gap: 22px;
      margin-top: 4px;
    }

    .footer-bar a {
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 32px;
      height: 32px;
      border-radius: 50%;
      transition: opacity 0.2s, transform 0.2s;
    }

    .footer-bar a:hover {
      opacity: 0.75;
      transform: translateY(-2px);
    }

    .footer-bar svg { width: 20px; height: 20px; }
  </style>
</head>
<body>

<div class="card">
  <p class="name">Reifan Alif Aldiansyah</p>

  <div class="avatar-wrap">
    <!-- Replace src with your actual photo -->
    <img src="storage/profiles/01KTN3NH62RY5ANC9F3FR7D382.jpg" alt="Foto Profil" style="width:100%;height:100%;object-fit:cover;"/>
  <br>
  </div>
  <p class="title">Pelajar<br>Programmer</p>

  <a href="{{ url('/utama') }}" class="btn-next">NEXT</a>

  <div class="footer-bar">
    <!-- Instagram -->
    <a href="https://www.instagram.com/reifan_alif" target="_blank" aria-label="Instagram">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
        <circle cx="12" cy="12" r="4"/>
        <circle cx="17.5" cy="6.5" r="0.8" fill="currentColor" stroke="none"/>
      </svg>
    </a>
    <!-- Facebook -->
    <a href="https://www.facebook.com/reifan.alif" target="_blank" aria-label="Facebook">
      <svg viewBox="0 0 24 24" fill="currentColor">
        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
      </svg>
    </a>
    <!-- YouTube -->
    <a href="https://www.youtube.com/@reifanalif" target="_blank" aria-label="YouTube">
      <svg viewBox="0 0 24 24" fill="currentColor">
        <path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46A2.78 2.78 0 0 0 1.46 6.42 29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58a2.78 2.78 0 0 0 1.95 1.96C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.96A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58zM9.75 15.02V8.98L15.5 12l-5.75 3.02z"/>
      </svg>
    </a>
    <!-- TikTok -->
    <a href="https://www.tiktok.com/@reifanalif" target="_blank" aria-label="TikTok">
      <svg viewBox="0 0 24 24" fill="currentColor">
        <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 0 0-.79-.05 6.34 6.34 0 0 0-6.34 6.34 6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.33-6.34V8.69a8.18 8.18 0 0 0 4.78 1.52V6.76a4.85 4.85 0 0 1-1.01-.07z"/>
      </svg>
    </a>
  </div>
</div>

</body>
</html>