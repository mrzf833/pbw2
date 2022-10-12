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
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create</h4>
            </div>

            <div class="card-body">
                <form action="#" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput">Basic Input</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Enter email">
                            </div>
    
                            <div class="form-group">
                                <label for="helpInputTop">Input text with help</label>
                                <small class="text-muted">eg.<i>someone@example.com</i></small>
                                <input type="text" class="form-control" id="helpInputTop">
                            </div>
    
                            <div class="form-group">
                                <label for="helperText">With Helper Text</label>
                                <input type="text" id="helperText" class="form-control" placeholder="Name">
                                <p><small class="text-muted">Find helper text here for given textbox.</small></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="disabledInput">Disabled Input</label>
                                <input type="text" class="form-control" id="disabledInput" placeholder="Disabled Text"
                                    disabled>
                            </div>
                            <div class="form-group">
                                <label for="disabledInput">Readonly Input</label>
                                <input type="text" class="form-control" id="readonlyInput" readonly="readonly"
                                    value="You can't update me :P">
                            </div>
    
                            <div class="form-group">
                                <label for="disabledInput">Static Text</label>
                                <p class="form-control-static" id="staticInput">email@mazer.com</p>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary w-100" type="submit">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- validations end -->

</div>
@endsection