@extends('layouts.admin')

@section('content')
<!-- Iterate over the patients and display their details -->
<table>
    <thead>
        <tr><td><h4>PATIENTS TABLE</h4></td></tr>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Phone Number</td>
            <td>Action</td>
        </tr>
    </thead>

    <tbody>
    @foreach ($patients as $patient)
        <tr>
            <td>{{ $patient->id }}</td>
            <td>{{ $patient->name }}</td>
            <td>{{ $patient->phone_number }}</td>
            <td>EDIT DELETE</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
