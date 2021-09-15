@extends('admin.admin_master')
@section('admin')  

  

   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
              <h1>AEON BIG - SUBANG JAYA</h1>
          </div>
<!--
          <input type="date" id="" name="">
          <input type="submit">
-->
       
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
<!--
              <div class="btn-group">
                        <button type="button" class="btn btn-info">Daily Sales</button>
                        <button type="button" class="btn btn-info">Bank In</button>
                        <button type="button" class="btn btn-info">Remarks</button>
                 </div>
-->
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
   
     
      <div class="container-fluid">
       
       
       
       
        <div class="row">
          <div class="col-md-12">
            <div class="card">  
                        
                                              
              <div class="card-header">
                <h3 class="card-title">Tender Manage</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                   <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                   <div class="container">
                       <div class="row">
                          <form action="{{ url('category/update/'.$tender_edit->id) }}" method="POST">
                          @csrf
                          
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Update Category Name</label>
                            <input type="text" class="form-control" name="category_name" id="" value="{{ $tender_edit->tender }}">
                            @error('category_name')
                                <span class="text-danger"> {{ $message }} </span>
                            @enderror
                          </div>
                          
                          <button type="submit" class="btn btn-primary">Update Category</button>
                          </form>
 


                       </div>
                    </div>
                 </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    




@endsection