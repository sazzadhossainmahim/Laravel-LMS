@extends('admin_master')
@section('content')
  <div class="col-12 col-lg-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Basic form elements</h2>
                          @if(Session::has('message'))
                          <div class="bg-dark text-success text-center p-2">{{ Session::get('message') }}</div>
                          @endif
                          <form action="{{ URL::to('admin/teacher_edit',['id'=>$user->id]) }}" method="POST">
                             @csrf
                            <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input type="text" value="{{$user->name}}" class="form-control p-input" id="exampleInputEmail2" placeholder="Enter name" name="name" required>
                            </div>
                            <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Id</label>
                                  <input type="text" value="{{$user->teacher_student_id}}" class="form-control p-input" id="exampleInputEmail3" placeholder="Teacher's Id" name="teacher_student_id" required>    
                            </div>
                            <div class="form-group">
                                  <label for="exampleInputEmail1">Email address</label>
                                  <input type="email" value="{{$user->email}}" class="form-control p-input" id="exampleInputEmail1"  placeholder="Enter email" name="email" required>
                            </div>
                            <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" value="" class="form-control p-input" id="exampleInputPassword1" placeholder="Password" name="password">
                            </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Department</label>
                                  
                                  <select class="form-control p-input" name="dept" id="" required>
                                  <option value="">--Department--</option>
                                  <option @if($user->dept=="CSE") selected @endif value="CSE">CSE</option>
                                  <option @if($user->dept=="EEE") selected @endif value="EEE">EEE</option>
                                  <option @if($user->dept=="ECE") selected @endif value="ECE">ECE</option>
                                  <option @if($user->dept=="BBA") selected @endif value="BBA">BBA</option>
                                  <option @if($user->dept=="MBA") selected @endif value="MBA">MBA</option>
                                  </select>
                              </div>
                              <button type="submit" class="btn btn-success">Submit</button>
                          </form>
                      </div>
                      </div>
                      </div>
@endsection