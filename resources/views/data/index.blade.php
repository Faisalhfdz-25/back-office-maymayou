@extends('layouts.master')
@section('title','Data ....')
@section('content')
<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col">
            <h1 class="page-header-title">@yield('title')</h1>
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
      <!-- Card -->
      <div class="card mb-3 mb-lg-5">
        <!-- Header -->
        <div class="card-header">
          <div class="row justify-content-between align-items-center flex-grow-1">
            <div class="col-md">
              <div class="d-flex justify-content-between align-items-center">
                {{-- <h4 class="card-header-title">Users</h4> --}}

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
                <td><a href="" onclick="hapus()">cek</a></td>
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

  <div class="modal fade" id="inviteUserModal" tabindex="-1" aria-labelledby="inviteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="inviteUserModalLabel">Invite users</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Body -->
        <div class="modal-body">
            <form>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <fieldset class="form-group">
                  <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                          First radio
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                          Second radio
                        </label>
                      </div>
                      <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                        <label class="form-check-label" for="gridRadios3">
                          Third disabled radio
                        </label>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <div class="form-group row">
                  <div class="col-sm-2">Checkbox</div>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                      </label>
                    </div>
                  </div>
                </div>
              </form>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer">
          <div class="row align-items-center flex-grow-1 mx-n2">
            <div class="col-sm-9 mb-2 mb-sm-0">
              
            </div>

            <div class="col-sm-3 text-sm-end">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>
  <script>
    $('#peg_nip').selectpicker().ajaxSelectPicker({
        ajax: {
            url: "{{url('perceraian/pengajuan/getPegawaiData')}}",
            data: function () {
                skpd_id = $('#mentoring_skpd_id').val();
                var params = {
                    _token: '{{csrf_token()}}',
                    q: '@{{{q}}}',
                    skpd_id: skpd_id
                };
                return params;
            }
        },
        locale: {
            emptyTitle: 'Ketikan NIP / Nama Pegawai...'
        },
        minLength: 2,
        preprocessData: function(data){
            var pegawais = [];
            if(data.hasOwnProperty('data')){
                var len = data.data.length;
                for(var i = 0; i < len; i++){
                    var curr = data.data[i];
                    pegawais.push(
                        {
                            'value': curr.peg_nip,
                            'text': '[' + curr.peg_nip + '] ' + curr.peg_nama_lengkap + ' - ' + curr.jabatan_nama,
                            'disabled': false
                        }
                    );
                }
            }
            return pegawais;
        },
        preserveSelected: true
    });

    function hapus(id) {
        Swal.fire({
            title: 'Yakin?',
            text: "Mau menghapus Pengajuan Perceraian ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#FF2C2C',
            confirmButtonText: 'Ya, Hapus aja!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    // url: "{{url('perceraian/pengajuan/hapus')}}",
                    type: "post",
                    data: {
                        _token: '{{csrf_token()}}',
                        id: id
                    },
                    dataType: "json",
                    success: function(data) {
                        console.log(data);
                        if (data) {
                            Swal.fire('Berhasil!', 'Pengajuan Perceraian berhasil dihapus.', 'success');
                            getPengajuanData();
                        } else {
                            Swal.fire('Gagal!', 'Pengajuan Perceraian gagal dihapus, silahkan refresh halaman ini kemudian coba lagi.', 'error');
                        }
                    },
                    error: function(err) {
                        Swal.fire('Error!', 'Lihat errornya di console.', 'error');
                    }
                });
            }
        })
    }

</script>
@endsection