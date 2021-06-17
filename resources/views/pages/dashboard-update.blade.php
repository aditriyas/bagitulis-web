@extends('layouts.dashboard')

@section('title')
    Dashboard Update
@endsection

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Details Update</h2>
            <p class="dashboard-subtitle">
                Update your details
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-12">
                    <form action="">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div
                                            class="form-group"
                                        >
                                            <label
                                                for="name"
                                                >Title</label
                                            >
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
                                        <div
                                            class="form-group"
                                        >
                                            <label
                                                for="name"
                                                >Author</label
                                            >
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
                                        <div
                                            class="form-group"
                                        >
                                            <label
                                                for="description"
                                                >Description</label
                                            >
                                            <textarea
                                                name="descrioption"
                                                id=""
                                                cols="30"
                                                rows="4"
                                                class="form-control"
                                            >Membahas tentang akuntansi pertanggung jawaban dengan pengendalian biaya berdasarkan penelitian
            </textarea
                                            >
                                        </div>
                                    </div>
                                    <div class="col">
                                        <button
                                            type="submit"
                                            class="btn btn-success btn-block px-5"
                                        >
                                            Update Details
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div
                                        class="gallery-container"
                                    >
                                        <img
                                            src="/images/product-card-1.png"
                                            alt=""
                                            class="w-100"
                                        />
                                        <a
                                            class="delete-gallery"
                                            href="#"
                                        >
                                            <img
                                                src="/images/icon-delete.svg"
                                                alt=""
                                            />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div
                                        class="gallery-container"
                                    >
                                        <img
                                            src="/images/product-card-2.png"
                                            alt=""
                                            class="w-100"
                                        />
                                        <a
                                            class="delete-gallery"
                                            href="#"
                                        >
                                            <img
                                                src="/images/icon-delete.svg"
                                                alt=""
                                            />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div
                                        class="gallery-container"
                                    >
                                        <img
                                            src="/images/product-card-3.png"
                                            alt=""
                                            class="w-100"
                                        />
                                        <a
                                            class="delete-gallery"
                                            href="#"
                                        >
                                            <img
                                                src="/images/icon-delete.svg"
                                                alt=""
                                            />
                                        </a>
                                    </div>
                                </div>
                                <div class="col mt-3">
                                    <input
                                        type="file"
                                        id="file"
                                        style="display: none;"
                                        multiple
                                    />
                                    <button
                                        class="btn btn-secondary btn-block"
                                        onclick="thisFileUpload();"
                                    >
                                        Add Cover Photo
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection