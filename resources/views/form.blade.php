@extends('layouts/main')
@push('title')
    <title>Signup Page</title>
@endpush
@section('main-section')
<h1 class="text-center">Register</h1>    

    {{-- <form method="post" action="{{url('/')}}/register">
      @csrf --}}
      {{-- <pre>
      @php
          print_r($errors->all());

      @endphp
      </pre> --}}
        {{-- <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{old('name')}}">
          <span class=text-danger>
            @error('name')
                {{$message}}
            @enderror
          </span>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="email" value="{{old('email ')}}">
          <span class=text-danger>
            @error('email')
                {{$message}}
            @enderror
          </span>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          <span class=text-danger>
            @error('password ')
                {{$message}}
            @enderror
          </span>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
          <span class=text-danger>
            @error('password_confirmation')
                {{$message}}
            @enderror
          </span>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form> --}}

      

      <form method="post" action="{{url('/')}}/register">
        @php
            $demo=1;
        @endphp
        @csrf
          <div class="container">
          <x-input type="text" name="name" label="name"
          :demo='$demo'/>
          <x-input type="text" name="email" label="Email"/>
          <x-input type="password" name="password" label="Password"/>
          <x-input type="password" name="password_confirmation" label="Confirm Password"/>
         <br> 
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
        </form>
  
      @endsection