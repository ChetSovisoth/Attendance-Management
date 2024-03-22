@extends('layout.layout')

@section('content')
    <div id="wrapper" class="d-flex">
        <!-- Sidebar -->
        <div class="w-25 me-3">
            @include('layout.sidebar')
        </div>
        <div class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0">Administrator Dashboard</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>

                    <div class="row mb-3">
                        <!-- Employee Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="" type="button" class="w-100 text-decoration-none ">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col me-2">
                                                <div class="text-xs font-weight-bold text-uppercase mb-1">Employees</div>
                                                <div class="fs-4 font-weight-bold ">
                                                    {{ (new App\Models\Employee)->getTotalEmployee() }}
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-users fa-2x text-info"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Shift Card -->

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col me-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">Shifts</div>
                                            <div class="fs-4 font-weight-bold ">
                                                {{ (new App\Models\Shift)->getTotalShift() }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-business-time fa-2x text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Position Card -->

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col me-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">Positions</div>
                                            <div class="fs-4 font-weight-bold ">
                                                {{ (new App\Models\Position)->getTotalPosition() }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-user-plus fa-2x text-info-emphasis"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Emp Att Card  -->

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col me-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">Employee Attendaces</div>
                                            <div class="fs-4 font-weight-bold ">
                                                {{-- add data here --}} 
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-secondary-emphasis"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- Data Summary --}}
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col me-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">Data Summary</div>
                                            <div class="fs-4 font-weight-bold ">
                                                {{-- add data here --}} 
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-chart-pie fa-2x text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- Total Late --}}
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col me-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total Late</div>
                                            <div class="fs-4 font-weight-bold ">
                                                {{-- add data here --}} 
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-clock fa-2x text-primary-emphasis "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- Total Absents --}}
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col me-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total Absents</div>
                                            <div class="fs-4 font-weight-bold ">
                                                {{-- add data here --}} 
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-ban fa-2x text-danger"></i>
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
