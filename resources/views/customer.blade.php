@extends('layouts/main')
@push('title')
    <title>Customer</title>
@endpush
@section('main-section')
{{-- <h1 class="text-center">Customer</h1>    

    <form method="post" action="{{url('/')}}/customer">
      @csrf
      <div class="row">
        <div class="col-6">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{old('name')}}">
          <span class=text-danger>
            @error('name')
                {{$message}}
            @enderror
          </span>
        </div>
        <div class="col-6">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="email" value="{{old('email ')}}">
          <span class=text-danger>
            @error('email')
                {{$message}}
            @enderror
          </span>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <label for="exampleInputEmail1" class="form-label">State</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="state" value="{{old('state')}}">
          <span class=text-danger>
            @error('state')
                {{$message}}
            @enderror
          </span>
        </div>
        <div class="col-6">
          <label for="exampleInputEmail1" class="form-label">city</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="city" value="{{old('city ')}}">
          <span class=text-danger>
            @error('city')
                {{$message}}
            @enderror
          </span>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <label for="exampleInputEmail1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputEmail1" name="password" value="{{old('password')}}">
          <span class=text-danger>
            @error('password')
                {{$message}}
            @enderror
          </span>
        </div>
        <div class="col-6">
          <label for="exampleInputEmail1" class="form-label">DOB</label>
          <input type="date" class="form-control" id="exampleInputEmail1" name="dob" value="{{old('dob ')}}">
          <span class=text-danger>
            @error('dob')
                {{$message}}
            @enderror
          </span>
        </div>
      </div>
      <div class="row">
        <div class="col-2">
            <label>Gender</label>
        </div>
        <div class="col-8">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="M">
                <label class="form-check-label" for="flexRadioDefault1">
                  Male
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="F" >
                <label class="form-check-label" for="flexRadioDefault1">
                  Female
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="O" >
                <label class="form-check-label" for="flexRadioDefault1">
                  Other
                </label>
              </div>
        </div>
      </div>

      
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
 --}}



 <h1 class="text-center">{{$title}} Customer</h1>    

 <form method="post" action="{{$url}}">
   @csrf
   <div class="row">
     <div class="col-6">
       <label for="exampleInputEmail1" class="form-label">Name</label>
       <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$customers->name}}">
       <span class=text-danger>
         @error('name')
             {{$message}}
         @enderror
       </span>
     </div>
     <div class="col-6">
       <label for="exampleInputEmail1" class="form-label">Email address</label>
       <input type="text" class="form-control" id="exampleInputEmail1" name="email" value="{{$customers->email}}">
       <span class=text-danger>
         @error('email')
             {{$message}}
         @enderror
       </span>
     </div>
   </div>
   <div class="row">
     <div class="col-6">
       <label for="exampleInputEmail1" class="form-label">State</label>
       <input type="text" class="form-control" id="exampleInputEmail1" name="state" value="{{$customers->state}}">
       <span class=text-danger>
         @error('state')
             {{$message}}
         @enderror
       </span>
     </div>
     <div class="col-6">
       <label for="exampleInputEmail1" class="form-label">city</label>
       <input type="text" class="form-control" id="exampleInputEmail1" name="city" value="{{$customers->city}}">
       <span class=text-danger>
         @error('city')
             {{$message}}
         @enderror
       </span>
     </div>
   </div>
   <div class="row">
     <div class="col-6">
       <label for="exampleInputEmail1" class="form-label">Password</label>
       <input type="password" class="form-control" id="exampleInputEmail1" name="password" value="{{old('password')}}">
       <span class=text-danger>
         @error('password')
             {{$message}}
         @enderror
       </span>
     </div>
     <div class="col-6">
       <label for="exampleInputEmail1" class="form-label">DOB</label>
       <input type="date" class="form-control" id="exampleInputEmail1" name="dob" value="{{$customers->dob}}">
       <span class=text-danger>
         @error('dob')
             {{$message}}
         @enderror
       </span>
     </div>
   </div>
   <div class="row">
     <div class="col-2">
         <label>Gender</label>
     </div>
     <div class="col-8">
         <div class="form-check form-check-inline">
             <input class="form-check-input" type="radio" name="gender" value="M" {{$customers->gender=='M'?'checked':''}}>
             <label class="form-check-label" for="flexRadioDefault1">
               Male
             </label>
           </div>
           <div class="form-check form-check-inline">
             <input class="form-check-input" type="radio" name="gender" value="F" {{$customers->gender=='F'?'checked':''}}>
             <label class="form-check-label" for="flexRadioDefault1">
               Female
             </label>
           </div>
           <div class="form-check form-check-inline">
             <input class="form-check-input" type="radio" name="gender" value="O" {{$customers->gender=='O '?'checked':''}}>
             <label class="form-check-label" for="flexRadioDefault1">
               Other
             </label>
           </div>
     </div>
   </div>

   
     <button type="submit" class="btn btn-primary" name="submit">{{$title}}</button>
   </form>



 @endsection