@extends('layouts.admin')
@section('title')
  Dashboard Admin | Users
@endsection
@section('sub-title')
  Users Page
@endsection
@section('content')
  <!-- DataTales Example -->
  <div class="card shadow">
      <div class="card-header d-flex justify-content-between align-items-center py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Data User</h6>
        <button type="button" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#create">
          <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
          </span>
          <span class="text">Create Data</span>
        </button>
        <!-- Modal Edit -->
        <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-dark font-weight-bold" id="exampleModalLabel">Create User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{-- route('category.store') --}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="helperText" class="text-dark">Name</label>
                  <input value="{{ old('name') }}" type="text" id="helperText" name="title" class="form-control" placeholder="Input class title here...">
                </div>
                <div class="form-group">
                  <label for="helperText" class="text-dark">Email</label>
                  <input value="{{ old('name') }}" type="email" id="helperText" name="excerpt" class="form-control" placeholder="Input class title here...">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1" class="text-dark">User Goals</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>Mobile Engineer</option>
                    <option>Soft 2 Tonic</option>
                    <option>Taruh</option>
                    <option>Nadir</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="helperText" class="text-dark">Password</label>
                  <input value="{{ old('name') }}" type="number" id="helperText" name="price" class="form-control" placeholder="Input class title here...">
                </div>
                <div class="form-group">
                  <label for="helperText" class="text-dark">Password Confirmation</label>
                  <input value="{{ old('name') }}" type="number" id="helperText" name="price" class="form-control" placeholder="Input class title here...">
                </div>
                <div class="form-group">
                  <label text-dark for="exampleFormControlSelect1">Role</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>Mobile Engineer</option>
                    <option>Soft 2 Tonic</option>
                    <option>Taruh</option>
                    <option>Nadir</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="helperText" class="text-dark">Phone Number</label>
                  <input value="{{ old('name') }}" type="number" id="helperText" name="audience" class="form-control" placeholder="Input class title here...">
                </div>
                <div class="form-group">
                  <label for="helperText" class="text-dark">Photo</label>
                  <input value="{{ old('photo') }}" type="file" id="helperText" class="form-control" name="thumbnail" placeholder="Image">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            </div>
          </div>
        </div>
        <!-- End Modal Edit -->
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                      </tr>
                  </tfoot>
                  <tbody>
                      <tr>
                          <td>
                            <img src="https://jobi-indonesia.com/wp-content/uploads/2018/08/585e4bf3cb11b227491c339a.png" style="width: 50px;" class="rounded-circle">
                          </td>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                          <td>
                            <a href="{{-- route('transactions.edit', $item->id) --}}" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#detail">
                              <i class="fas fa-eye"></i>
                            </a>
                            <!-- Modal Detail -->
                            <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-dark font-weight-bold" id="exampleModalLabel">Detail Class</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <table class="table table-hover">
                                      <tr>
                                        <th>Name</th>
                                        <td>I'm not expected, so don't expect something</td>
                                      </tr>
                                      <tr>
                                        <th>Username</th>
                                        <td>so don't expect something</td>
                                      </tr>
                                      <tr>
                                        <th>Email</th>
                                        <td>Email@email.com</td>
                                      </tr>
                                      <tr>
                                        <th>Password</th>
                                        <td>Artifical</td>
                                      </tr>
                                      <tr>
                                        <th>Role</th>
                                        <td>Freemium</td>
                                      </tr>
                                      <tr>
                                        <th>Phone Number</th>
                                        <td>Medium</td>
                                      </tr>
                                      <tr>
                                        <th>Goals</th>
                                        <td>$20.00</td>
                                      </tr>
                                    </table>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Modal Detail -->
                            <a href="{{-- route('transactions.edit', $item->id) --}}" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit">
                              <i class="fas fa-edit"></i>
                            </a>
                            <!-- Modal Edit -->
                            <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-dark font-weight-bold" id="exampleModalLabel">Edit User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{-- route('category.store') --}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                      <label for="helperText" class="text-dark">Name</label>
                                      <input value="{{ old('name') }}" type="text" id="helperText" name="title" class="form-control" placeholder="Input class title here...">
                                    </div>
                                    <div class="form-group">
                                      <label for="helperText" class="text-dark">Email</label>
                                      <input value="{{ old('name') }}" type="email" id="helperText" name="excerpt" class="form-control" placeholder="Input class title here...">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleFormControlSelect1" class="text-dark">User Goals</label>
                                      <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Mobile Engineer</option>
                                        <option>Soft 2 Tonic</option>
                                        <option>Taruh</option>
                                        <option>Nadir</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="helperText" class="text-dark">Password</label>
                                      <input value="{{ old('name') }}" type="number" id="helperText" name="price" class="form-control" placeholder="Input class title here...">
                                    </div>
                                    <div class="form-group">
                                      <label for="helperText" class="text-dark">Password Confirmation</label>
                                      <input value="{{ old('name') }}" type="number" id="helperText" name="price" class="form-control" placeholder="Input class title here...">
                                    </div>
                                    <div class="form-group">
                                      <label text-dark for="exampleFormControlSelect1">Role</label>
                                      <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Mobile Engineer</option>
                                        <option>Soft 2 Tonic</option>
                                        <option>Taruh</option>
                                        <option>Nadir</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="helperText" class="text-dark">Phone Number</label>
                                      <input value="{{ old('name') }}" type="number" id="helperText" name="audience" class="form-control" placeholder="Input class title here...">
                                    </div>
                                    <div class="form-group">
                                      <label for="helperText" class="text-dark">Photo</label>
                                      <input value="{{ old('photo') }}" type="file" id="helperText" class="form-control" name="thumbnail" placeholder="Image">
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                                </form>
                                </div>
                              </div>
                            </div>
                            <!-- End Modal Edit -->
                            <form action="{{-- route('transactions.destroy', $item->id) --}}" method="POST"class="d-inline">
                              @csrf
                              @method('delete')
                              <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                              </button>
                            </form>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
@endsection