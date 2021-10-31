@extends('layouts.admin')
@section('title')
  e - Learning Admin | Transactions
@endsection
@section('sub-title')
  Transactions
@endsection
@section('content')
  <!-- DataTales Example -->
  <div class="card shadow">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">List Data Transaction</h6>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Total Transaction</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Total Transaction</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                  </tfoot>
                  <tbody>
                      <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>2011/04/25</td>
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
                                      <th>Excerpt</th>
                                      <td>so don't expect something</td>
                                    </tr>
                                    <tr>
                                      <th>Category</th>
                                      <td>Artifical Illuminate</td>
                                    </tr>
                                    <tr>
                                      <th>Author</th>
                                      <td>Artifical</td>
                                    </tr>
                                    <tr>
                                      <th>What Student Will Learn</th>
                                      <td>Freemium</td>
                                    </tr>
                                    <tr>
                                      <th>Participation Terms</th>
                                      <td>Medium</td>
                                    </tr>
                                  </table>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <a href="{{ route('class.show') }}" type="submit" class="btn btn-primary">Show Detail</a>
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
                                  <h5 class="modal-title text-dark font-weight-bold" id="exampleModalLabel">Create Course</h5>
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
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="helperText" class="text-dark">Excerpt</label>
                                    <input value="{{ old('name') }}" type="text" id="helperText" name="excerpt" class="form-control" placeholder="Input class title here...">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Categories</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                      <option>Mobile Engineer</option>
                                      <option>Soft 2 Tonic</option>
                                      <option>Taruh</option>
                                      <option>Nadir</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Author</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                      <option>Mobile Engineer</option>
                                      <option>Soft 2 Tonic</option>
                                      <option>Taruh</option>
                                      <option>Nadir</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="helperText" class="text-dark">What Student Will Learn</label>
                                    <input value="{{ old('name') }}" type="text" id="helperText" name="learn" class="form-control" placeholder="Input class title here...">
                                  </div>
                                  <div class="form-group">
                                    <label for="helperText" class="text-dark">Participation Terms</label>
                                    <input value="{{ old('name') }}" type="text" id="helperText" name="audience" class="form-control" placeholder="Input class title here...">
                                  </div>
                                  <div class="form-group">
                                    <label for="helperText" class="text-dark">Thumbnail</label>
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