<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio - Project Saya</title>
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

    <main>
        <h1>Project Saya</h1>

        <div class="projects-grid">

            @forelse($projects as $project)
                <div class="card">
                    <div class="card-image-wrapper">
                        <img class="card-image"
                            src="{{ $project->thumbnail ? asset('storage/' . $project->thumbnail) : asset('images/no-image.png') }}"
                            alt="{{ $project->thumbnail ?? 'Project Thumbnail' }}"
                            style="width: 100%; height: 300px; object-fit: cover;">
                    </div>

                    <div class="card-title">{{ $project->project_title ?? 'Tanpa Judul' }}</div>

                    <div class="card-meta">
                        <div class="meta-row">
                            <span class="meta-label">Judul Project :</span>
                            <span class="meta-value">
                                @if ($project->project_url)
                                    <a href="{{ $project->project_url }}"
                                        target="_blank">{{ $project->project_title ?? 'Lihat Project' }}</a>
                                @else
                                    {{ $project->project_title ?? 'Tanpa Judul' }}
                                @endif
                            </span>
                        </div>
                        <div class="meta-row">
                            <span class="meta-label">Tipe Project :</span>
                            <span class="meta-value">{{ $project->type ?? 'Tidak Ada Tipe' }}</span>
                        </div>
                        <div class="meta-row">
                            <span class="meta-label">Client :</span>
                            <span class="meta-value">{{ $project->client ?? 'Personal Project' }}</span>
                        </div>
                        <div class="meta-row">
                            <span class="meta-label">Role :</span>
                            <span class="meta-value">{{ $project->role ?? '-' }}</span>
                        </div>
                        <div class="meta-row">
                            <span class="meta-label">Periode :</span>
                            <span class="meta-value">
                                {{ $project->start_date ? \Carbon\Carbon::parse($project->start_date)->format('M Y') : '-' }}
                                –
                                {{ $project->is_ongoing ? 'Sekarang' : ($project->end_date ? \Carbon\Carbon::parse($project->end_date)->format('M Y') : '-') }}
                            </span>
                        </div>
                        <div class="meta-row">
                            <span class="meta-label">Status :</span>
                            <span class="meta-value {{ $project->is_ongoing ? 'status-ongoing' : 'status-done' }}">
                                {{ $project->is_ongoing ? 'Ongoing' : 'Completed' }}
                            </span>
                        </div>
                    </div>

                    <div class="desc-block">
                        <span class="desc-label">Deskripsi :</span>
                        {{ $project->description ?? 'Tidak ada deskripsi.' }}
                    </div>

                    <div>
                        <span class="desc-label" style="font-size:14px; font-weight:700;">Technologies :</span>
                        <div class="tech-tags">
                            @if (is_array($project->technologies))
                                @foreach ($project->technologies as $tech)
                                    <span class="tech-tag">{{ $tech }}</span>
                                @endforeach
                            @elseif(is_string($project->technologies) && is_array(json_decode($project->technologies, true)))
                                @foreach (json_decode($project->technologies, true) as $tech)
                                    <span class="tech-tag">{{ $tech }}</span>
                                @endforeach
                            @else
                                <span class="tech-tag">{{ $project->technologies ?? '-' }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <p style="text-align: center; grid-column: 1 / -1;">Belum ada project yang ditambahkan.</p>
            @endforelse

        </div>
    </main>

</body>

</html>
