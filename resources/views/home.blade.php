@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4>Employee list</h4>

                    <table class="table yajra-datatable">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Phone</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach($employeeData as $employee)
                                <tr>
                                    <th scope="row">{{$employee->id}}</th>
                                    <td>{{$employee->name}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td>{{$employee->role}}</td>
                                    <td>{{$employee->phone}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')

<script type="text/javascript">
    $(document).ready(function(){    
        var table = $('.yajra-datatable').DataTable();
    });
</script>
@endpush
@endsection


