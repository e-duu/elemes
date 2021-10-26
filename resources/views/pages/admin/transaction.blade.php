@extends('layouts.admin')
@section('title')
  e - Learning Admin | Transaction
@endsection
@section('sub-title')
  Transaction
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
                        <th>#</th>
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
                        <th>#</th>
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
                          <td>1</td>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>2011/04/25</td>
                          <td>61</td>
                          <td>$320,800</td>
                          <td>
                            <a href="{{-- route('transactions.edit', $item->id) --}}" class="btn btn-primary btn-sm">
                              <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{-- route('transactions.edit', $item->id) --}}" class="btn btn-warning btn-sm">
                              <i class="fas fa-edit"></i>
                            </a>
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