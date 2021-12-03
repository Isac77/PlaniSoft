@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Select 2</h4>
                    <div class="form-group">
                        <label>Single select box using select 2</label>
                        <select class="js-example-basic-single w-100">
                            <option value="TX">Texas</option>
                            <option value="NY">New York</option>
                            <option value="FL">Florida</option>
                            <option value="KN">Kansas</option>
                            <option value="HW">Hawaii</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('css')
        <link rel="stylesheet" href="../assets/vendors/select2/select2.min.css">
    @endpush
    @push('js')
        <script src="../assets/vendors/select2/select2.min.js"></script>
        <script src="../assets/js/select2.js"></script>
    @endpush
@endsection
