@extends('layouts.dashboard')

@section('title')
    Dashboard
@endsection

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
>
    <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">My Writings</h2>
        <p class="dashboard-subtitle">
        Manage Your Writings & Uploads
        </p>
</div>
<div class="dashboard-content">
    <div class="row">
        <div class="col-12">
            <a
                href="/dashboard-products-create.html"
                class="btn btn-success"
                >Add New File</a
            >
        </div>
    </div>
    <div class="row mt-4">
        <div
            class="col-12 col-sm-6 col-md-4 col-lg-3"
        >
            <a
                class="card card-dashboard-product d-block"
                href="/dashboard-products-details.html"
            >
                <div class="card-body">
                    <img
                        src="/images/contoh-jurnal-1.jpg"
                        alt=""
                        class="w-100 mb-2"
                    />
                    <div class="product-title">
                        Akuntansi Pertanggung
                        Jawaban Dengan Pengendalian
                        Biaya
                    </div>
                </div>
            </a>
        </div>
        <div
            class="col-12 col-sm-6 col-md-4 col-lg-3"
        >
            <a
                class="card card-dashboard-product d-block"
                href="/dashboard-products-details.html"
            >
                <div class="card-body">
                    <img
                        src="/images/contoh-jurnal-2.jpg"
                        alt=""
                        class="w-100 mb-2"
                    />
                    <div class="product-title">
                        Analisa Mengenai Efisiensi
                        Penggunaan Modal Kerja pada
                        CV. Anugerah Ditinjau Dari
                        Segi Profitabilitas Dan
                        Likuiditas
                    </div>
                </div>
            </a>
        </div>
        <div
            class="col-12 col-sm-6 col-md-4 col-lg-3"
        >
            <a
                class="card card-dashboard-product d-block"
                href="/dashboard-products-details.html"
            >
                <div class="card-body">
                    <img
                        src="/images/contoh-jurnal-3.jpg"
                        alt=""
                        class="w-100 mb-2"
                    />
                    <div class="product-title">
                        Analisis Dampak Jangka
                        Panjang Merger Dan Akuisisi
                        Terhadap Kinerja Keuangan
                        Perusahaan Pengakusi
                    </div>
                </div>
            </a>
        </div>
        <div
            class="col-12 col-sm-6 col-md-4 col-lg-3"
        >
            <a
                class="card card-dashboard-product d-block"
                href="/dashboard-products-details.html"
            >
                <div class="card-body">
                    <img
                        src="/images/contoh-jurnal-4.jpg"
                        alt=""
                        class="w-100 mb-2"
                    />
                    <div class="product-title">
                        Analisis Faktor – Faktor
                        Yang Mempengaruhi Inflasi Di
                        Indonesia Tahun 1990 – 2005
                    </div>
                </div>
            </a>
        </div>
    </div>

        
@endsection