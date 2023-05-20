@extends('layouts/main')
@push('title')
    <title>Customer List</title>
@endpush
@section('main-section')

<div class="row">
    <div class="col-6">
    <form>      
    <div class="input-group">
           <input type="text"
        class="form-control" name="search"  placeholder="search by name or email" value="{{$search}}">
        <button type="submit" class="btn btn-warning">
           <i class="fa-sharp fa-solid fa-magnifying-glass"></i></button> 
        </div>
    </form>
</div>
    <div class="col-4">
        <a name="" id="" class="btn btn-primary" href="{{route('customer.view')}}" role="button">Reset</a>
    </div>
</div>
    <div class="container mt-4">
     <a name="" id="" class="btn btn-primary" href="{{route('customer.create')}}" role="button">Add Customer</a>
     <a name="" id="" class="btn btn-danger" href="{{route('customer.trash')}}" role="button">Go to Trash</a>
        
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
                            <a type="button" class="btn btn-success"
                            href="{{route('customer.edit',['id'=>$cust->customer_id])}}"><i class="fa-solid fa-pen"></i>
                                
                            </a>
                            {{-- <a type="button" class="btn btn-danger" href="{{url('/customer/delete/')}}/{{$cust->customer_id}}"><i class="fa-solid fa-trash"></i></a> --}}

                            {{-- <a type="button" class="btn btn-danger" href="{{route('customer.delete',['id'=>$cust->customer_id])}}"><i class="fa-solid fa-trash"></i></a> --}}

                            <a type="button" class="btn btn-danger btn-sm" href="{{route('customer.delete',['id'=>$cust->customer_id])}}">Trash</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="container">
                {!! $customers->links() !!}
                
          </div>
        </div>        
    </div>
   
@endsection 