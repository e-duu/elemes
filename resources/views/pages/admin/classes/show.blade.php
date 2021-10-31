@extends('layouts.admin')
@section('title')
  Dashboard Admin | Classes Detail
@endsection
@section('sub-title')
  Classes Detail Page
@endsection
@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card shadow">
        <div class="card-header d-flex justify-content-between align-items-center py-3">
          <h6 class="m-0 font-weight-bold text-primary">Detail Class</h6>
          <a href="{{ route('class.index') }}" class="btn btn-warning btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-angle-left"></i>
            </span>
            <span class="text">Back to Class</span>
          </a>
        </div>
        <div class="card-body p-5">
          <div class="d-flex justify-content-between align-items-start">
            <div class="d-flex">
              <img src="{{ asset('images/vue.png') }}" style="max-width: 300px; border-radius: 10px;">
            </div>
            <div class="d-flex mt-10">
              <div class="d-flex flex-column items-center">
                  <p class="text-dark"><b>Title :</b> Ahmad</p>
                  <p class="text-dark"><b>Description :</b> ini description yang biasanya make lorem ipsum</p>
                  <p class="text-dark"><b>Excerpt :</b> ini description yang biasanya ca </p>
                  <p class="text-dark"><b>Difficulty :</b> Medium</p>
                  <p class="text-dark"><b>Price :</b> $20.00</p>
                  <p class="text-dark"><b>Target Audience :</b> </p>
                  <p class="text-dark"><b>Key Features :</b> </p>
                  <p class="text-dark"><b>Author :</b> </p>
                  <p class="text-dark"><b>Category :</b> </p>
              </div>
            </div>
            <h1 class="mt-10" style="color: #d30c55; "></h1>
            <h5 class="lh-lg mt-3" style="color: #f17ba7;"></h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <h3 class="mt-5 mb-4 text-dark">Lessons Session</h3>

  <div class="card shadow">
      <div class="card-header d-flex justify-content-between align-items-center py-3">
          <h6 class="m-0 font-weight-bold text-primary">List Data Lesson</h6>
          <button type="button" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#exampleModal">
            <span class="icon text-white-50">
              <i class="fas fa-plus"></i>
            </span>
            <span class="text">Create Data</span>
          </button>
          <!-- Modal Create -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-dark font-weight-bold" id="exampleModalLabel">Create Lesson</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{-- route('category.store') --}}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="helperText" class="text-dark">Title</label>
                    <input value="{{ old('name') }}" type="text" id="helperText" name="title" class="form-control" placeholder="Input class title here...">
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
                      <th>Class</th>
                      <th>Slug</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Title</th>
                      <th>Class</th>
                      <th>Slug</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
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
                                    <th>Slug</th>
                                    <td>so don't expect something</td>
                                  </tr>
                                  <tr>
                                    <th>Class</th>
                                    <td>Artifical Illuminate</td>
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
                                <h5 class="modal-title text-dark font-weight-bold" id="exampleModalLabel">Edit Class</h5>
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