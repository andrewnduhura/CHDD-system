@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Diagnosis Results</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Diagnosis Results</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
            <div class="card-header">
                @if($formData['diagnosis'][1] == 1)
                <h3 class="card-title">Positive</h3>
                @else
                <h3 class="card-title">Negative</h3>
                @endif
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Prediction Class</th>
                      <th>Accuracy</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{$formData['diagnosis'][1]}}</td>
                      <td> 22% </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
               <li>
                <button class="btn btn-block btn-success btn-sm">
                <a class="nav-link" style="color: black;" href="{{ route('form.addPatient') }}"
            onclick="event.preventDefault();
            document.getElementById('addPatient').submit();"> {{ __('Save Results') }} </a>
                </button>
                <form id="addPatient" action="{{ route('form.addPatient') }}" method="GET" class="d-none">
          @csrf
          </form>
        </li>
        <li>
                <button type="" class="btn btn-block btn-danger btn-sm "><a style="color: black;" class="nav-link" href="/diagnosis">{{ ('Cancel') }}</a></button></li></ul>
              </div>
            </div>
            </div>
           
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection