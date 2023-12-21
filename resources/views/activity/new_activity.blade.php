@include('layouts.header')

@include('layouts.navbar')

@include('layouts.sidebar')


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
        <div class="row ">
          <div class="col">
            <div class="card card-primary">
                
                
              <div class="card-header">
                
                <h3 class="card-title">Create New Activity</h3>
                
              </div>
              
              <!-- /.card-header -->
              <!-- form start -->
              <form  action = "/activity/store" method = "POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="activity">Activity</label>
                    <input class="form-control" id="activity" name=activity>
                  </div>
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" id="title" name = "title">
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name = "description" rows="1"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="link">Source Document</label>
                    <textarea class="form-control" id="link" name = "link" rows="6"></textarea>
                  </div>
                 
                </div>
                <!-- /.card-body -->
    
                <div class="card-footer d-flex justify-content-end">
                  <button type="draft" class="btn btn-light border-secondary mx-1">Draft</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

            </div>
          </div>
        </div>
        <!-- Test Case history -->
        
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('layouts.footer')