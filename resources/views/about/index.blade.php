@extends('layouts.app')

@section('main-content')
<section class="about-page">

    <div class="au-hero">
        <div class="au-img-wrap">
            <img src="{{ asset('images/about.png') }}" alt="About Us">
            <div class="au-badge">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                <span>Terpercaya sejak 2021</span>
            </div>
        </div>

        <div class="au-text">
            <p class="au-eyebrow">Tentang Kami</p>
            <h1 class="au-h1">Toko komputer <span>terlengkap</span><br>untuk impianmu</h1>
            <p class="au-desc">E-Computer Shop adalah tempat terbaik untuk membangun komputer impianmu — dari komponen harga terjangkau hingga perangkat performa tinggi. Proses cepat, pilihan lengkap, dan pelayanan ramah selalu kami utamakan.</p>
        </div>
    </div>

    <div class="au-divider"></div>

    <div class="au-testimony">
        <div class="au-section-label">
            <h2>Kata mereka</h2>
            <div class="au-section-line"></div>
            <span class="au-section-count">3 ulasan pilihan</span>
        </div>

        <div class="au-cards">
            <div class="au-card">
                <div class="au-card-head">
                    <div class="au-avatar au-avatar--blue">AN</div>
                    <div>
                        <div class="au-card-name">Anggit</div>
                        <div class="au-stars">★★★★★</div>
                    </div>
                </div>
                <p class="au-card-quote">E-Computer Shop adalah tempat membeli perangkat komputer yang sangat lengkap dan juga terpercaya.</p>
            </div>

            <div class="au-card">
                <div class="au-card-head">
                    <div class="au-avatar au-avatar--purple">DE</div>
                    <div>
                        <div class="au-card-name">Dea</div>
                        <div class="au-stars">★★★★★</div>
                    </div>
                </div>
                <p class="au-card-quote">Pelayanan yang ramah dan banyaknya pilihan komponen komputer yang dapat dipilih sesuai kebutuhan.</p>
            </div>

            <div class="au-card">
                <div class="au-card-head">
                    <div class="au-avatar au-avatar--green">RA</div>
                    <div>
                        <div class="au-card-name">Rafi</div>
                        <div class="au-stars">★★★★★</div>
                    </div>
                </div>
                <p class="au-card-quote">Harga terjangkau, produk unggul, dan sudah terpercaya. Sangat direkomendasikan untuk semua kalangan.</p>
            </div>
        </div>
    </div>

</section>

<style>
    .about-page {
        width: 100%;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        color: #1a1a1a;
        background: #fff;
    }
    .au-hero {
        display: flex;
        align-items: center;
        gap: 48px;
        max-width: 1100px;
        margin: 0 auto;
        padding: 60px 32px 48px;
    }
 
    .au-img-wrap {
        position: relative;
        flex-shrink: 0;
    }
 
    .au-img-wrap img {
        width: 320px;
        height: auto;
        border-radius: 16px;
        display: block;
        object-fit: cover;
    }
 
    .au-badge {
        position: absolute;
        bottom: -14px;
        right: -14px;
        background: #fdf0e3;
        border: 1px solid #e8c8a0;
        border-radius: 10px;
        padding: 8px 14px;
        display: flex;
        align-items: center;
        gap: 7px;
        color: #a0622a;
        font-size: 13px;
        font-weight: 500;
        white-space: nowrap;
    }
 
    .au-badge svg {
        flex-shrink: 0;
    }
 
    .au-text {
        flex: 1;
        min-width: 0;
    }
 
    .au-eyebrow {
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: #d8a069;
        margin: 0 0 10px;
    }
 
    .au-h1 {
        font-size: clamp(28px, 4vw, 40px);
        font-weight: 600;
        line-height: 1.2;
        margin: 0 0 16px;
        color: #111827;
    }
 
    .au-h1 span {
        color: #d8a069;
    }
 
    .au-desc {
        font-size: 15px;
        line-height: 1.75;
        color: #4B5563;
        margin: 0 0 28px;
    }
 
    .au-stats {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
    }
 
    .au-stat {
        background: #F9FAFB;
        border: 1px solid #E5E7EB;
        border-radius: 10px;
        padding: 12px 20px;
        text-align: center;
    }
 
    .au-stat-num {
        font-size: 22px;
        font-weight: 700;
        color: #111827;
    }
 
    .au-stat-label {
        font-size: 12px;
        color: #6B7280;
        margin-top: 2px;
    }
 
    .au-divider {
        height: 1px;
        background: #E5E7EB;
        max-width: 1100px;
        margin: 0 auto;
    }
 
    .au-testimony {
        max-width: 1100px;
        margin: 0 auto;
        padding: 44px 32px 52px;
    }
 
    .au-section-label {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 28px;
    }
 
    .au-section-label h2 {
        font-size: 20px;
        font-weight: 600;
        color: #111827;
        margin: 0;
        white-space: nowrap;
    }
 
    .au-section-line {
        flex: 1;
        height: 1px;
        background: #E5E7EB;
    }
 
    .au-section-count {
        font-size: 13px;
        color: #9CA3AF;
        white-space: nowrap;
    }
 
    .au-cards {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
    }
 
    .au-card {
        background: #F9FAFB;
        border: 1px solid #E5E7EB;
        border-radius: 14px;
        padding: 20px 22px;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }
 
    .au-card:hover {
        border-color: #d8a069;
        box-shadow: 0 4px 16px rgba(216, 160, 105, 0.10);
    }
 
    .au-card-head {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 14px;
    }
 
    .au-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        font-weight: 600;
        flex-shrink: 0;
    }
 
    .au-avatar--blue   { background: #EFF6FF; color: #d8a069; }
    .au-avatar--purple { background: #F5F3FF; color: #6D28D9; }
    .au-avatar--green  { background: #F0FDF4; color: #15803D; }
 
    .au-card-name {
        font-size: 15px;
        font-weight: 600;
        color: #111827;
    }
 
    .au-stars {
        font-size: 12px;
        color: #F59E0B;
        letter-spacing: 1px;
        margin-top: 3px;
    }
 
    .au-card-quote {
        font-size: 14px;
        line-height: 1.65;
        color: #4B5563;
        border-left: 2px solid #e8c8a0;
        padding-left: 12px;
        margin: 0;
    }
 
    @media (max-width: 900px) {
        .au-hero {
            flex-direction: column;
            text-align: center;
            padding: 40px 24px 36px;
        }
 
        .au-img-wrap img {
            width: 100%;
            max-width: 340px;
        }
 
        .au-badge {
            bottom: -12px;
            right: 0;
        }
 
        .au-stats {
            justify-content: center;
        }
    }
 
    @media (max-width: 720px) {
        .au-cards {
            grid-template-columns: 1fr;
        }
 
        .au-testimony {
            padding: 36px 24px 44px;
        }
    }
 
    @media (max-width: 480px) {
        .au-h1 {
            font-size: 26px;
        }
 
        .au-stats {
            gap: 10px;
        }
 
        .au-stat {
            padding: 10px 14px;
        }
    }
</style>

@endsection