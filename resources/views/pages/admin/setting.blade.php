@extends('layouts.admin')
@section('title')
  e - Learning Admin | Setting
@endsection
@section('sub-title')
  Setting
@endsection
@section('content')
  <div class="card w-50 p-2">
    <div class="card-body">
      <form action="" method="POST">
        @csrf
        <div class="form-group">
          <label class="font-weight-bold text-dark" for="helperText">My Avatar (Maks. 2MB)</label>
          <div class="d-flex flex-column">
            <img src="/images/vue.png" class="rounded-circle" width="100" height="96">
            <input value="" type="file" id="helperText" name="image" class="form-control-file mt-3">
            <p class="text-muted mt-3" style="font-size: 16px;">File format jpg, jpeg, png.</p>
          </div>
        </div>
        <div class="form-group" style="margin-top: -17px;">
          <label class="font-weight-bold text-dark" for="helperText">Name</label>
          <input value="" type="text" id="helperText" name="name" class="form-control" placeholder="Old Name">
        </div>
        <div class="form-group">
          <label class="font-weight-bold text-dark" for="helperText">Email Address</label>
          <input value="" type="email" id="helperText" name="email" class="form-control" placeholder="Old Email Address">
        </div>
        <div class="form-group">
          <label class="font-weight-bold text-dark" for="helperText">Username</label>
          <input value="" type="text" id="helperText" name="" class="form-control" placeholder="Old Username">
        </div>
        <div class="form-group">
          <label class="font-weight-bold text-dark" for="helperText">Personal Goal</label>
          <select name="" class="form-control">
              <option selected>Choose...</option>
              <option value="">Agent CIA</option>
              <option value="">Agent FBI</option>
              <option value="">Agent FBI</option>
          </select>
        </div>
        <div class="form-group">
          <label class="font-weight-bold text-dark" for="helperText">Phone</label>
          <input value="" type="number" id="helperText" name="" class="form-control" placeholder="Old Phone">
        </div>
        <button class="btn btn-block btn-primary text-light font-weight-bold">Save My Profile</button>
      </div>
    </form>
  </div>
@endsection