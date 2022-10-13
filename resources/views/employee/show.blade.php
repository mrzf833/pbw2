@extends('layouts.layout')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Employee</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('employee.index') }}">Employee</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('employee.edit', $data->id) }}" method="POST">
                    <div class="row">
                        @csrf
                        @method('PUT')
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="text" name="nip" class="form-control" id="nip" placeholder="nip" value="{{ $data->nip }}">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="name" class="form-control" id="nama" placeholder="nama" value="{{ $data->name }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="birth_date">Birth Date</label>
                                <input type="date" name="birth_date" class="form-control" id="birth_date" placeholder="birth_date" value="{{ $data->birth_date }}">
                            </div>
                            <div class="form-group">
                                <label for="salary">Salary</label>
                                <input type="text" name="salary" class="form-control" id="salary" placeholder="salary" value="{{ $data->salary }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="phone_number" value="{{ $data->phone_number }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" id="address" cols="30" rows="10" placeholder="address" class="form-control">{{ $data->address }}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-warning w-100" type="submit">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- validations end -->

</div>
@endsection