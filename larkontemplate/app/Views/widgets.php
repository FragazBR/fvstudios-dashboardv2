<!DOCTYPE html>
<html lang="en">

<head>
     <?php echo view("partials/title-meta", array("title" => "Widgets")) ?>

     <?= $this->include("partials/head-css") ?>
</head>

<body>

     <!-- START Wrapper -->
     <div class="wrapper">

          <?php echo view("partials/topbar", array("title" => "Widgets")) ?>
          <?= $this->include('partials/main-nav') ?>

          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

               <!-- Start Container Fluid -->
               <div class="container-xxl">

                    <!-- Start here.... -->

                    <div class="row">
                         <div class="col-md-3">
                              <div class="card overflow-hidden">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-soft-primary rounded">
                                                       <iconify-icon icon="solar:cart-5-bold-duotone" class="avatar-title fs-32 text-primary"></iconify-icon>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Total Orders</p>
                                                  <h3 class="text-dark mt-1 mb-0">13, 647</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                                   <div class="card-footer py-2 bg-light bg-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                             <div>
                                                  <span class="text-success"> <i class="bx bxs-up-arrow fs-12"></i> 2.3%</span>
                                                  <span class="text-muted ms-1 fs-12">Last Week</span>
                                             </div>
                                             <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->

                         <div class="col-md-3">
                              <div class="card overflow-hidden">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-soft-primary rounded">
                                                       <i class="bx bx-award avatar-title fs-24 text-primary"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">New Leads</p>
                                                  <h3 class="text-dark mt-1 mb-0">9, 526</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                                   <div class="card-footer py-2 bg-light bg-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                             <div>
                                                  <span class="text-success"> <i class="bx bxs-up-arrow fs-12"></i> 8.1%</span>
                                                  <span class="text-muted ms-1 fs-12">Last Month</span>
                                             </div>
                                             <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->

                         <div class="col-md-3">
                              <div class="card overflow-hidden">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-soft-primary rounded">
                                                       <i class="bx bxs-backpack avatar-title fs-24 text-primary"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Deals</p>
                                                  <h3 class="text-dark mt-1 mb-0">976</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                                   <div class="card-footer py-2 bg-light bg-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                             <div>
                                                  <span class="text-danger"> <i class="bx bxs-down-arrow fs-12"></i> 0.3%</span>
                                                  <span class="text-muted ms-1 fs-12">Last Month</span>
                                             </div>
                                             <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->

                         <div class="col-md-3">
                              <div class="card overflow-hidden">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-soft-primary rounded">
                                                       <i class="bx bx-dollar-circle avatar-title text-primary fs-24"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Booked Revenue</p>
                                                  <h3 class="text-dark mt-1 mb-0">$123.6k</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                                   <div class="card-footer py-2 bg-light bg-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                             <div>
                                                  <span class="text-danger"> <i class="bx bxs-down-arrow fs-12"></i> 10.6%</span>
                                                  <span class="text-muted ms-1 fs-12">Last Month</span>
                                             </div>
                                             <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                         <div class="col">
                              <div class="card">
                                   <div class="card-body overflow-hidden position-relative">
                                        <iconify-icon icon="iconamoon:3d-duotone" class="fs-36 text-info"></iconify-icon>
                                        <h3 class="mb-0 fw-bold mt-3 mb-1">$59.6k</h3>
                                        <p class="text-muted">Total Income</p>
                                        <span class="badge fs-12 badge-soft-success"><i class="ti ti-arrow-badge-up"></i> 8.72%</span>
                                        <i class='bx bx-doughnut-chart widget-icon'></i>
                                   </div> <!-- end card-body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->

                         <div class="col">
                              <div class="card">
                                   <div class="card-body overflow-hidden position-relative">
                                        <iconify-icon icon="iconamoon:category-duotone" class="fs-36 text-success"></iconify-icon>
                                        <h3 class="mb-0 fw-bold mt-3 mb-1">$24.03k</h3>
                                        <p class="text-muted">Total Expenses</p>
                                        <span class="badge fs-12 badge-soft-danger"><i class="ti ti-arrow-badge-down"></i> 3.28%</span>
                                        <i class='bx bx-bar-chart-alt-2 widget-icon'></i>
                                   </div> <!-- end card-body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->

                         <div class="col">
                              <div class="card">
                                   <div class="card-body overflow-hidden position-relative">
                                        <iconify-icon icon="iconamoon:store-duotone" class="fs-36 text-purple"></iconify-icon>
                                        <h3 class="mb-0 fw-bold mt-3 mb-1">$48.7k</h3>
                                        <p class="text-muted">Investments</p>
                                        <span class="badge fs-12 badge-soft-danger"><i class="ti ti-arrow-badge-down"></i> 5.69%</span>
                                        <i class='bx bx-building-house widget-icon'></i>
                                   </div> <!-- end card-body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->

                         <div class="col">
                              <div class="card">
                                   <div class="card-body overflow-hidden position-relative">
                                        <iconify-icon icon="iconamoon:gift-duotone" class="fs-36 text-orange"></iconify-icon>
                                        <h3 class="mb-0 fw-bold mt-3 mb-1">$11.3k</h3>
                                        <p class="text-muted">Savings</p>
                                        <span class="badge fs-12 badge-soft-success"><i class="ti ti-arrow-badge-up"></i> 10.58%</span>
                                        <i class='bx bx-bowl-hot widget-icon'></i>
                                   </div> <!-- end card-body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->

                         <div class="col">
                              <div class="card">
                                   <div class="card-body overflow-hidden position-relative">
                                        <iconify-icon icon="iconamoon:certificate-badge-duotone" class="fs-36 text-warning"></iconify-icon>
                                        <h3 class="mb-0 fw-bold mt-3 mb-1">$5.5k</h3>
                                        <p class="text-muted">Profits</p>
                                        <span class="badge fs-12 badge-soft-success"><i class="ti ti-arrow-badge-up"></i> 2.25%</span>
                                        <i class='bx bx-cricket-ball widget-icon'></i>
                                   </div> <!-- end card-body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                    </div>
                    <!-- end row-->

                    <div class="row">
                         <div class="col-xl-6">
                              <div class="card">
                                   <div class="card-body p-0">
                                        <div class="pt-3 px-3">
                                             <div class="float-end">
                                                  <a href="javascript:void(0);" class="text-primary">Export
                                                       <i class="bx bx-export ms-1"></i>
                                                  </a>
                                             </div>
                                             <h5 class="card-title mb-3">Recent Project Summary</h5>
                                        </div>
                                        <div class="mb-3" data-simplebar style="max-height: 324px;">
                                             <div class="table-responsive table-centered table-nowrap px-3">
                                                  <table class="table table-hover mb-0">
                                                       <thead>
                                                            <tr>
                                                                 <th>Project</th>
                                                                 <th>Client</th>
                                                                 <th>Team</th>
                                                                 <th>Deadline</th>
                                                                 <th>Work Progress</th>
                                                            </tr>
                                                       </thead> <!-- end thead -->
                                                       <tbody>
                                                            <tr>
                                                                 <td>Zelogy</td>
                                                                 <td>Daniel Olsen</td>
                                                                 <td class="avatar-group">
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="/images/users/avatar-2.jpg" alt="avatar-2" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="/images/users/avatar-3.jpg" alt="avatar-3" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="/images/users/avatar-4.jpg" alt="avatar-4" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                 </td>
                                                                 <td>12 April 2024</td>
                                                                 <td>
                                                                      <div class="progress progress-sm">
                                                                           <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                                                      </div>
                                                                 </td>
                                                            </tr>

                                                            <tr>
                                                                 <td>Shiaz</td>
                                                                 <td>Jack Roldan</td>
                                                                 <td class="avatar-group">
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="/images/users/avatar-1.jpg" alt="avatar-1" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="/images/users/avatar-5.jpg" alt="avatar-5" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                 </td>
                                                                 <td>10 April 2024</td>
                                                                 <td>
                                                                      <div class="progress progress-sm">
                                                                           <div class="progress-bar bg-success" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                                                                      </div>
                                                                 </td>
                                                            </tr>
                                                            <tr>
                                                                 <td>Holderick</td>
                                                                 <td>Betty Cox</td>
                                                                 <td class="avatar-group">
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="/images/users/avatar-5.jpg" alt="avatar-5" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="/images/users/avatar-2.jpg" alt="avatar-2" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="/images/users/avatar-3.jpg" alt="avatar-3" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                 </td>
                                                                 <td>31 March 2024</td>
                                                                 <td>
                                                                      <div class="progress progress-sm">
                                                                           <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                      </div>
                                                                 </td>
                                                            </tr>
                                                            <tr>
                                                                 <td>Feyvux</td>
                                                                 <td>Carlos Johnson</td>
                                                                 <td class="avatar-group">
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="/images/users/avatar-3.jpg" alt="avatar-3" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="/images/users/avatar-7.jpg" alt="avatar-7" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="/images/users/avatar-6.jpg" alt="avatar-6" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                 </td>
                                                                 <td>25 March 2024</td>
                                                                 <td>
                                                                      <div class="progress progress-sm">
                                                                           <div class="progress-bar" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">
                                                                           </div>
                                                                      </div>
                                                                 </td>
                                                            </tr>
                                                            <tr>
                                                                 <td>Xavlox</td>
                                                                 <td>Lorraine Cox</td>
                                                                 <td class="avatar-group">
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="/images/users/avatar-7.jpg" alt="avatar-7" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                 </td>
                                                                 <td>22 March 2024</td>
                                                                 <td>
                                                                      <div class="progress progress-sm">
                                                                           <div class="progress-bar bg-danger" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                                                      </div>
                                                                 </td>
                                                            </tr>
                                                            <tr>
                                                                 <td>Mozacav</td>
                                                                 <td>Delores Young</td>
                                                                 <td class="avatar-group">
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="/images/users/avatar-3.jpg" alt="avatar-3" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="/images/users/avatar-4.jpg" alt="avatar-4" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="/images/users/avatar-2.jpg" alt="avatar-2" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                 </td>
                                                                 <td>15 March 2024</td>
                                                                 <td>
                                                                      <div class="progress progress-sm">
                                                                           <div class="progress-bar bg-blue" role="progressbar" style="width: 21%" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100"></div>
                                                                      </div>
                                                                 </td>
                                                            </tr>
                                                       </tbody> <!-- end tbody -->
                                                  </table> <!-- end table -->
                                             </div> <!-- end table responsive -->
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                         <div class="col-xl-6">
                              <div class="card">
                                   <div class="card-body ">
                                        <div class="dropdown float-end">
                                             <a href="javascript:void(0);" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                                  <i class="bx bx-dots-vertical-rounded fs-18 text-dark"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-end">
                                                  <a href="javascript:void(0);" class="dropdown-item">
                                                       <i class="bx bx-list-ul me-2"></i>To Do
                                                  </a>
                                                  <a href="javascript:void(0);" class="dropdown-item">
                                                       <i class="bx bx-line-chart me-2"></i>In Progress
                                                  </a>
                                                  <a href="javascript:void(0);" class="dropdown-item">
                                                       <i class="bx bx-check-square me-2"></i>Completed
                                                  </a>
                                             </div>
                                        </div>
                                        <h5 class="card-title mb-3">Today's Schedules</h5>
                                        <div class="row align-items-center">
                                             <div class="col-3 col-sm-2">
                                                  <p>09:00</p>
                                             </div>
                                             <div class="col-9 col-sm-10">
                                                  <div class="alert alert-primary px-2" role="alert">
                                                       <p class="mb-0">Setup Github Repository</p>
                                                       <p class="mb-0">09:00 - 10:00</p>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="row align-items-center">
                                             <div class="col-3 col-sm-2">
                                                  <p>10:00</p>
                                             </div>
                                             <div class="col-9 col-sm-10">
                                                  <div class="alert alert-success px-2" role="alert">
                                                       <p class="mb-0">Design Review - Larkon Admin</p>
                                                       <p class="mb-0">10:00 - 10:30</p>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="row align-items-center">
                                             <div class="col-3 col-sm-2">
                                                  <p>11:00</p>
                                             </div>
                                             <div class="col-9 col-sm-10">
                                                  <div class="alert alert-info px-2" role="alert">
                                                       <p class="mb-0">Meeting with BD Team</p>
                                                       <p class="mb-0">11:00 - 12:30</p>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="row align-items-center">
                                             <div class="col-3 col-sm-2">
                                                  <p class="mb-0">01:00</p>
                                             </div>
                                             <div class="col-9 col-sm-10">
                                                  <div class="alert alert-warning px-2 mb-0" role="alert">
                                                       <p class="mb-0">Meeting with Design Studio</p>
                                                       <p class="mb-0">01:00 - 02:00</p>
                                                  </div>
                                             </div>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                         <div class="col-md-6 col-xl-3">
                              <div class="card">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-primary rounded">
                                                       <i class="bx bx-layer avatar-title fs-24 text-white"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Campaign Sent</p>
                                                  <h3 class="text-dark mt-1 mb-0">13, 647</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                         <div class="col-md-6 col-xl-3">
                              <div class="card">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-success rounded">
                                                       <i class="bx bx-award avatar-title fs-24 text-white"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">New Leads</p>
                                                  <h3 class="text-dark mt-1 mb-0">9, 526</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                         <div class="col-md-6 col-xl-3">
                              <div class="card">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-danger rounded">
                                                       <i class="bx bxs-backpack avatar-title fs-24 text-white"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Deals</p>
                                                  <h3 class="text-dark mt-1 mb-0">976</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                         <div class="col-md-6 col-xl-3">
                              <div class="card">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md text-bg-warning rounded">
                                                       <i class="bx bx-dollar-circle avatar-title fs-24"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Booked Revenue</p>
                                                  <h3 class="text-dark mt-1 mb-0">$123</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                         <div class="col-12">
                              <div class="card">
                                   <div class="card-body p-0">
                                        <div class="row g-0">
                                             <div class="col-lg-4">
                                                  <div class="p-3">
                                                       <h5 class="card-title">Conversions</h5>
                                                       <div id="conversions" class="apex-charts mb-2 mt-n2"></div>
                                                       <div class="row text-center">
                                                            <div class="col-6">
                                                                 <p class="text-muted mb-2">This Week</p>
                                                                 <h3 class="text-dark mb-3">23.5k</h3>
                                                            </div> <!-- end col -->
                                                            <div class="col-6">
                                                                 <p class="text-muted mb-2">Last Week</p>
                                                                 <h3 class="text-dark mb-3">41.05k</h3>
                                                            </div> <!-- end col -->
                                                       </div> <!-- end row -->
                                                       <div class="text-center">
                                                            <button type="button" class="btn btn-light shadow-none w-100">View Details</button>
                                                       </div> <!-- end row -->
                                                  </div>
                                             </div> <!-- end left chart card -->
                                             <div class="col-lg-8 border-start border-5">
                                                  <div class="p-3">
                                                       <div class="d-flex justify-content-between align-items-center">
                                                            <h4 class="card-title">Performance</h4>
                                                            <div>
                                                                 <button type="button" class="btn btn-sm btn-outline-light">ALL</button>
                                                                 <button type="button" class="btn btn-sm btn-outline-light">1M</button>
                                                                 <button type="button" class="btn btn-sm btn-outline-light">6M</button>
                                                                 <button type="button" class="btn btn-sm btn-outline-light active">1Y</button>
                                                            </div>
                                                       </div> <!-- end card-title-->

                                                       <div class="alert alert-info mt-3 text text-truncate mb-0" role="alert">
                                                            We regret to inform you that our server is currently experiencing technical difficulties.
                                                       </div>

                                                       <div dir="ltr">
                                                            <div id="dash-performance-chart" class="apex-charts"></div>
                                                       </div>
                                                  </div>
                                             </div> <!-- end right chart card -->
                                        </div> <!-- end chart card -->
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col-->
                    </div> <!-- end row-->

                    <div class="row">
                         <div class="col-md-6 col-xl-3">
                              <div class="card">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-soft-primary rounded">
                                                       <i class="bx bx-layer avatar-title fs-24 text-primary"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Campaign Sent</p>
                                                  <h3 class="text-dark mt-1 mb-0">13, 647</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                                   <div class="card-footer py-2 bg-light bg-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                             <div>
                                                  <span class="text-success"> <i class="bx bxs-up-arrow fs-12"></i> 2.3%</span>
                                                  <span class="text-muted ms-1 fs-12">Last Month</span>
                                             </div>
                                             <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                         <div class="col-md-6 col-xl-3">
                              <div class="card">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-soft-success rounded">
                                                       <i class="bx bx-award avatar-title fs-24 text-success"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">New Leads</p>
                                                  <h3 class="text-dark mt-1 mb-0">9, 526</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                                   <div class="card-footer py-2 bg-light bg-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                             <div>
                                                  <span class="text-success"> <i class="bx bxs-up-arrow fs-12"></i> 8.1%</span>
                                                  <span class="text-muted ms-1 fs-12">Last Month</span>
                                             </div>
                                             <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                         <div class="col-md-6 col-xl-3">
                              <div class="card">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-soft-danger rounded">
                                                       <i class="bx bxs-backpack avatar-title fs-24 text-danger"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Deals</p>
                                                  <h3 class="text-dark mt-1 mb-0">976</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                                   <div class="card-footer py-2 bg-light bg-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                             <div>
                                                  <span class="text-danger"> <i class="bx bxs-down-arrow fs-12"></i> 0.3%</span>
                                                  <span class="text-muted ms-1 fs-12">Last Month</span>
                                             </div>
                                             <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                         <div class="col-md-6 col-xl-3">
                              <div class="card">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-soft-warning rounded">
                                                       <i class="bx bx-dollar-circle avatar-title text-warning fs-24"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Booked Revenue</p>
                                                  <h3 class="text-dark mt-1 mb-0">$123.6k</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                                   <div class="card-footer py-2 bg-light bg-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                             <div>
                                                  <span class="text-danger"> <i class="bx bxs-down-arrow fs-12"></i> 10.6%</span>
                                                  <span class="text-muted ms-1 fs-12">Last Month</span>
                                             </div>
                                             <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                         <div class="col-xl-4">
                              <div class="card">
                                   <div class="card-header d-flex justify-content-between align-items-center">
                                        <h4 class="card-title">My Tasks</h4>
                                        <div>
                                             <a href="#!" class="btn btn-sm btn-primary">
                                                  <i class="bx bx-plus me-1"></i>Create Task
                                             </a>
                                        </div>
                                   </div> <!-- end card-header-->
                                   <div class="card-body p-0 pb-3">
                                        <div class="p-3" data-simplebar style="max-height: 386px;">
                                             <div class="form-check form-todo ps-4">
                                                  <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-18" id="customCheck1">
                                                  <label class="form-check-label" for="customCheck1">Review system logs for any reported errors</label>
                                             </div>
                                             <div class="form-check form-todo py-1 my-2 ps-4">
                                                  <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-18" checked id="customCheck2">
                                                  <label class="form-check-label" for="customCheck2">Conduct user testing to identify potential bugs</label>
                                             </div>
                                             <div class="form-check form-todo py-1 my-2 ps-4">
                                                  <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-18" id="customCheck3">
                                                  <label class="form-check-label" for="customCheck3">Gather feedback from stakeholders</label>
                                             </div>
                                             <div class="form-check form-todo py-1 my-2 ps-4">
                                                  <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-18" id="customCheck4">
                                                  <label class="form-check-label" for="customCheck4">Prioritize bugs based on severity and impact </label>
                                             </div>
                                             <div class="form-check form-todo py-1 my-2 ps-4">
                                                  <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-18" id="customCheck5">
                                                  <label class="form-check-label" for="customCheck5">Investigate and analyze the root cause of each bug</label>
                                             </div>
                                             <div class="form-check form-todo py-1 my-2 ps-4">
                                                  <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-18" id="customCheck6">
                                                  <label class="form-check-label" for="customCheck6">Develop and implement fixes for the identified bugs</label>
                                             </div>
                                             <div class="form-check form-todo py-1 my-2 ps-4">
                                                  <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-18" id="customCheck7">
                                                  <label class="form-check-label" for="customCheck7">Complete any recurring tasks</label>
                                             </div>
                                             <div class="form-check form-todo py-1 my-2 ps-4">
                                                  <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-18" id="customCheck8">
                                                  <label class="form-check-label" for="customCheck8">Check emails and respond</label>
                                             </div>
                                             <div class="form-check form-todo py-1 my-2 ps-4">
                                                  <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-18" checked id="customCheck9">
                                                  <label class="form-check-label" for="customCheck9">Review schedule for the day</label>
                                             </div>
                                             <div class="form-check form-todo pt-1 mt-2 ps-4">
                                                  <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-18" id="customCheck10">
                                                  <label class="form-check-label" for="customCheck10">Daily stand-up meeting</label>
                                             </div>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card-->
                         </div> <!-- end col-->

                         <div class="col-xl-4">
                              <div class="card">
                                   <div class="card-header d-flex justify-content-between align-items-center">
                                        <h4 class="card-title">Friends Request (10)</h4>
                                   </div> <!-- end card-header-->
                                   <div class="card-body p-0 pb-3">
                                        <div class="p-3" data-simplebar style="max-height: 400px;">
                                             <div class="d-flex align-items-center mb-3">
                                                  <div class="flex-shrink-0">
                                                       <img src="/images/users/avatar-10.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-5" />
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h5 class="mb-1 fs-14"><a href="#!">Victoria P. Miller</a></h5>
                                                       <p class="mb-0">no mutual friends</p>
                                                  </div>
                                                  <div class="dropdown">
                                                       <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#!" class="dropdown-item">
                                                                 <i class="bx bxs-user-detail me-1"></i>See Profile
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bxl-telegram me-1"></i>Message to Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-user-x me-1"></i>Unfriend Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-block me-1"></i>Block Victoria
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="d-flex align-items-center mb-3">
                                                  <div class="flex-shrink-0">
                                                       <img src="/images/users/avatar-9.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-6" />
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h5 class="mb-1 fs-14"><a href="#!">Dallas C. Payne</a></h5>
                                                       <p class="mb-0">856 mutual friends</p>
                                                  </div>
                                                  <div class="dropdown">
                                                       <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#!" class="dropdown-item">
                                                                 <i class="bx bxs-user-detail me-1"></i>See Profile
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bxl-telegram me-1"></i>Message to Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-user-x me-1"></i>Unfriend Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-block me-1"></i>Block Victoria
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="d-flex align-items-center mb-3">
                                                  <div class="flex-shrink-0">
                                                       <img src="/images/users/avatar-8.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-7" />
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h5 class="mb-1 fs-14"><a href="#!">Florence A. Lopez</a></h5>
                                                       <p class="mb-0">52 mutual friends</p>
                                                  </div>
                                                  <div class="dropdown">
                                                       <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#!" class="dropdown-item">
                                                                 <i class="bx bxs-user-detail me-1"></i>See Profile
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bxl-telegram me-1"></i>Message to Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-user-x me-1"></i>Unfriend Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-block me-1"></i>Block Victoria
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="d-flex align-items-center mb-3">
                                                  <div class="flex-shrink-0">
                                                       <img src="/images/users/avatar-7.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-8" />
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h5 class="mb-1 fs-14"><a href="#!">Gail A. Nix</a></h5>
                                                       <p class="mb-0">12 mutual friends</p>
                                                  </div>
                                                  <div class="dropdown">
                                                       <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#!" class="dropdown-item">
                                                                 <i class="bx bxs-user-detail me-1"></i>See Profile
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bxl-telegram me-1"></i>Message to Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-user-x me-1"></i>Unfriend Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-block me-1"></i>Block Victoria
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="d-flex align-items-center mb-3">
                                                  <div class="flex-shrink-0">
                                                       <img src="/images/users/avatar-6.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-9" />
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h5 class="mb-1 fs-14"><a href="#!">Lynne J. Petty</a></h5>
                                                       <p class="mb-0">no mutual friends</p>
                                                  </div>
                                                  <div class="dropdown">
                                                       <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#!" class="dropdown-item">
                                                                 <i class="bx bxs-user-detail me-1"></i>See Profile
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bxl-telegram me-1"></i>Message to Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-user-x me-1"></i>Unfriend Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-block me-1"></i>Block Victoria
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>

                                             <div class="d-flex align-items-center mb-3">
                                                  <div class="flex-shrink-0">
                                                       <img src="/images/users/avatar-5.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-5" />
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h5 class="mb-1 fs-14"><a href="#!">Victoria P. Miller</a></h5>
                                                       <p class="mb-0">no mutual friends</p>
                                                  </div>
                                                  <div class="dropdown">
                                                       <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#!" class="dropdown-item">
                                                                 <i class="bx bxs-user-detail me-1"></i>See Profile
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bxl-telegram me-1"></i>Message to Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-user-x me-1"></i>Unfriend Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-block me-1"></i>Block Victoria
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="d-flex align-items-center mb-3">
                                                  <div class="flex-shrink-0">
                                                       <img src="/images/users/avatar-4.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-6" />
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h5 class="mb-1 fs-14"><a href="#!">Dallas C. Payne</a></h5>
                                                       <p class="mb-0">856 mutual friends</p>
                                                  </div>
                                                  <div class="dropdown">
                                                       <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#!" class="dropdown-item">
                                                                 <i class="bx bxs-user-detail me-1"></i>See Profile
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bxl-telegram me-1"></i>Message to Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-user-x me-1"></i>Unfriend Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-block me-1"></i>Block Victoria
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="d-flex align-items-center mb-3">
                                                  <div class="flex-shrink-0">
                                                       <img src="/images/users/avatar-3.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-7" />
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h5 class="mb-1 fs-14"><a href="#!">Florence A. Lopez</a></h5>
                                                       <p class="mb-0">52 mutual friends</p>
                                                  </div>
                                                  <div class="dropdown">
                                                       <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#!" class="dropdown-item">
                                                                 <i class="bx bxs-user-detail me-1"></i>See Profile
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bxl-telegram me-1"></i>Message to Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-user-x me-1"></i>Unfriend Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-block me-1"></i>Block Victoria
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="d-flex align-items-center mb-3">
                                                  <div class="flex-shrink-0">
                                                       <img src="/images/users/avatar-2.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-8" />
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h5 class="mb-1 fs-14"><a href="#!">Gail A. Nix</a></h5>
                                                       <p class="mb-0">12 mutual friends</p>
                                                  </div>
                                                  <div class="dropdown">
                                                       <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#!" class="dropdown-item">
                                                                 <i class="bx bxs-user-detail me-1"></i>See Profile
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bxl-telegram me-1"></i>Message to Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-user-x me-1"></i>Unfriend Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-block me-1"></i>Block Victoria
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0">
                                                       <img src="/images/users/avatar-1.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-9" />
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h5 class="mb-1 fs-14"><a href="#!">Lynne J. Petty</a></h5>
                                                       <p class="mb-0">no mutual friends</p>
                                                  </div>
                                                  <div class="dropdown">
                                                       <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#!" class="dropdown-item">
                                                                 <i class="bx bxs-user-detail me-1"></i>See Profile
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bxl-telegram me-1"></i>Message to Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-user-x me-1"></i>Unfriend Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-block me-1"></i>Block Victoria
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card-->
                         </div> <!-- end col-->

                         <div class="col-xl-4">
                              <div class="card">
                                   <div class="card-header d-flex justify-content-between align-items-center">
                                        <h4 class="card-title">Recent Transactions</h4>
                                        <div>
                                             <a href="#!" class="btn btn-sm btn-primary">
                                                  <i class="bx bx-plus me-1"></i>Add
                                             </a>
                                        </div>
                                   </div> <!-- end card-header-->
                                   <div class="card-body p-0">
                                        <div class="px-3" data-simplebar style="max-height: 406px;">
                                             <table class="table table-hover mb-0 table-centered">
                                                  <tbody>
                                                       <tr>
                                                            <td>24 April, 2024</td>
                                                            <td>$120.55</td>
                                                            <td><span class="badge bg-success">Cr</span></td>
                                                            <td>Commisions </td>
                                                       </tr>
                                                       <tr>
                                                            <td>24 April, 2024</td>
                                                            <td>$9.68</td>
                                                            <td><span class="badge bg-success">Cr</span></td>
                                                            <td>Affiliates </td>
                                                       </tr>
                                                       <tr>
                                                            <td>20 April, 2024</td>
                                                            <td>$105.22</td>
                                                            <td><span class="badge bg-danger">Dr</span></td>
                                                            <td>Grocery </td>
                                                       </tr>
                                                       <tr>
                                                            <td>18 April, 2024</td>
                                                            <td>$80.59</td>
                                                            <td><span class="badge bg-success">Cr</span></td>
                                                            <td>Refunds </td>
                                                       </tr>
                                                       <tr>
                                                            <td>18 April, 2024</td>
                                                            <td>$750.95</td>
                                                            <td><span class="badge bg-danger">Dr</span></td>
                                                            <td>Bill Payments </td>
                                                       </tr>
                                                       <tr>
                                                            <td>17 April, 2024</td>
                                                            <td>$455.62</td>
                                                            <td><span class="badge bg-danger">Dr</span></td>
                                                            <td>Electricity </td>
                                                       </tr>
                                                       <tr>
                                                            <td>17 April, 2024</td>
                                                            <td>$102.77</td>
                                                            <td><span class="badge bg-success">Cr</span></td>
                                                            <td>Interest </td>
                                                       </tr>
                                                       <tr>
                                                            <td>16 April, 2024</td>
                                                            <td>$79.49</td>
                                                            <td><span class="badge bg-success">Cr</span></td>
                                                            <td>Refunds </td>
                                                       </tr>
                                                       <tr>
                                                            <td>05 April, 2024</td>
                                                            <td>$980.00</td>
                                                            <td><span class="badge bg-danger">Dr</span></td>
                                                            <td>Shopping</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card-->
                         </div> <!-- end col-->

                    </div> <!-- end row-->

               </div>
               <!-- End Container Fluid -->

               <?= $this->include("partials/footer") ?>

          </div>
          <!-- ==================================================== -->
          <!-- End Page Content -->
          <!-- ==================================================== -->

     </div>
     <!-- END Wrapper -->

     <?= $this->include("partials/vendor-scripts") ?>

     <!-- Dashboard Js -->
     <script src="/js/pages/widgets.js"></script>

</body>

</html>