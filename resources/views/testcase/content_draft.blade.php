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
            <h3 class="card-title">Drafts</h3>

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
                  <th>Action</th>
                 
                </tr>
                </thead>
                <tbody>
                  @foreach($drafts as $d)
                  <tr>
                    <td><a href="">PM-3-1-1-5</a></td><td><a href="pages/examples/invoice.html">{{$d->test_case_id}}</a></td>
                    <td>{{$d->topic}}</td>
                    <td>{{$d->description}}</td>
                    <td>{{$d->created_at}}</td>
                    <td> <a href= "/test_case/{{$d->id}}/edit" class="btn btn-primary btn-sm">
                      <i class="fas fa-pen"> </i>  Edit
                    </a>
                    <form action="/test_case/{{$d->id}}/submit" method="post" style="display: inline;">
                      @csrf
                      <button type="submit" class="btn btn-success btn-sm">
                          Submit
                      </button>
                  </form>
                    {{-- <a class="btn btn-success btn-sm">Submit</a> --}}
                    {{-- <a class="btn btn-danger btn-sm">
                      <i class="fas fa-trash"> </i>  Delete
                    </a> --}}
                    <form action="/test_case/{{$d->id}}/delete" method="post" style="display: inline;">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger btn-sm">
                          <i class="fas fa-trash"></i> Delete
                      </button>
                  </form>
                  </td>
                  </tr>
               
                @endforeach
                
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