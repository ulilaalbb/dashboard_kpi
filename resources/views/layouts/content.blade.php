<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard FNT</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Experience Bar -->
    <section class="content">
      <div class="container mt-2 mb-5 mx-5">
        <div class="custom-section ">
          <div class="row d-flex justify-content-between text-center">
            <div class="col-3 ">
              <img src="{{asset('AdminLTE-3.2.0')}}/dist/img/robot.png" class="img-fluid" alt="User Image">
            </div>
            <div class="col-6 ">
              <h3>Hi Farhan!</h3>
              <h5>Anda telah meraih <strong>263 Exp</strong> dan meraih title
              <strong>QA Master</strong>. Tingkatkan lagi aktivitas anda untuk meraih reward berikutnya</h5>
              
              <div class="progress">
                
                <div class="progress-bar bg-purple rounded text-black" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" >
                
                </div>
            </div>
            <span class="text-black">Next Reward: 300 Exp</span>
              
            </div>
            <div class="col-3 d-flex flex-column justify-content-between">
              <div class="bg-white rounded d-flex flex-column justify-content-between">
                <div class="row px-2 py-1">
                  <div class="col">
                    <div class="nav-item  d-flex align-items-center">
                      <i class="fa fa-list mr-3"></i>
                      <p class="mb-1">82 test case</p>
                    </div>
                  </div>
                  
                </div>
                <div class="row px-2 py-1">
                  <div class="col">
                    <div class="nav-item  d-flex align-items-center">
                      <i class="fa fa-bug mr-3"></i>
                      <p class="mb-1">82 test case</p>
                    </div>
                  </div>
                  
                </div>
                <div class="row px-2 py-1">
                  <div class="col">
                    <div class="nav-item  d-flex align-items-center">
                      <i class="fa fa-check mr-3"></i>
                      <p class="mb-1">82 test case</p>
                    </div>
                  </div>
                  
                </div>
                <div class="row px-2 py-1">
                  <div class="col">
                    <div class="nav-item  d-flex align-items-center">
                      <i class="fa fa-layer-group mr-3"></i>
                      <p class="mb-1">82 test case</p>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            
          </div>
          
        </div>
        
      </div>
    </section>
    <!-- Experience Bar -->
    <section class="content">
      <div class="container-fluid ">
        <!-- Small boxes (Stat box) -->
        <div class="row mb-5 mx-5">
          <div class="col-lg-3 col-6 ">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $testcaseCount }}</h3>

                <p>Test Case Performed</p>
              </div>
              <div class="icon">
                <i class="fa fa-list"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6 ">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <!-- <h3>15<sup style="font-size: 20px">%</sup></h3> -->
                <h3>{{ $errorCount }}</h3>

                <p>Error Found</p>
              </div>
              <div class="icon">
                <i class="fa fa-bug"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6 ">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>20</h3>

                <p>timeliness</p>
              </div>
              <div class="icon">
                <i class="fa fa-check"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6 ">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $activityCount }}</h3>

                <p>Change Activity</p>
              </div>
              <div class="icon">
                <i class="fa fa-layer-group"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        
      <div class="container-fluid ">
        <div class="row justify-content-center" >
          
          <div class="col-md-6 d-flex  align-items-end px-5">
            <div class="flex-fill bg-danger p-3 m-4 text-center" style="height: 400px; border-radius:4%"><h1>2</h1></div>
            <div class="flex-fill bg-dark p-3 m-4 text-center" style="height: 450px; border-radius:4%"><h1>1</h1></div>
            <div class="flex-fill bg-primary p-3 m-4 text-center" style="height: 300px; border-radius:4%"><h1>3</h1></div>
          </div>
          {{-- <div class="col-md-6"> --}}
          <!-- Table Rank Here -->
          <div class="col-lg-6">
            <table class="table" id="table_rank">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col" class="text-center">Total test case</th>
              <!-- <th scope="col" class="text-center">Velocity</th> -->
              <th scope="col" class="text-center">Last Sprint test case</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Muhammad Ulil Albab</td>
              <td class="text-center">350</td>
              <!-- <td class="text-center">30</td> -->
              <td class="text-center">15</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Farrel Bismoko</td>
              <td class="text-center">300</td>
              <!-- <td class="text-center">27</td> -->
              <td class="text-center">30</td>
            </tr>
            
            <tr>
              <th scope="row">3</th>
              <td>Farhan Laurenzo</td>
              <td class="text-center">300</td>
              <!-- <td class="text-center">25</td> -->
              <td class="text-center">27</td>
            </tr>
            
          </tbody>
        </table>

          </div>
          <!-- Table Rank End Here -->
        </div>
        
      </div>
      <!-- table test-case -->
      <div class="card mx-2 my-5">
        <div class="card-header border-transparent">
          <h3 class="card-title">Latest Test Case</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <!-- /.table test-header -->
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table m-0">
              <thead>
              <tr>
                <th>Test ID</th>
                <th>Module</th>
                <th>Feature</th>
                <th>Description</th>
                <th>Date Created</th>
                <th>Status</th>
               
              </tr>
              </thead>
              <tbody>
              <tr>
                <td><a href="pages/examples/invoice.html">PM-3-1-1-1</a></td>
                <td>PAPM</td>
                <td>FTP</td>
                <td>Run FTP Calculation - Matched Maturity</td>
                <td>01/03/2023</td>
                <td><span class="badge badge-success">Success</span></td>
                
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">PM-3-1-1-2</a></td>
                <td>PAPM</td>
                <td>FTP</td>
                <td>Run FTP Calculation - Straight Term</td>
                <td>01/03/2023</td>
                <td><span class="badge badge-success">Success</span></td>
                
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">PM-3-1-1-3</a></td>
                <td>PAPM</td>
                <td>FTP</td>
                <td>Run FTP Calculation - Weighted Average</td>
                <td>01/03/2023</td>
                <td><span class="badge badge-danger">Error</span></td>
                
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">PM-3-1-1-4</a></td>
                <td>PAPM</td>
                <td>FTP</td>
                <td>Run FTP Calculation - FTP Moving Average</td>
                <td>01/03/2023</td>
                <td><span class="badge badge-success">Success</span></td>
                
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">PM-3-1-1-5</a></td>
                <td>PAPM</td>
                <td>FTP</td>
                <td>Run FTP Calculation - Reconciliation Matched Maturity</td>
                <td>01/03/2023</td>
                <td><span class="badge badge-warning">Pending</span></td>
              </tr>
              
              
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Create New</a>
          <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Test Case</a>
        </div>
        <!-- /.table test-footer -->
      <!-- /.row (main row) -->
    </div>

      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->