@include('layouts.header')

@include('layouts.navbar')

@include('layouts.sidebar')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Activity</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Activity</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
        <!-- Test Case history -->
        <div class="card mx-2 my-5">
          <div class="card-header border-transparent">
            <h3 class="card-title">All Activity</h3>

            
          </div>
          <!-- /.card-body -->
        <div class="card-header clearfix">
        <a href="/activity/create" class="btn btn-sm btn-info float-left">Create New</a>
        
        </div>
      <!-- /.table test-header -->
          <!-- /.table test-header -->
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table m-0">
                <thead>
                <tr>
                  <th>Activity</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Date Created</th>
                  <th></th>
                  
                </tr>
                </thead>
                <tbody>
                  @foreach($activity as $t)
                  <tr>
                    <td><a href="pages/examples/invoice.html">{{$t->activity}}</a></td>
                    {{-- <td>{{$t->activity}}</td> --}}
                    <td>{{$t->title}}</td>
                    <td>{{$t->description}}</td>
                    <td>{{$t->created_at}}</td>
                    <td><a href="{{ 'http://' . $t->link }}" target="_blank">
                      <i class="fa fa-link"></i></a></td>
                    
                  </tr>                  
                  @endforeach                        
                <tr>
                  <td><a href="pages/examples/invoice.html">Document</a></td>
                  <td>NCM</td>
                  <td>20231124 - NCM - SAP - Update Kernel</td>
                  <td>24/11/2023</td>
                  <td><a href="pages/examples/invoice.html">
                    <i class="fa fa-link"></i></a></td>
            </tr>

                <tr>
                    <td><a href="pages/examples/invoice.html">Document</a></td>
                    <td>SCM</td>
                    <td>20230223 - SCM - SAP - Update Document Splitting</td>
                    <td>23/02/2023</td>
                    <td><a href="pages/examples/invoice.html">
                        <i class="fa fa-link"></i></a></td>
                </tr>
                <tr>
                    <td><a href="pages/examples/invoice.html">Document</a></td>
                    <td>ECM</td>
                    <td>20221129 - ECM - IEM - Locking Transaction ZFI0015</td>
                    <td>29/11/2022</td>
                    <td><a href="pages/examples/invoice.html">
                        <i class="fa fa-link"></i></a></td>
                </tr>


               
                
            </tbody>
        </table>
      </div>
      <!-- /.table-responsive -->
    </div>
    
  <!-- /.row (main row) -->
</div>
  
  <!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@include('layouts.footer')