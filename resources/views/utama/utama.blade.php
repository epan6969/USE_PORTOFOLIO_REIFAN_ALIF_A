<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <title>{{ $profile->username ?? 'Portfolio Reifan' }}</title>
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

<div class="container">
     
  {{-- 1. BAGIAN HEADER & PROFILE --}}
  <div class="profile-header">
    <h1 class="fullname">{{ $profile->username ?? 'Nama Tidak Ditemukan' }}</h1>
    
    <div class="avatar-wrap" style="text-align: center; margin: 20px 0;">
        <img src="{{ $profile->photo_profile ? asset('storage/' . $profile->photo_profile) : asset('img/default.jpg') }}" 
             alt="Foto Profil" 
             style="width: 140px; height: 140px; border-radius: 50%; object-fit: cover;">
    </div>
    
    <p class="meta-info">
      {{ $profile->date_of_birth ? \Carbon\Carbon::parse($profile->date_of_birth)->translatedFormat('d F Y') : '' }}
    </p>
    <p class="meta-info">{{ $profile->location ?? '' }}</p>
    <p class="meta-info">Kelas XI — SMKN 4 Tasikmalaya</p>
  </div>

  {{-- 2. BAGIAN ABOUT ME --}}
  <div class="about-section">
    <h2>About Me</h2>
    <p>
      Saya <strong>{{ $profile->username ?? 'Reifan' }}</strong>. {{ $profile->short_bio ?? 'Seorang Game Developer dan 3D Artist.' }}
    </p>
  </div>

  {{-- 3. BAGIAN SKILLS --}}
{{-- BAGIAN SKILLS --}}
<div class="skills-section">
    <h2>Skills saya</h2>
    <div class="skills-container">
        @foreach ($skills as $skill)
            <div class="skill-card">
                <div class="skill-icon-wrap">
                    {{-- Sesuaikan nama kolom gambar di database, contoh jika kolomnya bernama 'skill' --}}
                    
                </div>
                <p class="skill-name">{{ $skill->skill_name }}</p>
            </div>
        @endforeach
    </div>
</div>

{{-- BAGIAN EXPERIENCES --}}
<div class="skills-section">
    <h2>Experiences</h2>
    <div class="skills-container">
        @foreach ($experiences as $exp)
            <div class="skill-card">
                {{-- Karena di form Experience tidak ada input foto, bagian avatar/icon dibuang atau diganti icon default --}}
                  
                
                <p class="skill-name" style="margin-top: 12px; font-size: 18px;">{{ $exp->position_title }}</p>
                <p class="skill-company" style="font-size: 14px; color: rgba(255,255,255,0.8);">{{ $exp->organization_name }}</p>
                
                {{-- Memperbaiki format tanggal agar rapi (Format: d F Y atau disesuaikan) --}}
                <small class="skill-date" style="font-size: 12px; color: rgba(255,255,255,0.6);">
                    {{ \Carbon\Carbon::parse($exp->start_date)->translatedFormat('d F Y') }} - 
                    {{ $exp->is_current ? 'Sekarang' : ($exp->end_date ? \Carbon\Carbon::parse($exp->end_date)->translatedFormat('d F Y') : '') }}
                </small>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>