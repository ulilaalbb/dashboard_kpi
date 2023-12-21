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
            <h1>Test Case</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Test Case</li>
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
            <h3 class="card-title">Submitted Test Case </h3>

            <div class="card-tools">
              {{-- <div class="pull-right">
                <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
              </div> --}}
              
            </div>
          </div>
          <!-- /.table test-header -->
          <div class="card-body ">
            <div class="table-responsive">
              <table id="test_case" class="table m-0 " data-toggle="table"
			        data-search="true" data-filter-control="true"  data-show-export="true" 
              data-click-to-select="true" data-toolbar="#toolbar">
                <thead>
                  <tr>
                    <th class = "table-filter" filterControlVisible="true" data-field="state" data-filter-control="input" data-sortable="true">Test ID</th>
                    <th data-field="topic" data-filter-control="input" data-sortable="true">Topic</th>
                    <th data-field="description" data-filter-control="input" data-sortable="true">Description</th>
                    <th data-field="bobot" data-filter-control="input" data-sortable="true">Bobot</th>
                    <th data-field="dateCreated" data-filter-control="input" data-sortable="true">Date Created</th>
                    <th data-field="status" data-filter-control="input" data-sortable="true">Status</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($test_case as $t)
                  <tr>
                    <td><a href="pages/examples/invoice.html">{{$t->test_case_id}}</a></td>
                    <td>{{$t->topic}}</td>
                    <td>{{$t->description}}</td>
                    <td>{{$t->bobot}}</td>
                    <td>{{$t->created_at}}</td>
                    <td><span class="badge badge-success">Success</span></td>
                    
                  </tr>
                  
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <a href="{{ route ('createtest')}}" class="btn btn-sm btn-info float-left">Create New</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Next Page</a>
          </div>
          <!-- /.table test-footer -->
        <!-- /.row (main row) -->
      </div>
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <script>
    $(document).ready(function() {
        $('#test_case').bootstrapTable({
            // other options...
            filterControl: true,
        });
    });
</script>
@include('layouts.footer')