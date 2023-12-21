@include('layouts.header')

@include('layouts.navbar')

@include('layouts.sidebar')


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
        <div class="row ">
          <div class="col">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Test</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action = "/test_case/{{$test_case->id}}" method = "POST">
                @method('put')
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="testCaseID">Test Case ID</label>
                    <input class="form-control" name = 'test_case_id' id="testCaseID" value = "{{$test_case->test_case_id}}">
                  </div>
                  <div class="form-group">
                    <label for="testCaseModule">Topic</label>
                    <input class="form-control"  name = 'topic' value = "{{$test_case->topic}}" id="testCaseModule">
                  </div>
                  <div class="form-group">
                    <label for="testDesc">Description</label>
                    <input class="form-control" name = 'description' value = "{{$test_case->description}}" id="desc">
                  </div>
                  <div class="form-group">
                    <label for="testPlan">Test Plan</label>
                    <textarea class="form-control" name = 'testplan' value = "{{$test_case->testplan}}" id="testPlan" rows="6"></textarea>
                  </div>
                  {{-- <div class="form-group">
                    <label for="testCaseFile">Attachment</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="testCaseFile">
                        <label class="custom-file-label" for="testCaseFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> --}}
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="is_draft">
                    <label class="form-check-label" for="is_draft" name="is_draft"> Save as Draft</label>
                  </div>
              
                 
                 
                 
                </div>
                <!-- /.card-body -->
    
                <div class="card-footer d-flex justify-content-end">
                  {{-- <button type="draft" class="btn btn-light border-secondary mx-1">Draft</button> --}}
                 
                  <button type="submit" class="btn btn-primary">Update</button>
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