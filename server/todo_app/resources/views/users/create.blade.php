@extends('layouts.master')

@section('register_content')
<form>
  <div class="form-row">
    <div class="form-group col-md-16">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
</form>
@endsection
