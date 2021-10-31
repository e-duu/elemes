@extends('layouts.admin')
@section('title')
  Dashboard Admin | Quizzes Detail
@endsection
@section('sub-title')
  Quizzes Detail Page
@endsection
@section('content')
  <div class="card shadow">
      <div class="card-header d-flex justify-content-between align-items-center py-3">
          <h6 class="m-0 font-weight-bold text-primary">List Data Quiz</h6>
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
                  <h5 class="modal-title text-dark font-weight-bold" id="exampleModalLabel">Edit User</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{-- route('category.store') --}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="helperText" class="text-dark">Title</label>
                    <input value="{{ old('name') }}" type="text" id="helperText" name="title" class="form-control" placeholder="Input class title here...">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1" class="text-dark">Author</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Mobile Engineer</option>
                      <option>Soft 2 Tonic</option>
                      <option>Taruh</option>
                      <option>Nadir</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1" class="text-dark">Class</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Mobile Engineer</option>
                      <option>Soft 2 Tonic</option>
                      <option>Taruh</option>
                      <option>Nadir</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1" class="text-dark">Chapter</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Mobile Engineer</option>
                      <option>Soft 2 Tonic</option>
                      <option>Taruh</option>
                      <option>Nadir</option>
                    </select>
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
                        <th>Title</th>
                        <th>Author</th>
                        <th>Class</th>
                        <th>Chapter</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Class</th>
                        <th>Chapter</th>
                        <th>Action</th>
                      </tr>
                  </tfoot>
                  <tbody>
                      <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>61</td>
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
                                        <th>Title</th>
                                        <td>I'm not expected, so don't expect something</td>
                                      </tr>
                                      <tr>
                                        <th>Author</th>
                                        <td>so don't expect something</td>
                                      </tr>
                                      <tr>
                                        <th>Class</th>
                                        <td>Email@email.com</td>
                                      </tr>
                                      <tr>
                                        <th>Chapter</th>
                                        <td>Artifical</td>
                                      </tr>
                                    </table>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Show Detail</button>
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
                                      <label for="helperText" class="text-dark">Title</label>
                                      <input value="{{ old('name') }}" type="text" id="helperText" name="title" class="form-control" placeholder="Input class title here...">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleFormControlSelect1" class="text-dark">Author</label>
                                      <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Mobile Engineer</option>
                                        <option>Soft 2 Tonic</option>
                                        <option>Taruh</option>
                                        <option>Nadir</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleFormControlSelect1" class="text-dark">Class</label>
                                      <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Mobile Engineer</option>
                                        <option>Soft 2 Tonic</option>
                                        <option>Taruh</option>
                                        <option>Nadir</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleFormControlSelect1" class="text-dark">Chapter</label>
                                      <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Mobile Engineer</option>
                                        <option>Soft 2 Tonic</option>
                                        <option>Taruh</option>
                                        <option>Nadir</option>
                                      </select>
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