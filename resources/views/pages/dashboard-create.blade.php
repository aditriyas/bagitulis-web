@extends('layouts.dashboard')

@section('title')
    Dashboard Create
@endsection

@section('content')
        <div
                class="section-content section-dashboard-home"
                data-aos="fade-up"
            >
                <div class="container-fluid">
                <div class="dashboard-heading">
                    <h2 class="dashboard-title">Add New Writing</h2>
                    <p class="dashboard-subtitle">Upload Your Writings</p>
                </div>
                <div class="dashboard-content">
                    <div class="row">
                    <div class="col-12">
                        <form action="">
                        <div class="card">
                            <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Title</label>
                                    <input
                                    type="text"
                                    class="form-control"
                                    id="title"
                                    aria-describedby="name"
                                    name="title"
                                    value="Akuntansi Pertanggung Jawaban Dengan Pengendalian Biaya"
                                    />
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Author</label>
                                    <input
                                    type="text"
                                    class="form-control"
                                    id="author"
                                    aria-describedby="name"
                                    name="author"
                                    value="Aditya Triyaswanda"
                                    />
                                </div>
                                </div>
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea
                                    name="descrioption"
                                    id=""
                                    cols="30"
                                    rows="4"
                                    class="form-control"
                                    >Membahas tentang akuntansi pertanggung jawaban dengan pengendalian biaya berdasarkan penelitian
                                    </textarea>
                                </div>
                                </div>
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label for="thumbnails">Thumbnails</label>
                                    <input
                                    type="file"
                                    class="form-control pt-1"
                                    id="thumbnails"
                                    aria-describedby="thumbnails"
                                    name="thumbnails"
                                    />
                                </div>
                                </div>
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label for="thumbnails">File</label>
                                    <input
                                    type="file"
                                    class="form-control pt-1"
                                    id="writingFile"
                                    aria-describedby="writingFile"
                                    name="thumbnails"
                                    />
                                    <small class="text-muted"> </small>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                            <button
                                type="submit"
                                class="btn btn-success btn-block px-5"
                            >
                                Save Now
                            </button>
                            </div>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
@endsection