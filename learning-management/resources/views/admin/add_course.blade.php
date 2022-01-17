@extends('admin_master')
@section('content')
  <div class="col-12 col-lg-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Basic form elements</h2>
                          @if(Session::has('message'))
                          <div class="bg-dark text-success text-center p-2">{{ Session::get('message') }}</div>
                          @endif
                          <form action="{{ URL::to('admin/add_course') }}" method="POST">
                             @csrf
                            <div class="form-group">
                                  <label for="exampleInputEmail1">Course Code</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail2" placeholder="Course Code" name="code" required>
                            </div>
                            <div class="form-group">
                                  <label for="exampleInputEmail1">Course Title</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail3" placeholder="Course Title" name="title" required>    
                            </div>
                              <button type="submit" class="btn btn-success">Submit</button>
                          </form>
                      </div>
                      </div>
                      </div>
@endsection