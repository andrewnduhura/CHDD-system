@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Patient Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/diagnosis">Home</a></li>
              <li class="breadcrumb-item active">Add Patient Details</li>
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
                    <h3 class="card-title">Patients Details</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{ route('patients.store') }}">
                @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Patient Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Phone Number:</label>
                            <input type="tel" id="phone_number" name="phone_number" pattern="[0-9]{4}[0-9]{3}[0-9]{3}" required placeholder="Format: 0777-777-777">
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" id="address" name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="district_id">District:</label>
                                <select id="district_id" name="district_id" required>
                                    @foreach($districts as $district)
                                    <option value="{{$district->id}}">{{$district->name}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <!-- <div class="form-group">
                            <label for="district_id">District:</label>
                            <input type="text" id="district_id" name="district_id" required>
                        </div> -->
                        <div class="form-group">
                            <label for="clinicalNotes">Clinical Notes:</label>
                            <textarea id="clinicalNotes" name="clinicalNotes" rows="4" required></textarea>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!--/. container-fluid -->
    </section>
      <!-- /.content -->
</div>
@endsection