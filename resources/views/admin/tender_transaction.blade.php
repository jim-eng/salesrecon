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
                    <a class="btn btn-info active" href="{{ route('TenderTransaction') }}" >  OTHER TENDERS TRANSACTION </a>
                    <a class="btn btn-info" href="{{ route('BankTransaction') }}" > BANK IN RECORD </a>
                    <a class="btn btn-info" href="{{ route('Remarks') }}" > REMARKS </a>
                  </div>
              </div>
                        
                                              
              <div class="card-header">
                <h3 class="card-title">Daily Sales Summary</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <table class="table table-bordered" style="font-size:80%; width:100%">
                  <thead bgcolor="DarkGray">
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">MASTER</th>
                      <th scope="col">VISA</th>
                      <th scope="col">INTL DEBIT</th>
                      <th scope="col">MYDEBIT</th>
                      <th scope="col">DINERS</th>
                      <th scope="col">AMEX</th>
                      <th scope="col">JCB</th>
                      <th scope="col">MYKASIH</th>
                      <th scope="col">AEONONLINE</th>
                      <th scope="col">IPAY88</th>
                      <th scope="col">TOTAL</th>
                      

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>TOTAL ROUTING ADJ</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <th></th>
                    </tr>
                    
                     <tr>
                      <th>TOTAL GROSS </th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <th></th>
                    </tr>
                    
                    <tr>
                      <th>TOTAL NET SALLES </th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <th></th>
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
                      <th>Cashier ID</th>
                      <th>MASTER</th>
                      <th>VISA</th>
                      <th>INTL DEBIT</th>
                      <th>MYDEBIT</th>
                      <th>DINERS</th>
                      <th>AMEX</th>
                      <th>JCB</th>
                      <th>MYKASIH</th>
                      <th>AEONONLINE</th>
                      <th>IPAY88</th>
                      <th>TOTAL</th>
 

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