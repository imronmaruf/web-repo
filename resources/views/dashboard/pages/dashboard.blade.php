@extends('dashboard.main')
@section('isi')
<div class="row">
    <div class="col-sm-12">
        <div class="home-tab">
            <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                {{-- <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab"
                            aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab"
                            aria-selected="false">Audiences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab"
                            aria-selected="false">Demographics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab"
                            aria-selected="false">More</a>
                    </li>
                </ul> --}}
                <div>
                    <div class="btn-wrapper">

                        <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                        <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i>
                            Export</a>
                    </div>
                </div>
            </div>
            <div class="tab-content tab-content-basic">
                {{-- --}}
            </div>
            <div class="row">
                <div class="col-lg-8 d-flex flex-column">
                    <div class="row flex-grow">
                        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                                <div class="card-body">
                                    <div class="d-sm-flex justify-content-between align-items-start">
                                        <div>
                                            <h4 class="card-title card-title-dash">Performance Line Chart</h4>
                                            <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply
                                                dummy text of the
                                                printing</h5>
                                        </div>
                                        <div id="performance-line-legend"></div>
                                    </div>
                                    <div class="chartjs-wrapper mt-5">
                                        <canvas id="performaneLine"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column">
                    <div class="row flex-grow">
                        <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card bg-primary card-rounded">
                                <div class="card-body pb-0">
                                    <h4 class="card-title card-title-dash text-white mb-4">Status Summary</h4>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="status-summary-ight-white mb-1">Closed Value</p>
                                            <h2 class="text-info">357</h2>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="status-summary-chart-wrapper pb-4">
                                                <canvas id="status-summary"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                                <div class="circle-progress-width">
                                                    <div id="totalVisitors" class="progressbar-js-circle pr-2">
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="text-small mb-2">Total Visitors</p>
                                                    <h4 class="mb-0 fw-bold">26.80%</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="circle-progress-width">
                                                    <div id="visitperday" class="progressbar-js-circle pr-2">
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="text-small mb-2">Visits per day</p>
                                                    <h4 class="mb-0 fw-bold">9065</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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