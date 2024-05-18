@extends('layouts.master')
@section('title','Dashboard')
@section('content')
<div class="main">

    <!-- BOF Breadcrumb -->
    <div class="row">
        <div class="col">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="ti-home"></i> Dashboard</a></li>
            </ol>
        </div>
    </div>
    <!-- EOF Breadcrumb -->

    <!-- BOF MAIN-BODY -->
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="icon-left text-secondary"><i class="ti-bar-chart"></i></div>
                    <div class="number-right text-right">
                        <h6 class="bold text-secondary">Monthly Goal</h6>
                        <h3 class="card-title text-warning bold">$74,502</h3>
                    </div>
                    <div class="progress progress-bar-sm">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress-text text-secondary">
                        <span class="float-left"><small>$0</small></span>
                        <span class="float-right"><small>$100,000</small></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="icon-left text-secondary"><i class="ti-receipt"></i></div>
                    <div class="number-right text-right">
                        <h6 class="bold text-secondary">Monthly Orders</h6>
                        <h3 class="card-title text-primary bold">9,432</h3>
                    </div>
                    <div class="progress progress-bar-sm">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress-text text-secondary">
                        <span class="float-left"><small>Total Monthly Orders</small></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="icon-left text-secondary"><i class="ti-wallet"></i></div>
                    <div class="number-right text-right">
                        <h6 class="bold text-secondary">Monthly Expenses</h6>
                        <h3 class="card-title text-bubblegum bold">$2,942</h3>
                    </div>
                    <div class="progress progress-bar-sm">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-bubblegum" role="progressbar" style="width: 30%" aria-valuenow="30"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress-text text-secondary">
                        <span class="float-left"><small>0%</small></span>
                        <span class="float-right"><small>100%</small></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Year Comparison Chart -->
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-body" id="year-comparison-chart"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Employees Sales -->
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="caption">
                        <i class="ti-user"></i> Employees Sales
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="btn btn-round btn-sm btn-outline-secondary">Today</a>
                        <a href="javascript:;" class="btn btn-round btn-sm btn-outline-secondary">Week</a>
                        <a href="javascript:;" class="btn btn-round btn-sm btn-outline-secondary">Month</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 text-right">
                                            <h6 class="bold text-secondary">Daily</h6>
                                            <h5 class="card-title text-tuscany bold">$7,524</h3>
                                        </div>
                                        <div class="col-6">
                                            <div id="sparkline-chart1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 text-right">
                                            <h6 class="bold text-secondary">Weekly</h6>
                                            <h5 class="card-title text-info bold">$18,852</h3>
                                        </div>
                                        <div class="col-6">
                                            <div id="sparkline-chart2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 scrollbox-md" data-simplebar>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Employee</th>
                                            <th class="text-right">Daily</th>
                                            <th class="text-right">Totals</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row"><img src="assets/img/profile/profile-07.jpg" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">siQuang Humbleman</a></td>
                                            <td class="text-right">$2,546</td>
                                            <td class="text-right">$14,587</td>
                                        </tr>
                                        <tr>
                                            <td scope="row"><img src="assets/img/profile/profile-02.jpg" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Bob OfHope</a></td>
                                            <td class="text-right">$2,338</td>
                                            <td class="text-right">$8,321</td>
                                        </tr>
                                        <tr>
                                            <td scope="row"><img src="assets/img/profile/profile-03.jpg" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Dana Squash</a></td>
                                            <td class="text-right">$1,478</td>
                                            <td class="text-right">$6,720</td>
                                        </tr>
                                        <tr>
                                            <td scope="row"><img src="assets/img/profile/profile-04.jpg" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Pear Appleton</a></td>
                                            <td class="text-right">$2,338</td>
                                            <td class="text-right">$8,321</td>
                                        </tr>
                                        <tr>
                                            <td scope="row"><img src="assets/img/profile/profile-06.jpg" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Lemony Tang</a></td>
                                            <td class="text-right">$1,478</td>
                                            <td class="text-right">$6,720</td>
                                        </tr>
                                        <tr>
                                            <td scope="row"><img src="assets/img/profile/profile-01.jpg" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Duke Turnbull</a></td>
                                            <td class="text-right">$1,338</td>
                                            <td class="text-right">$4,321</td>
                                        </tr>
                                        <tr>
                                            <td scope="row"><img src="assets/img/profile/profile-05.jpg" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Berry Cherry</a></td>
                                            <td class="text-right">$978</td>
                                            <td class="text-right">$3,720</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- My Tasks -->
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="caption">
                        <i class="ti-pencil-alt"></i> My Tasks
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Add New Task"><i class="ti-plus"></i></a>
                        <a href="javascript:;" class="btn btn-sm btn-outline-secondary" data-toggle="dropdown" aria-expanded="false">
                            <i class="ti-settings"></i> Settings <i class="ti-arrow-circle-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:;" class="dropdown-item">Action</a>
                            <a href="javascript:;" class="dropdown-item">Another Action</a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:;" class="dropdown-item">Some Setting</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row py-3">
                        <div class="col-md-3 col-6 d-flex flex-column align-items-center">
                            <h2 class="text-primary bold">10</h2>
                            Active
                        </div>
                        <div class="col-md-3 col-6 d-flex flex-column align-items-center">
                            <h2 class="text-success bold">2</h2>
                            In-Progress
                        </div>
                        <div class="col-md-3 col-6 d-flex flex-column align-items-center">
                            <h2 class="text-warning bold">3</h2>
                            On-Hold
                        </div>
                        <div class="col-md-3 col-6 d-flex flex-column align-items-center">
                            <h2 class="text-secondary bold">4</h2>
                            Completed
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 scrollbox-md" data-simplebar>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="d-flex align-items-baseline">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" class="custom-control-input" id="checkbox1" name="checkbox1">
                                            <label class="custom-control-label" for="checkbox1">&nbsp;</label>
                                        </div>
                                        <div class="pl-4">
                                            <strong>Doctor Appointment <i class="ti-hand-open text-warning"></i></strong><br>Annual checkup with doctor
                                        </div>
                                        <div class="ml-auto text-right">
                                            <div class="btn-group btn-group-sm">
                                                <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-check"></i></a>
                                                <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-baseline">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" class="custom-control-input" id="checkbox2" name="checkbox2">
                                            <label class="custom-control-label" for="checkbox2">&nbsp;</label>
                                        </div>
                                        <div class="pl-4">
                                            <strong>Write Unit Test <i class="ti-timer text-success"></i></strong><br>Unit test for dashboard widgets
                                        </div>
                                        <div class="ml-auto text-right">
                                            <div class="btn-group btn-group-sm">
                                                <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-check"></i></a>
                                                <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-baseline">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" class="custom-control-input" id="checkbox3" name="checkbox3">
                                            <label class="custom-control-label" for="checkbox3">&nbsp;</label>
                                        </div>
                                        <div class="pl-4">
                                            <strong>Annual Report <i class="ti-notepad text-primary"></i></strong><br>Design annual report cover
                                        </div>
                                        <div class="ml-auto text-right">
                                            <div class="btn-group btn-group-sm">
                                                <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-check"></i></a>
                                                <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-baseline">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" class="custom-control-input" id="checkbox4" name="checkbox4">
                                            <label class="custom-control-label" for="checkbox4">&nbsp;</label>
                                        </div>
                                        <div class="pl-4">
                                            <strong>Management Meeting <i class="ti-notepad text-primary"></i></strong><br>Coming up meeting with staffs
                                        </div>
                                        <div class="ml-auto text-right">
                                            <div class="btn-group btn-group-sm">
                                                <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-check"></i></a>
                                                <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-baseline">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" class="custom-control-input" id="checkbox5" name="checkbox5">
                                            <label class="custom-control-label" for="checkbox5">&nbsp;</label>
                                        </div>
                                        <div class="pl-4">
                                            <strong>Merge Development <i class="ti-timer text-success"></i></strong><br>Merge development branch with master
                                        </div>
                                        <div class="ml-auto text-right">
                                            <div class="btn-group btn-group-sm">
                                                <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-check"></i></a>
                                                <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-baseline">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" class="custom-control-input" id="checkbox6" name="checkbox6">
                                            <label class="custom-control-label" for="checkbox6">&nbsp;</label>
                                        </div>
                                        <div class="pl-4">
                                            <strong>Build Report <i class="ti-hand-open text-warning"></i></strong><br>Build report graph for dashboard
                                        </div>
                                        <div class="ml-auto text-right">
                                            <div class="btn-group btn-group-sm">
                                                <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-check"></i></a>
                                                <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-baseline">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" class="custom-control-input" id="checkbox7" name="checkbox7">
                                            <label class="custom-control-label" for="checkbox7">&nbsp;</label>
                                        </div>
                                        <div class="pl-4">
                                            <strong>Add New Vendor <i class="ti-hand-open text-warning"></i></strong><br>Add new third-party vendor
                                        </div>
                                        <div class="ml-auto text-right">
                                            <div class="btn-group btn-group-sm">
                                                <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-check"></i></a>
                                                <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Articles -->
    <div class="row" id="articles"></div>

    <div class="row">
        <!-- Product Sales Chart -->
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body" id="product-sales-chart"></div>
            </div>
        </div>

        <!-- Expenses Chart -->
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body" id="expenses-chart"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Company Timeline -->
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="caption text-primary">
                        <i class="ti-panel"></i> Company Timeline
                    </div>
                </div>
                <div class="card-body scrollbox-md" data-simplebar>
                    <div class="timeline-wrapper">
                        <div class="timeline-item" data-date="04-22-2020">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates quam nisi distinctio dolorum est tempora.</p>
                            <a href="javascript:;" class="btn btn-sm btn-primary">More Info</a>
                        </div>
                        <div class="timeline-item" data-date="04-16-2020">
                            <p>Completed dashboard layout and add all required widgets.</p>
                        </div>
                        <div class="timeline-item" data-date="04-14-2020">
                            <p>Added new page to UI Element category. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit officiis ut natus et minima expedita.</p>
                            <a href="javascript:;" class="btn btn-sm btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Memebers -->
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="caption text-primary">
                        <i class="ti-user"></i> Recent Members
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="ti-import" data-toggle="tooltip" title="Download List"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card">
                                <img src="assets/img/profile/profile-01.jpg" alt="" class="card-img-top">
                                <div class="card-body p-2 text-center">
                                    <h5 class="card-title">Jason Crispy</h5>
                                    <p class="card-text font-size-12">Lorem Ipsum text placeholder.</p>
                                    <a href="javascript:;" class="card-link"><i class="ti-twitter"></i> 3.5k</a>
                                    <a href="javascript:;" class="card-link"><i class="ti-facebook"></i> 2.4k</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card">
                                <img src="assets/img/profile/profile-02.jpg" alt="" class="card-img-top">
                                <div class="card-body p-2 text-center">
                                    <h5 class="card-title">Bob OfHope</h5>
                                    <p class="card-text font-size-12">Lorem Ipsum text placeholder.</p>
                                    <a href="javascript:;" class="card-link"><i class="ti-twitter"></i> 4.1k</a>
                                    <a href="javascript:;" class="card-link"><i class="ti-facebook"></i> 7.2k</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card">
                                <img src="assets/img/profile/profile-03.jpg" alt="" class="card-img-top">
                                <div class="card-body p-2 text-center">
                                    <h5 class="card-title">Dana Squash</h5>
                                    <p class="card-text font-size-12">Lorem Ipsum text placeholder.</p>
                                    <a href="javascript:;" class="card-link"><i class="ti-twitter"></i> 6.1k</a>
                                    <a href="javascript:;" class="card-link"><i class="ti-facebook"></i> 5.5k</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- EOF MAIN-BODY -->

</div>
@endsection