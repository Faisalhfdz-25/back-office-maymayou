@extends('layouts.master')
@section('title', 'Dashboard May Mayou')
@section('content')
<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col">
            <h1 class="page-header-title">Dashboard</h1>
          </div>
          <!-- End Col -->

          <div class="col-auto">
            <a class="btn btn-primary" href="javascript:;" data-bs-toggle="modal" data-bs-target="#inviteUserModal">
              <i class="bi-person-plus-fill me-1"></i> Invite users
            </a>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <!-- Stats -->
      <div class="row">
        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
          <!-- Card -->
          <a class="card card-hover-shadow h-100" href="#">
            <div class="card-body">
              <h6 class="card-subtitle">Total Users</h6>

              <div class="row align-items-center gx-2 mb-1">
                <div class="col-6">
                  <h2 class="card-title text-inherit">72,540</h2>
                </div>
                <!-- End Col -->

                <div class="col-6">
                  <!-- Chart -->
                  <div class="chartjs-custom" style="height: 3rem;">
                    <canvas class="js-chart" data-hs-chartjs-options='{
                              "type": "line",
                              "data": {
                                 "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                 "datasets": [{
                                  "data": [21,20,24,20,18,17,15,17,18,30,31,30,30,35,25,35,35,40,60,90,90,90,85,70,75,70,30,30,30,50,72],
                                  "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                  "borderColor": "#377dff",
                                  "borderWidth": 2,
                                  "pointRadius": 0,
                                  "pointHoverRadius": 0
                                }]
                              },
                              "options": {
                                 "scales": {
                                   "y": {
                                     "display": false
                                   },
                                   "x": {
                                     "display": false
                                   }
                                 },
                                "hover": {
                                  "mode": "nearest",
                                  "intersect": false
                                },
                                "plugins": {
                                  "tooltip": {
                                    "postfix": "k",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }
                            }'>
                    </canvas>
                  </div>
                  <!-- End Chart -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <span class="badge bg-soft-success text-success">
                <i class="bi-graph-up"></i> 12.5%
              </span>
              <span class="text-body fs-6 ms-1">from 70,104</span>
            </div>
          </a>
          <!-- End Card -->
        </div>

        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
          <!-- Card -->
          <a class="card card-hover-shadow h-100" href="#">
            <div class="card-body">
              <h6 class="card-subtitle">Sessions</h6>

              <div class="row align-items-center gx-2 mb-1">
                <div class="col-6">
                  <h2 class="card-title text-inherit">29.4%</h2>
                </div>
                <!-- End Col -->

                <div class="col-6">
                  <!-- Chart -->
                  <div class="chartjs-custom" style="height: 3rem;">
                    <canvas class="js-chart" data-hs-chartjs-options='{
                              "type": "line",
                              "data": {
                                 "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                 "datasets": [{
                                  "data": [21,20,24,20,18,17,15,17,30,30,35,25,18,30,31,35,35,90,90,90,85,100,120,120,120,100,90,75,75,75,90],
                                  "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                  "borderColor": "#377dff",
                                  "borderWidth": 2,
                                  "pointRadius": 0,
                                  "pointHoverRadius": 0
                                }]
                              },
                              "options": {
                                 "scales": {
                                   "y": {
                                     "display": false
                                   },
                                   "x": {
                                     "display": false
                                   }
                                 },
                                "hover": {
                                  "mode": "nearest",
                                  "intersect": false
                                },
                                "plugins": {
                                  "tooltip": {
                                    "postfix": "k",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }
                            }'>
                    </canvas>
                  </div>
                  <!-- End Chart -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <span class="badge bg-soft-success text-success">
                <i class="bi-graph-up"></i> 1.7%
              </span>
              <span class="text-body fs-6 ms-1">from 29.1%</span>
            </div>
          </a>
          <!-- End Card -->
        </div>

        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
          <!-- Card -->
          <a class="card card-hover-shadow h-100" href="#">
            <div class="card-body">
              <h6 class="card-subtitle">Avg. Click Rate</h6>

              <div class="row align-items-center gx-2 mb-1">
                <div class="col-6">
                  <h2 class="card-title text-inherit">56.8%</h2>
                </div>
                <!-- End Col -->

                <div class="col-6">
                  <!-- Chart -->
                  <div class="chartjs-custom" style="height: 3rem;">
                    <canvas class="js-chart" data-hs-chartjs-options='{
                              "type": "line",
                              "data": {
                                 "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                 "datasets": [{
                                  "data": [25,18,30,31,35,35,60,60,60,75,21,20,24,20,18,17,15,17,30,120,120,120,100,90,75,90,90,90,75,70,60],
                                  "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                  "borderColor": "#377dff",
                                  "borderWidth": 2,
                                  "pointRadius": 0,
                                  "pointHoverRadius": 0
                                }]
                              },
                              "options": {
                                 "scales": {
                                   "y": {
                                     "display": false
                                   },
                                   "x": {
                                     "display": false
                                   }
                                 },
                                "hover": {
                                  "mode": "nearest",
                                  "intersect": false
                                },
                                "plugins": {
                                  "tooltip": {
                                    "postfix": "k",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }
                            }'>
                    </canvas>
                  </div>
                  <!-- End Chart -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <span class="badge bg-soft-danger text-danger">
                <i class="bi-graph-down"></i> 4.4%
              </span>
              <span class="text-body fs-6 ms-1">from 61.2%</span>
            </div>
          </a>
          <!-- End Card -->
        </div>

        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
          <!-- Card -->
          <a class="card card-hover-shadow h-100" href="#">
            <div class="card-body">
              <h6 class="card-subtitle">Pageviews</h6>

              <div class="row align-items-center gx-2 mb-1">
                <div class="col-6">
                  <h2 class="card-title text-inherit">92,913</h2>
                </div>
                <!-- End Col -->

                <div class="col-6">
                  <!-- Chart -->
                  <div class="chartjs-custom" style="height: 3rem;">
                    <canvas class="js-chart" data-hs-chartjs-options='{
                              "type": "line",
                              "data": {
                                 "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                 "datasets": [{
                                  "data": [21,20,24,15,17,30,30,35,35,35,40,60,12,90,90,85,70,75,43,75,90,22,120,120,90,85,100,92,92,92,92],
                                  "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                  "borderColor": "#377dff",
                                  "borderWidth": 2,
                                  "pointRadius": 0,
                                  "pointHoverRadius": 0
                                }]
                              },
                              "options": {
                                 "scales": {
                                   "y": {
                                     "display": false
                                   },
                                   "x": {
                                     "display": false
                                   }
                                 },
                                "hover": {
                                  "mode": "nearest",
                                  "intersect": false
                                },
                                "plugins": {
                                  "tooltip": {
                                    "postfix": "k",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }
                            }'>
                    </canvas>
                  </div>
                  <!-- End Chart -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <span class="badge bg-soft-secondary text-body">0.0%</span>
              <span class="text-body fs-6 ms-1">from 2,913</span>
            </div>
          </a>
          <!-- End Card -->
        </div>
      </div>
      <!-- End Stats -->

      <div class="row">
        <div class="col-lg-5 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-100">
            <!-- Header -->
            <div class="card-header card-header-content-between">
              <h4 class="card-header-title">Import data into Front Dashboard</h4>

              <!-- Dropdown -->
              <div class="dropdown">
                <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="reportsOverviewDropdown2" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi-three-dots-vertical"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="reportsOverviewDropdown2">
                  <span class="dropdown-header">Settings</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-share-fill dropdown-item-icon"></i> Share chart
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-download dropdown-item-icon"></i> Download
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-alt dropdown-item-icon"></i> Connect other apps
                  </a>

                  <div class="dropdown-divider"></div>

                  <span class="dropdown-header">Feedback</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <p>See and talk to your users and leads immediately by importing your data into the Front Dashboard platform.</p>

              <ul class="list-group list-group-flush list-group-no-gutters">
                <li class="list-group-item">
                  <h5 class="card-title">Import users from:</h5>
                </li>

                <!-- List Group Item -->
                <li class="list-group-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-xs avatar-4x3" src="assets/svg/brands/capsule-icon.svg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <div class="row align-items-center">
                        <div class="col">
                          <h5 class="mb-0">Capsule</h5>
                          <span class="d-block fs-6 text-body">Users</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <a class="btn btn-primary btn-sm" href="#" title="Launch importer" target="_blank">
                            Launch <span class="d-none d-sm-inline-block">importer</span>
                            <i class="bi-box-arrow-up-right ms-1"></i>
                          </a>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                  </div>
                </li>
                <!-- End List Group Item -->

                <!-- List Group Item -->
                <li class="list-group-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-xs avatar-4x3" src="assets/svg/brands/mailchimp-icon.svg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <div class="row align-items-center">
                        <div class="col">
                          <h5 class="mb-0">Mailchimp</h5>
                          <span class="d-block fs-6 text-body">Users</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <a class="btn btn-primary btn-sm" href="#" title="Launch importer" target="_blank">
                            Launch <span class="d-none d-sm-inline-block">importer</span>
                            <i class="bi-box-arrow-up-right ms-1"></i>
                          </a>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                  </div>
                </li>
                <!-- End List Group Item -->

                <!-- List Group Item -->
                <li class="list-group-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-xs avatar-4x3" src="assets/svg/brands/google-webdev-icon.svg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <div class="row align-items-center">
                        <div class="col">
                          <h5 class="mb-0">Webdev</h5>
                          <span class="d-block fs-6 text-body">Users</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <a class="btn btn-primary btn-sm" href="#" title="Launch importer" target="_blank">
                            Launch <span class="d-none d-sm-inline-block">importer</span>
                            <i class="bi-box-arrow-up-right ms-1"></i>
                          </a>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                  </div>
                </li>
                <!-- End List Group Item -->

                <li class="list-group-item"><span class="small text-muted">Or you can <a class="link" href="#">sync data to Front Dashboard</a> to ensure your data is always up-to-date.</span></li>
              </ul>
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-lg-7 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-100">
            <!-- Header -->
            <div class="card-header card-header-content-sm-between">
              <h4 class="card-header-title mb-2 mb-sm-0">Monthly expenses</h4>

              <!-- Nav -->
              <ul class="nav nav-segment nav-fill" id="expensesTab" role="tablist">
                <li class="nav-item" data-bs-toggle="chart-bar" data-datasets="thisWeek" data-trigger="click" data-action="toggle">
                  <a class="nav-link active" href="javascript:;" data-bs-toggle="tab">This week</a>
                </li>
                <li class="nav-item" data-bs-toggle="chart-bar" data-datasets="lastWeek" data-trigger="click" data-action="toggle">
                  <a class="nav-link" href="javascript:;" data-bs-toggle="tab">Last week</a>
                </li>
              </ul>
              <!-- End Nav -->
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <div class="row mb-4">
                <div class="col-sm mb-2 mb-sm-0">
                  <div class="d-flex align-items-center">
                    <span class="h1 mb-0">35%</span>
                    <span class="text-success ms-2">
                      <i class="bi-graph-up"></i> 25.3%
                    </span>
                  </div>
                </div>
                <!-- End Col -->

                <div class="col-sm-auto align-self-sm-end">
                  <div class="row fs-6 text-body">
                    <div class="col-auto">
                      <span class="legend-indicator bg-primary"></span> New
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <span class="legend-indicator"></span> Overdue
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <!-- Bar Chart -->
              <div class="chartjs-custom">
                <canvas id="updatingBarChart" style="height: 20rem;" data-hs-chartjs-options='{
                          "type": "bar",
                          "data": {
                            "labels": ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"],
                            "datasets": [{
                              "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                              "backgroundColor": "#377dff",
                              "hoverBackgroundColor": "#377dff",
                              "borderColor": "#377dff",
                              "maxBarThickness": "10"
                            },
                            {
                              "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
                              "backgroundColor": "#e7eaf3",
                              "borderColor": "#e7eaf3",
                              "maxBarThickness": "10"
                            }]
                          },
                          "options": {
                            "scales": {
                              "y": {
                                "grid": {
                                  "color": "#e7eaf3",
                                  "drawBorder": false,
                                  "zeroLineColor": "#e7eaf3"
                                },
                                "ticks": {
                                  "beginAtZero": true,
                                  "stepSize": 100,
                                  "fontSize": 12,
                                  "fontColor":  "#97a4af",
                                  "fontFamily": "Open Sans, sans-serif",
                                  "padding": 10,
                                  "postfix": "$"
                                }
                              },
                              "x": {
                                "grid": {
                                  "display": false,
                                  "drawBorder": false
                                },
                                "ticks": {
                                  "fontSize": 12,
                                  "fontColor":  "#97a4af",
                                  "fontFamily": "Open Sans, sans-serif",
                                  "padding": 5
                                },
                                "categoryPercentage": 0.5,
                                "maxBarThickness": "10"
                              }
                            },
                            "cornerRadius": 2,
                            "plugins": {
                              "tooltip": {
                                "prefix": "$",
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false
                              }
                            },
                            "hover": {
                              "mode": "nearest",
                              "intersect": true
                            }
                          }
                        }'></canvas>
              </div>
              <!-- End Bar Chart -->
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <!-- Card -->
      <div class="card mb-3 mb-lg-5">
        <!-- Header -->
        <div class="card-header">
          <div class="row justify-content-between align-items-center flex-grow-1">
            <div class="col-md">
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-header-title">Users</h4>

                <!-- Datatable Info -->
                <div id="datatableCounterInfo" style="display: none;">
                  <div class="d-flex align-items-center">
                    <span class="fs-6 me-3">
                      <span id="datatableCounter">0</span>
                      Selected
                    </span>
                    <a class="btn btn-outline-danger btn-sm" href="javascript:;">
                      <i class="tio-delete-outlined"></i> Delete
                    </a>
                  </div>
                </div>
                <!-- End Datatable Info -->
              </div>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <!-- Filter -->
              <div class="row align-items-sm-center">
                <div class="col-sm-auto">
                  <div class="row align-items-center gx-0">
                    <div class="col">
                      <span class="text-secondary me-2">Status:</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-end">
                        <select class="js-select js-datatable-filter form-select form-select-sm form-select-borderless" data-target-column-index="2" data-target-table="datatable" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "10rem"
                                }'>
                          <option value="null" selected>All</option>
                          <option value="successful">Successful</option>
                          <option value="overdue">Overdue</option>
                          <option value="pending">Pending</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Col -->

                <div class="col-sm-auto">
                  <div class="row align-items-center gx-0">
                    <div class="col">
                      <span class="text-secondary me-2">Signed up:</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-end">
                        <select class="js-select js-datatable-filter form-select form-select-sm form-select-borderless" data-target-column-index="5" data-target-table="datatable" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "10rem"
                                }'>
                          <option value="null" selected>All</option>
                          <option value="1 year ago">1 year ago</option>
                          <option value="6 months ago">6 months ago</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Col -->

                <div class="col-md">
                  <form>
                    <!-- Search -->
                    <div class="input-group input-group-merge input-group-flush">
                      <div class="input-group-prepend input-group-text">
                        <i class="bi-search"></i>
                      </div>
                      <input id="datatableSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
                    </div>
                    <!-- End Search -->
                  </form>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Filter -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Header -->

        <!-- Table -->
        <div class="table-responsive datatable-custom">
          <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                   "columnDefs": [{
                      "targets": [0, 1, 4],
                      "orderable": false
                    }],
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty"
                   },
                   "search": "#datatableSearch",
                   "entries": "#datatableEntries",
                   "pageLength": 8,
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatablePagination"
                 }'>
            <thead class="thead-light">
              <tr>
                <th scope="col" class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                    <label class="form-check-label" for="datatableCheckAll"></label>
                  </div>
                </th>
                <th class="table-column-ps-0">Full name</th>
                <th>Status</th>
                <th>Type</th>
                <th>Email</th>
                <th>Signed up</th>
                <th>User ID</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck2">
                    <label class="form-check-label" for="usersDataCheck2"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-circle">
                        <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-success"></span>Successful
                </td>
                <td>Unassigned</td>
                <td>amanda@site.com</td>
                <td>1 year ago</td>
                <td>67989</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck3">
                    <label class="form-check-label" for="usersDataCheck3"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-soft-primary avatar-circle">
                        <span class="avatar-initials">A</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Anne Richard</h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-success"></span>Successful
                </td>
                <td>Subscription</td>
                <td>anne@site.com</td>
                <td>6 months ago</td>
                <td>67326</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck4">
                    <label class="form-check-label" for="usersDataCheck4"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-circle">
                        <img class="avatar-img" src="assets/img/160x160/img3.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">David Harrison</h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Overdue
                </td>
                <td>Non-subscription</td>
                <td>david@site.com</td>
                <td>6 months ago</td>
                <td>55821</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck5">
                    <label class="form-check-label" for="usersDataCheck5"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-circle">
                        <img class="avatar-img" src="assets/img/160x160/img5.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Finch Hoot</h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
                <td>Subscription</td>
                <td>finch@site.com</td>
                <td>1 year ago</td>
                <td>85214</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck6">
                    <label class="form-check-label" for="usersDataCheck6"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">B</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Bob Dean</h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-success"></span>Successful
                </td>
                <td>Subscription</td>
                <td>bob@site.com</td>
                <td>6 months ago</td>
                <td>75470</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck7">
                    <label class="form-check-label" for="usersDataCheck7"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-circle">
                        <img class="avatar-img" src="assets/img/160x160/img9.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Ella Lauda <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
                <td>Subscription</td>
                <td>Ella@site.com</td>
                <td>1 year ago</td>
                <td>37534</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck8">
                    <label class="form-check-label" for="usersDataCheck8"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-circle">
                        <img class="avatar-img" src="assets/img/160x160/img4.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Sam Kart</h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-success"></span>Successful
                </td>
                <td>Non-subscription</td>
                <td>sam@site.com</td>
                <td>1 year ago</td>
                <td>57300</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck9">
                    <label class="form-check-label" for="usersDataCheck9"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-circle">
                        <img class="avatar-img" src="assets/img/160x160/img6.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Costa Quinn</h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Overdue
                </td>
                <td>Unassigned</td>
                <td>costa@site.com</td>
                <td>1 year ago</td>
                <td>71288</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck10">
                    <label class="form-check-label" for="usersDataCheck10"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-soft-primary avatar-circle">
                        <span class="avatar-initials">R</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Rachel Doe</h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
                <td>Unassigned</td>
                <td>rachel@site.com</td>
                <td>6 months ago</td>
                <td>95211</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck11">
                    <label class="form-check-label" for="usersDataCheck11"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">B</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Brian Halligan</h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
                <td>Subscription</td>
                <td>brian@site.com</td>
                <td>1 year ago</td>
                <td>58643</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck12">
                    <label class="form-check-label" for="usersDataCheck12"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-circle">
                        <img class="avatar-img" src="assets/img/160x160/img8.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Linda Bates</h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
                <td>Subscription</td>
                <td>linda@site.com</td>
                <td>1 year ago</td>
                <td>44414</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck13">
                    <label class="form-check-label" for="usersDataCheck13"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-soft-info avatar-circle">
                        <span class="avatar-initials">C</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Chris Mathew <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-success"></span>Successful
                </td>
                <td>Non-subscription</td>
                <td>chris@site.com</td>
                <td>1 year ago</td>
                <td>12569</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck14">
                    <label class="form-check-label" for="usersDataCheck14"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">L</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Lewis Clarke</h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Overdue
                </td>
                <td>Non-subscription</td>
                <td>lewis@site.com</td>
                <td>1 year ago</td>
                <td>54621</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck15">
                    <label class="form-check-label" for="usersDataCheck15"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-circle">
                        <img class="avatar-img" src="assets/img/160x160/img7.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Clarice Boone <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-success"></span>Successful
                </td>
                <td>Non-subscription</td>
                <td>clarice@site.com</td>
                <td>6 months ago</td>
                <td>23485</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck16">
                    <label class="form-check-label" for="usersDataCheck16"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-soft-danger avatar-circle">
                        <span class="avatar-initials">M</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Mark Colbert</h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-success"></span>Successful
                </td>
                <td>Subscription</td>
                <td>mark@site.com</td>
                <td>6 months ago</td>
                <td>78463</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck17">
                    <label class="form-check-label" for="usersDataCheck17"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-soft-info avatar-circle">
                        <span class="avatar-initials">J</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Johnny Appleseed</h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
                <td>Subscription</td>
                <td>johnny@site.com</td>
                <td>1 year ago</td>
                <td>23564</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck18">
                    <label class="form-check-label" for="usersDataCheck18"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-soft-primary avatar-circle">
                        <span class="avatar-initials">P</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Phileas Fogg</h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
                <td>Subscription</td>
                <td>phileas@site.com</td>
                <td>6 months ago</td>
                <td>39199</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- End Table -->

        <!-- Footer -->
        <div class="card-footer">
          <!-- Pagination -->
          <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
            <div class="col-sm mb-2 mb-sm-0">
              <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                <span class="me-2">Showing:</span>

                <!-- Select -->
                <div class="tom-select-custom">
                  <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto" autocomplete="off" data-hs-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true
                          }'>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="8" selected>8</option>
                    <option value="12">12</option>
                  </select>
                </div>
                <!-- End Select -->

                <span class="text-secondary me-2">of</span>

                <!-- Pagination Quantity -->
                <span id="datatableWithPaginationInfoTotalQty"></span>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm-auto">
              <div class="d-flex justify-content-center justify-content-sm-end">
                <!-- Pagination -->
                <nav id="datatablePagination" aria-label="Activity pagination"></nav>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Pagination -->
        </div>
        <!-- End Footer -->
      </div>
      <!-- End Card -->

      <div class="row">
        <div class="col-lg-6 mb-3 mb-lg-0">
          <!-- Card -->
          <div class="card h-100">
            <!-- Header -->
            <div class="card-header card-header-content-sm-between">
              <h4 class="card-header-title mb-2 mb-sm-0">Transactions</h4>

              <!-- Daterangepicker -->
              <button id="js-daterangepicker-predefined" class="btn btn-ghost-secondary btn-sm dropdown-toggle">
                <i class="bi-calendar-week"></i>
                <span class="js-daterangepicker-predefined-preview ms-1"></span>
              </button>
              <!-- End Daterangepicker -->
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <!-- Chart -->
              <div class="chartjs-custom mx-auto" style="height: 20rem;">
                <canvas class="js-chart-datalabels" data-hs-chartjs-options='{
                              "type": "bubble",
                              "data": {
                                "datasets": [
                                  {
                                    "label": "Label 1",
                                    "data": [
                                      {"x": 50, "y": 65, "r": 99}
                                    ],
                                    "color": "#fff",
                                    "backgroundColor": "rgba(55, 125, 255, 0.9)",
                                    "borderColor": "transparent"
                                  },
                                  {
                                    "label": "Label 2",
                                    "data": [
                                      {"x": 46, "y": 42, "r": 65}
                                    ],
                                    "color": "#fff",
                                    "backgroundColor": "rgba(100, 0, 214, 0.8)",
                                    "borderColor": "transparent"
                                  },
                                  {
                                    "label": "Label 3",
                                    "data": [
                                      {"x": 48, "y": 15, "r": 38}
                                    ],
                                    "color": "#fff",
                                    "backgroundColor": "#00c9db",
                                    "borderColor": "transparent"
                                  },
                                  {
                                    "label": "Label 3",
                                    "data": [
                                      {"x": 55, "y": 2, "r": 61}
                                    ],
                                    "color": "#fff",
                                    "backgroundColor": "#4338ca",
                                    "borderColor": "transparent"
                                  }
                                ]
                              },
                              "options": {
                                "scales": {
                                  "y": {
                                    "grid": {
                                      "display": false,
                                      "drawBorder": false
                                    },
                                    "ticks": {
                                      "display": false,
                                      "max": 100,
                                      "beginAtZero": true
                                    }
                                  },
                                  "x": {
                                  "grid": {
                                      "display": false,
                                      "drawBorder": false
                                    },
                                    "ticks": {
                                      "display": false,
                                      "max": 100,
                                      "beginAtZero": true
                                    }
                                  }
                                },
                                "plugins": {
                                  "tooltip": false
                                }
                              }
                            }'></canvas>
              </div>
              <!-- End Chart -->

              <div class="row justify-content-center">
                <div class="col-auto">
                  <span class="legend-indicator bg-primary"></span> New
                </div>
                <!-- End Col -->

                <div class="col-auto">
                  <span class="legend-indicator" style="background-color: #7000f2;"></span> Pending
                </div>
                <!-- End Col -->

                <div class="col-auto">
                  <span class="legend-indicator bg-info"></span> Failed
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>

        <div class="col-lg-6">
          <!-- Card -->
          <div class="card h-100">
            <!-- Header -->
            <div class="card-header card-header-content-between">
              <h4 class="card-header-title">Reports overview</h4>

              <!-- Dropdown -->
              <div class="dropdown">
                <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="reportsOverviewDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi-three-dots-vertical"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="reportsOverviewDropdown1">
                  <span class="dropdown-header">Settings</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-share-fill dropdown-item-icon"></i> Share reports
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-download dropdown-item-icon"></i> Download
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-alt dropdown-item-icon"></i> Connect other apps
                  </a>

                  <div class="dropdown-divider"></div>

                  <span class="dropdown-header">Feedback</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <span class="h1 d-block mb-4">$7,431.14 USD</span>

              <!-- Progress -->
              <div class="progress rounded-pill mb-2">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Gross value"></div>
                <div class="progress-bar opacity-50" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Net volume from sales"></div>
                <div class="progress-bar opacity-25" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="New volume from sales"></div>
              </div>

              <div class="d-flex justify-content-between mb-4">
                <span>0%</span>
                <span>100%</span>
              </div>
              <!-- End Progress -->

              <!-- Table -->
              <div class="table-responsive">
                <table class="table table-lg table-nowrap card-table mb-0">
                  <tr>
                    <th scope="row">
                      <span class="legend-indicator bg-primary"></span>Gross value
                    </th>
                    <td>$3,500.71</td>
                    <td>
                      <span class="badge bg-soft-success text-success">+12.1%</span>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <span class="legend-indicator bg-primary opacity-50"></span>Net volume from sales
                    </th>
                    <td>$2,980.45</td>
                    <td>
                      <span class="badge bg-soft-warning text-warning">+6.9%</span>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <span class="legend-indicator bg-primary opacity-25"></span>New volume from sales
                    </th>
                    <td>$950.00</td>
                    <td>
                      <span class="badge bg-soft-danger text-danger">-1.5%</span>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <span class="legend-indicator"></span>Other
                    </th>
                    <td>32</td>
                    <td>
                      <span class="badge bg-soft-success text-success">1.9%</span>
                    </td>
                  </tr>
                </table>
              </div>
              <!-- End Table -->
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>
      </div>
    </div>
    <!-- End Content -->

    <!-- Footer -->
    
    <div class="footer">
      <div class="row justify-content-between align-items-center">
        <div class="col">
          <p class="fs-6 mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2022 Htmlstream.</span></p>
        </div>
        <!-- End Col -->

        <div class="col-auto">
          <div class="d-flex justify-content-end">
            <!-- List Separator -->
            <ul class="list-inline list-separator">
              <li class="list-inline-item">
                <a class="list-separator-link" href="#">FAQ</a>
              </li>

              <li class="list-inline-item">
                <a class="list-separator-link" href="#">License</a>
              </li>

              <li class="list-inline-item">
                <!-- Keyboard Shortcuts Toggle -->
                <button class="btn btn-ghost-secondary btn btn-icon btn-ghost-secondary rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasKeyboardShortcuts" aria-controls="offcanvasKeyboardShortcuts">
                  <i class="bi-command"></i>
                </button>
                <!-- End Keyboard Shortcuts Toggle -->
              </li>
            </ul>
            <!-- End List Separator -->
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>

    <!-- End Footer -->
  </main>
@endsection