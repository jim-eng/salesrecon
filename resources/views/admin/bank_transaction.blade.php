@extends('admin.admin_master')
@section('admin')  

   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
              <h1>AEON BIG - SUBANG JAYA</h1>
          </div>
          <input type="date" id="birthday" name="birthday">
          <input type="submit">
       
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
                <div class="btn-group w-100 mb-2">
                    <a class="btn btn-info " href="{{ route('CashTransaction') }}"> CASH DAILY TRANSACTION</a>
                    <a class="btn btn-info" href="{{ route('TenderTransaction') }}" > OTHER TENDERS TRANSACTION</a>
                    <a class="btn btn-info active" href="{{ route('BankTransaction') }}" > BANK IN RECORD </a>
                    <a class="btn btn-info" href="{{ route('Remarks') }}" > REMARKS </a>
                  </div>
              </div>
                        
                                              
              <div class="card-header">
                <h3 class="card-title">Bank In Summary</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <table class="table table-bordered" style="font-size:80%; width:100%">
                  <thead bgcolor="DarkGray">
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">AMOUNT (RM)</th>

                      

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>TOTAL SECURICOR</th>
                      <td></td>

                    </tr>
                    
                     <tr>
                      <th>TOTAL BANK IN (S)/E </th>
                      <td></td>
 
                    </tr>
                    
                    <tr>
                      <th>TOTAL VARIANCE </th>
                      <td></td>
  
                    </tr>

                  </tbody>
                </table>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Cashier Sales Record</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" style="font-size:80%; width:100%" >
                  <thead>
                  <tr>
                      <th>#</th>
                      <th>CASHIER ID</th>
                      <th>CHEQUE</th>
                      <th>CASHIER (S)/E</th>
                      <th>SECURICOR</th>
                      <th>BANK IN (S)/E</th>
                      <th>REMARKS</th>
 

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