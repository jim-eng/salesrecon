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
                    <a class="btn btn-info" href="{{ route('CashTransaction') }}"> CASH DAILY TRANSACTION</a>
                    <a class="btn btn-info" href="{{ route('TenderTransaction') }}" >  OTHER TENDERS TRANSACTION </a>
                    <a class="btn btn-info" href="{{ route('BankTransaction') }}" > BANK IN RECORD </a>
                    <a class="btn btn-info active" href="{{ route('Remarks') }}" > REMARKS </a>
                  </div>
              </div>
                        
                                              
              <div class="card-header">
                <h3 class="card-title">Daily Sales Summary</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <table class="table table-bordered">
                  <thead bgcolor="DarkGray">
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">CASHIER ID</th>
                      <th scope="col">AMOUNT(RM)</th>
                      <th scope="col">REMAKRS</th>
                      <th scope="col">CONFIRMED BY</th>
                      <th scope="col">LAST UPDATED BY</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th></th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      
                    </tr>

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