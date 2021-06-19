@extends('layouts.master')

@section('content')
  <div id="page-content-wrapper">
    <nav class="navbar navbar-store navbar-expand-lg navbar-light fixed-top" data-aos="fade-down">
      <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
        &laquo; Menu
      </button>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>

    <div class="section-content section-dashboard-home" data-aos="fade-up">
      <div class="container-fluid">
        <div class="dashboard-heading">
          <h2 class="dashboard-title">My Writings</h2>
          <p class="dashboard-subtitle">Manage Your Writings & Uploads</p>
        </div>
        <div class="dashboard-content">
          <div class="row mt-4">
            <div class="col-lg-3 col-md-6 col-sm-12 my-1">
              <a class="card card-dashboard-product d-block" href="/dashboard-products-details.html">
                <div class="card-body">
                  <img src="/images/contoh-jurnal-1.jpg" alt="" class="w-100 mb-2" />
                  <div class="product-title">
                    Akuntansi Pertanggung Jawaban Dengan Pengendalian
                    Biaya
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 my-1">
              <a class="card card-dashboard-product d-block" href="/dashboard-products-details.html">
                <div class="card-body">
                  <img src="/images/contoh-jurnal-2.jpg" alt="" class="w-100 mb-2" />
                  <div class="product-title">
                    Analisa Mengenai Efisiensi Penggunaan Modal Kerja pada
                    CV. Anugerah Ditinjau Dari Segi Profitabilitas Dan
                    Likuiditas
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 my-1">
              <a class="card card-dashboard-product d-block" href="/dashboard-products-details.html">
                <div class="card-body">
                  <img src="/images/contoh-jurnal-3.jpg" alt="" class="w-100 mb-2" />
                  <div class="product-title">
                    Analisis Dampak Jangka Panjang Merger Dan Akuisisi
                    Terhadap Kinerja Keuangan Perusahaan Pengakusi
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 my-1">
              <a class="card card-dashboard-product d-block" href="/dashboard-products-details.html">
                <div class="card-body">
                  <img src="/images/contoh-jurnal-4.jpg" alt="" class="w-100 mb-2" />
                  <div class="product-title">
                    Analisis Faktor – Faktor Yang Mempengaruhi Inflasi Di
                    Indonesia Tahun 1990 – 2005
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
