@extends('layouts.meta')


@section('page-title')
    Панель
@endsection

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/base/pages/dashboard-ecommerce.css') }}">
@endsection

@section('body-class')
    pace-done vertical-layout vertical-menu-modern navbar-floating footer-static menu-expanded
@endsection

@section('content')
    <section id="dashboard-analytics">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card card-profile">
                    <img src="{{asset('images/banner/banner-12.jpg')}}" class="img-fluid card-img-top" alt="Profile Cover Photo">
                    <div class="card-body">
                        <div class="profile-image-wrapper">
                            <div class="profile-image">
                                <div class="avatar">
                                    <img src="{{asset('images/portrait/small/avatar-s-9.jpg')}}" alt="Profile Picture">
                                </div>
                            </div>
                        </div>
                        <h3>Curtis Stone</h3>
                        <h6 class="text-muted">Malaysia</h6>
                        <span class="badge badge-light-primary profile-badge">Pro Level</span>
                        <hr class="mb-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted fw-bolder">Followers</h6>
                                <h3 class="mb-0">10.3k</h3>
                            </div>
                            <div>
                                <h6 class="text-muted fw-bolder">Projects</h6>
                                <h3 class="mb-0">156</h3>
                            </div>
                            <div>
                                <h6 class="text-muted fw-bolder">Rank</h6>
                                <h3 class="mb-0">23</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-start">
                        <div>
                            <h4 class="card-title">Sales</h4>
                            <p class="card-text">Last 6 months</p>
                        </div>
                        <div class="dropdown chart-dropdown">
                            <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-bs-toggle="dropdown"></i>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Last 28 Days</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">Last Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-inline-block me-1">
                            <div class="d-flex align-items-center">
                                <i data-feather="circle" class="font-small-3 text-primary me-50"></i>
                                <h6 class="mb-0">Продаж</h6>
                            </div>
                        </div>
                        <div class="d-inline-block">
                            <div class="d-flex align-items-center">
                                <i data-feather="circle" class="font-small-3 text-info me-50"></i>
                                <h6 class="mb-0">Визитов</h6>
                            </div>
                        </div>
                        <div id="sales-visit-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">Product Orders</h4>
                            <div class="dropdown chart-dropdown">
                                <button class="btn btn-sm border-0 dropdown-toggle px-50" type="button" id="dropdownItem2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Last 7 Days
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownItem2">
                                    <a class="dropdown-item" href="#">Last 28 Days</a>
                                    <a class="dropdown-item" href="#">Last Month</a>
                                    <a class="dropdown-item" href="#">Last Year</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="product-order-chart"></div>
                            <div class="d-flex justify-content-between mb-1">
                                <div class="d-flex align-items-center">
                                    <i data-feather="circle" class="font-medium-1 text-primary"></i>
                                    <span class="fw-bold ms-75">Finished</span>
                                </div>
                                <span>23043</span>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <div class="d-flex align-items-center">
                                    <i data-feather="circle" class="font-medium-1 text-warning"></i>
                                    <span class="fw-bold ms-75">Pending</span>
                                </div>
                                <span>14658</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i data-feather="circle" class="font-medium-1 text-danger"></i>
                                    <span class="fw-bold ms-75">Rejected</span>
                                </div>
                                <span>4758</span>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-lg-12 col-12">
                <div class="row match-height">
                    <!-- Sales Line Chart Card -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h4 class="card-title mb-25">Доход</h4>
                                    <p class="card-text mb-0">За этот месяц: </p>
                                    <h4> 12.84k</h4>
                                    <p class="card-text mb-0 mt-2">Прошлый месяц:</p>
                                    <h4> 20.84k</h4>

                                </div>
{{--                                <i data-feather="settings" class="font-medium-3 text-muted cursor-pointer"></i>--}}
                            </div>
                            <div class="card-body pb-0">
                                <div id="sales-line-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!--/ Sales Line Chart Card -->
                </div>
            </div>

        </div>
    </section>
@endsection
