@extends('layouts.main');
@section('main-section')

<form method="post" enctype="multipart/form-data" class="mb-3" action="{{url('/customer/fileupload')}}">
    @csrf
<div class="col-4">
  <label for="" class="form-label">Choose file</label>
  <input type="file" class="form-control" name="file" >
  <button type="submit" class="btn btn-primary mt-2">Upload File</button>
</div>
</form>
@endsection