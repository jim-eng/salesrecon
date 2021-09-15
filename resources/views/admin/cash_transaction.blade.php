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
                    <a class="btn btn-info active" href="{{ route('CashTransaction') }}"> CASH DAILY TRANSACTION</a>
                    <a class="btn btn-info" href="{{ route('TenderTransaction') }}" >  OTHER TENDERS TRANSACTION </a>
                    <a class="btn btn-info" href="{{ route('BankTransaction') }}" > BANK IN RECORD </a>
                    <a class="btn btn-info" href="{{ route('Remarks') }}" > REMARKS </a>
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
                      <th scope="col">POS AMT(RM)</th>
                      <th scope="col">AFTER ADJ(RM)</th>
                      <th scope="col">VARIANCE(RM)</th>
                      <th scope="col">CHEQUE(RM)</th>
                      <th scope="col">CASHIER(S)/E(RM)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>Total</th>
                      <td>67,487.15</td>
                      <td>67,491.50</td>
                      <td>0</td>
                      <td>0</td>
                      <td>4.35</td>
                      
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
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>CASHIER ID</th>
                    <th>POS AMT</th>
                    <th>REFUND</th>
                    <th>AFTER ADJ</th>
                    <th>VARIANCE</th>
                    <th>CASH COUNT</th>
                    <th>CASHIER(S)/E</th>
 

                  </tr>
                  </thead>
                  <tbody>
                  @php($num=1)
                  <?php
                  for($i=1;$i<=9;$i++){
                  ?>
                  <tr>
                   <td><?php echo $i ?></td>
                   <td>900000<?php echo $i ?></td>
                   <td>64,165.25</td>
                   <td>-136.8</td>
                   <td>-136.8</td>
                   <td>0</td>
                   <td>64166.25</td>
                   <td>1</td>
                  </tr>
                  <?php 
                  }
                  ?>
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