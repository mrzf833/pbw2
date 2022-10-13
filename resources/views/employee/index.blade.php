@extends('layouts.layout')
@section('title')
    Employee List
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/pages/datatables.css') }}">
@endsection
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
                        <li class="breadcrumb-item active" aria-current="page">Employee</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <span>Employee List</span>
                    <a href="{{ route('employee.create') }}" class="btn btn-primary">Create</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table" id="table-employee">
                    <thead>
                        <tr>
                            <th>NIP</th>
                            <th>Name</th>
                            <th>Birth Date</th>
                            <th>Salary</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>

        @component('components.modal_form',['idModal' => 'delete', 'modal_title' => 'Delete Employee', 'method' => 'POST'])
            @slot('url')
                {{ route('employee.index') }}
            @endslot
            @slot('modal_body')
                @method('DELETE')
                apakah anda yakin ingin manghapus employee
            @endslot
            @slot('modal_footer')
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            @endslot
        @endcomponent
    </section>
    <!-- Basic Tables end -->
</div>
@endsection
@section('script')
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script>
    let modalDeleteEmployee = new bootstrap.Modal(document.getElementById('delete'), {})
    let table_employee = $("#table-employee").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('employee.datatables') }}",
        },
        "paging": true,
        "searching": true,
        "responsive": true,
        columns: [
            {
                data: 'nip',
                name: 'nip',
                // orderable: false
            },
            {
                data: 'name',
                name: 'name',
                // orderable: false
            },
            {
                data: 'birth_date',
                name: 'birth_date',
                // orderable: false
            },
            {
                data: 'salary',
                name: 'salary',
                // orderable: false
            },
            {
                data: 'phone_number',
                name: 'phone_number',
                // orderable: false
            },
            {
                data: 'address',
                name: 'address',
                // orderable: false
            },
            {
                data: 'action',
                name: 'action',
                orderable: false
            }
        ],
    });

    $(document).on('click', '.btn-delete-employee', function(){
        modalDeleteEmployee.toggle();
        let tr = $(this).closest('tr');
        if(tr.hasClass('child')){
            tr = tr.prev()
        }
        let data = table_employee.row(tr).data()
        let url = "{{ route('employee.index') }}"
        $('#delete form').attr('action', url + "/" + data.id + "/delete")
    })
</script>
@endsection