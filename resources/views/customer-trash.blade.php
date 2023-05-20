@extends('layouts/main')
@push('title')
    <title>Customer Trash Data</title>
@endpush
@section('main-section')
    <div class="container">
     <a name="" id="" class="btn btn-primary" href="{{route('customer.view')}}" role="button">View Customer</a>
        
        <h1 class="text-primary">Customer List</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr class="bg-primary">
                        <th >Customer ID</th>
                        <th >Name</th>
                        <th >Email</th>
                        <th >Gender</th>
                        <th >State</th>
                        <th >City</th>
                        <th scope="col">DOB</th>  
                        <th scope="col">status</th> 
                        <th>Action</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $cust)
                    <tr class="">
                        <td>{{$cust->customer_id}}</td>
                        <td>{{$cust->name}}</td>
                        <td>{{$cust->email}}</td>
                        <td>@if($cust->gender=='M')
                                Male
                            @elseif($cust->gender=='F')
                                Female
                            @else
                                Other                        
                             @endif
                        </td>
                        <td>{{$cust->state}}</td>
                        <td>{{$cust->city}}</td>
                        {{-- <td>{{change_date_format($cust->dob,"d-M-Y")}}</td> --}}
                        <td>{{$cust->dob}}</td>
                        <td>
                            @if($cust->status==1)
                            <a name="" id="" class="btn btn-primary btn-sm" href="#" role="button">Active</a>
                                 
                            @else
                            <a name="" id="" class="btn btn-danger btn-sm" href="#" role="button">Inactive</a>
                            @endif
                        </td>
                        <td>
                            <a type="button" class ="btn btn-danger btn-sm" href="{{route('customer.forcedelete',['id'=>$cust->customer_id])}}">Delete</a>
                            <a type="button" class ="btn btn-danger btn-sm" href="{{route('customer.restore',['id'=>$cust->customer_id])}}">Restore</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
@endsection 