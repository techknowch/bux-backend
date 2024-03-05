@extends('layouts.backend')

@section('content')
        <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card crm-widget">
                                <div class="card-body p-0">
                                    <div class="row row-cols-md-3 row-cols-1">
                                        <div class="col col-lg border-end">
                                            <div class="py-4 px-3">
                                                <h5 class="text-muted text-uppercase fs-13">Blogs <i class="ri-function-line text-success fs-18 float-end align-middle"></i>
                                                </h5>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <i class=" ri-layout-4-line  display-6 text-muted"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0"><span class="counter-value" data-target="{{ $blogPostCount }}">0</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col col-lg border-end">
                                            <div class="mt-3 mt-md-0 py-4 px-3">
                                                <h5 class="text-muted text-uppercase fs-13">Category <i class=" ri-function-line text-success fs-18 float-end align-middle"></i></h5>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-layout-masonry-line display-6 text-muted"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0"><span class="counter-value" data-target="{{ $categoryCount }}">0</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col col-lg border-end">
                                            <div class="mt-3 mt-md-0 py-4 px-3">
                                                <h5 class="text-muted text-uppercase fs-13">
                                                    Leads <i class="ri-function-line text-success fs-18 float-end align-middle"></i>
                                                </h5>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <i class=" ri-contacts-book-line  display-6 text-muted"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0"><span class="counter-value" data-target="{{ $consultationCount }}">0</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col col-lg border-end">
                                            <div class="mt-3 mt-lg-0 py-4 px-3">
                                                <h5 class="text-muted text-uppercase fs-13">
                                                    Users <i class=" ri-function-line text-success fs-18 float-end align-middle"></i>
                                                </h5>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <i class=" ri-shield-user-line  display-6 text-muted"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0"><span class="counter-value" data-target="{{ $userCount }}">0</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col col-lg">
                                            <div class="mt-3 mt-lg-0 py-4 px-3">
                                                <h5 class="text-muted text-uppercase fs-13">
                                                    Teams <i class=" ri-function-line text-success fs-18 float-end align-middle"></i>
                                                </h5>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-service-line display-6 text-muted"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0"><span class="counter-value" data-target="{{ $teamCount }}">0</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div>
                    <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Bar Chart</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="bar" class="chartjs-chart" data-colors="[&quot;--vz-primary-rgb, 0.8&quot;, &quot;--vz-primary-rgb, 0.9&quot;]" width="718" style="display: block; box-sizing: border-box; height: 286.4px; width: 574.4px;" height="358"></canvas>

                        </div>
                    </div>
                </div>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
@endsection

@section('scripts')
<!-- Chart JS -->
<script src="{{ asset('assets/libs/chart.js/chart.umd.js') }}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var isbarchart = document.getElementById("bar");
        var barChartColor = ["#4e73df", "#224abe"];

        var userCount = {{ $userCount }};
        var categoryCount = {{ $categoryCount }};
        var teamCount = {{ $teamCount }};
        var blogPostCount = {{ $blogPostCount }};
        var consultationCount = {{ $consultationCount }};

        var barChart = new Chart(isbarchart, {
            type: "bar",
            data: {
                labels: ["Blogs", "Category", "Leads", "Users", "Teams"],
                datasets: [{
                    label: "Bux Businesses Analytics",
                    backgroundColor: barChartColor[0],
                    borderColor: barChartColor[0],
                    borderWidth: 1,
                    hoverBackgroundColor: barChartColor[1],
                    hoverBorderColor: barChartColor[1],
                    data: [blogPostCount, categoryCount, consultationCount, userCount, teamCount]
                }]
            },
            options: {
                scales: {
                    x: {
                        ticks: {
                            font: {
                                family: "Poppins"
                            }
                        }
                    },
                    y: {
                        ticks: {
                            font: {
                                family: "Poppins"
                            }
                        }
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            font: {
                                family: "Poppins"
                            }
                        }
                    }
                }
            }
        });
    });
</script>

@endsection