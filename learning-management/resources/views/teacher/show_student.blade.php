@extends('teacher_master')
@section('content')
  <div class="col-12 col-lg-12 grid-margin">
                  <div class="card shadow p-3 m-5 bg-white rounded">
                      <div class="card-body px-5">
                          <h2 class="card-title">Basic form elements</h2>
                          @if(Session::has('message'))
                          <div class="bg-dark text-success text-center p-2">{{ Session::get('message') }}</div>
                          @endif
                          <form action="{{ URL::to('teacher/student_edit',['id'=>$user->id]) }}" method="POST">
                             @csrf
                             <div class="row">
                                   <div class="col-md-3">
                            <div class="form-group">
                                  <label>Name</label>
                                  <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{$user->name}}" required>
                            </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label>Department</label>
                                  
                                  <select class="form-control" name="dept" id="" required>
                                  <option value="">--Department--</option>
                                  <option @if($user->dept=="CSE") selected @endif value="CSE">CSE</option>
                                  <option  @if($user->dept=="EEE") selected @endif value="EEE">EEE</option>
                                  <option  @if($user->dept=="ECE") selected @endif value="ECE">ECE</option>
                                  <option  @if($user->dept=="BBA") selected @endif value="BBA">BBA</option>
                                  <option  @if($user->dept=="MBA") selected @endif value="MBA">MBA</option>
                                  </select>
                              </div>
                              </div>
                              <div class="col-md-3">
                            <div class="form-group">
                                  <label>Batch</label>
                                  <input type="number" class="form-control" placeholder="Batch" name="batch" value="{{$user->batch}}" required>    
                            </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label>Section</label>
                                  
                                  <select class="form-control" name="section" id="" required>
                                  <option value="">--Section--</option>
                                  <option @if($user->section=="A") selected @endif value="A">A</option>
                                  <option @if($user->section=="B") selected @endif value="B">B</option>
                                  <option @if($user->section=="C") selected @endif value="c">c</option>
                                  <option @if($user->section=="D") selected @endif value="D">D</option>
                                  <option @if($user->section=="E") selected @endif value="E">E</option>
                                  <option @if($user->section=="F") selected @endif value="F">F</option>
                                  <option @if($user->section=="G") selected @endif value="G">G</option>
                                  <option @if($user->section=="H") selected @endif value="H">H</option>
                                  <option @if($user->section=="I") selected @endif value="I">I</option>
                                  <option @if($user->section=="J") selected @endif value="J">J</option>
                                  <option @if($user->section=="K") selected @endif value="K">K</option>
                                  <option @if($user->section=="L") selected @endif value="L">L</option>
                                  <option @if($user->section=="M") selected @endif value="M">M</option>
                                  <option @if($user->section=="N") selected @endif value="N">N</option>
                                  <option @if($user->section=="O") selected @endif value="O">O</option>
                                  <option @if($user->section=="P") selected @endif value="P">P</option>
                                  <option @if($user->section=="Q") selected @endif value="Q">Q</option>
                                  <option @if($user->section=="R") selected @endif value="R">R</option>
                                  <option @if($user->section=="S") selected @endif value="S">S</option>
                                  <option @if($user->section=="T") selected @endif value="T">T</option>
                                  <option @if($user->section=="U") selected @endif value="U">U</option>
                                  <option @if($user->section=="V") selected @endif value="V">V</option>
                                  <option @if($user->section=="W") selected @endif value="W">W</option>
                                  <option @if($user->section=="X") selected @endif value="X">X</option>
                                  <option @if($user->section=="Y") selected @endif value="Y">Y</option>
                                  <option @if($user->section=="Z") selected @endif value="Z">Z</option>
                                  </select>
                              </div>
                              </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                  <label>Teacher Id</label>
                                  <input type="text" class="form-control" placeholder="Student's Id" name="teacher_student_id" value="{{$user->teacher_student_id}}" required>    
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                  <label 
                                  >Email address</label>
                                  <input type="email" class="form-control"  placeholder="Enter email" name="email" value="{{$user->email}}" required>
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            </div>
                              <div class="col-md-3">
                                 <button type="submit" class="btn btn-success btn-block mt-4">Submit</button>
                              </div>
                              </div>
                             
                          </form>
                      </div>
                      </div>
                      </div>
@endsection