@extends('layouts.admin')
@section('title')
  Dashboard Admin | User Goals
@endsection
@section('sub-title')
  User Goals Page
@endsection
@section('content')
  <!-- DataTales Example -->
  <div class="card shadow">
      <div class="card-header d-flex justify-content-between align-items-center py-3">
          <h6 class="m-0 font-weight-bold text-primary">List Data User Goal</h6>
          <button type="button" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#exampleModal">
            <span class="icon text-white-50">
              <i class="fas fa-plus"></i>
            </span>
            <span class="text">Create Data</span>
          </button>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-dark font-weight-bold" id="exampleModalLabel">Create User Goal</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{-- route('User Goal.store') --}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="helperText" class="text-dark">Name</label>
                    <input value="{{ old('name') }}" type="text" id="helperText" name="name" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="helperText" class="text-dark">Image</label>
                    <input value="{{ old('photo') }}" type="file" id="helperText" class="form-control" name="photo" placeholder="Image">
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
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Action</th>
                      </tr>
                  </tfoot>
                  <tbody>
                      <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>
                            <a href="{{-- route('transactions.edit', $item->id) --}}" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit">
                              <i class="fas fa-edit"></i>
                            </a>
                            {{-- Modal Edit --}}
                            <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-dark font-weight-bold" id="exampleModalLabel">Edit User Goal</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{-- route('User Goal.store') --}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                      <label for="helperText" class="text-dark">User Goals</label>
                                      <input value="{{ old('name') }}" type="text" id="helperText" name="name" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                      <label for="helperText" class="text-dark">Image</label>
                                      <input value="{{ old('photo') }}" type="file" id="helperText" class="form-control" name="photo" placeholder="Image">
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
                            {{-- End of Modal Edit --}}
                            <form action="{{-- route('transactions.destroy', $item->id) --}}" 
                                  method="POST" 
                                  class="d-inline">
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