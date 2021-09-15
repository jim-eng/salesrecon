@extends('admin.admin_master')
@section('admin')  

     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Company Sales Reconcilation</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Company</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active">
                  <a href="{{ route('AeonCoStore') }}" class="nav-link">
                    <i class="fas fa-inbox"></i> AEON CO
                    <span class="badge bg-primary float-right">12</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('AeonBigStore') }}" class="nav-link">
                    <i class="far fa-envelope"></i> AEON BIG
                    <span class="badge bg-primary float-right">10</span>
                  </a>
                </li>
                
              </ul>
            </div>
            <!-- /.card-body -->
          </div>

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Store List</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" placeholder="Search Mail">
                  <div class="input-group-append">
                    <div class="btn btn-primary">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">

              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                 <thead>
                     <tr>
                         <th>Store Name</th>
                         <th>Total POS</th>
                         <th>Total Sales Adj</th>
                         <th>Total Variance</th>
                         <th>Last Updated</th>
                     </tr>
                     
                 </thead>
                  <tbody>
                  <?php
                    $store = DB::table('Companies')->get();
                  ?>
                  @foreach($store as $store)
                  <tr onclick="window.location='{{ route('CashTransaction') }}';">
                       <td> 🏪{{ $store->Store }} </td>
                       <td> RM 124,576.30</td>
                       <td> RM 123,000.30</td>
                       <td> RM 1,576.00</td>
                       <td class="mailbox-date">1/9/2021</td>
                  </tr>
                 @endforeach
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

@endsection