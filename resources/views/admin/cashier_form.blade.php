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
          <div class="col-12">
            <div class="card">  
                        
                                              
              <div class="card-header">
                <h3 class="card-title">Cashier Form</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              
              <form>
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Date*</label>
                    <input type="date" class="form-control" id="" placeholder="" style="width:20%" required>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Cashier ID*</label>
                        <input type="password" class="form-control" id="" placeholder=""  required>
                      </div>
                    </div>
                    <div class="col-md-2">    
                      <div class="form-group">
                        <label for="exampleInputPassword1">Amount(RM)*</label>
                        <input type="password" class="form-control" id="" placeholder="" required>
                      </div>
                    </div>
                    <div class="col">    
                      
                    </div>
                    

                  </div>
                  
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label for="">Remarks(Optional)</label>
                          <textarea class="form-control" name="" rows="2" cols="30" style="width:40%" ></textarea>
                      </div>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Confirmed By</label>
                    <input type="text" class="form-control" id="" placeholder="" value="900025 - Angel" style="width:20%" readonly>
                  </div>
                  
                  
                  
<!--
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
-->
<!--
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
-->
               
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Cashier Form Record</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>DATE</th>
                    <th>CASHIER ID</th>
                    <th>AMOUNT</th>
                    <th>REMARKS</th>
                    <th>CONFIRMED BY</th>
                    <th>ACTION</th>
 

                  </tr>
                  </thead>
                  <tbody>

                  </tbody>

                </table>
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