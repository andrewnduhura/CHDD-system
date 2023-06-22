@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Notification</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/diagnosis">Home</a></li>
              <li class="breadcrumb-item active">Notification</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Notification Message</h3>
                </div>
                <!-- /.card-header -->
                <p>Save successful</p>
                <p>Rutungu's module starts here</p>
                
            </div>
        </div><!--/. container-fluid -->
    </section>
      <!-- /.content -->
</div>
@endsection