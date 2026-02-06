<style>
    /* Container Utama */
    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 25px;
        padding: 20px 0;
    }

    /* Card Styling */
    .project-card {
        background: #ffffff;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid #eee;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    /* Efek saat Kursor di atas Card */
    .project-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
        border-color: #007bff;
    }

    .project-card h3 {
        margin-top: 0;
        color: #2d3436;
        font-size: 1.4rem;
    }

    .tech-badge {
        display: inline-block;
        background: #f1f2f6;
        color: #57606f;
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .project-year {
        color: #a4b0be;
        font-size: 0.9rem;
        margin-bottom: 15px;
    }

    /* Tombol Link */
    .btn-detail {
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        gap: 5px;
        transition: color 0.2s;
    }

    .btn-detail:hover {
        color: #0056b3;
    }
</style>

<h1>Portofolio Saya</h1>

<div class="portfolio-grid">
    @foreach($semuaProyek as $p)
    <div class="project-card">
        <div>
            <span class="tech-badge">{{ $p->tech_stack }}</span>
            <h3>{{ $p->judul }}</h3>
            <p class="project-year">Tahun: <strong>{{ $p->tahun }}</strong></p>
        </div>
        
        <a href="{{ route('project.show', $p->slug) }}" class="btn-detail">
            Lihat Selengkapnya <span>→</span>
        </a>
    </div>
    @endforeach
</div>