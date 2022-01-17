@extends('teacher_master')
@section('content')
  <div class="col-12 col-lg-12 grid-margin">
                  <div class="card shadow p-3 m-5 bg-white rounded">
                      <div class="card-body px-5">
                          <h2 class="card-title">Basic form elements</h2>
                          @if(Session::has('message'))
                          <div class="bg-dark text-success text-center p-2">{{ Session::get('message') }}</div>
                          @endif
                          <form action="{{ URL::to('teacher/take-attendence') }}" method="get">
                             @csrf
                             <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label 
                                  >Department</label>
                                  
                                  <select class="form-control" name="dept" id="" required>
                                  <option value="">--Department--</option>
                                  <option value="CSE">CSE</option>
                                  <option value="EEE">EEE</option>
                                  <option value="ECE">ECE</option>
                                  <option value="BBA">BBA</option>
                                  <option value="MBA">MBA</option>
                                  </select>
                              </div>
                              </div>
                              <div class="col-md-3">
                            <div class="form-group">
                                  <label>Batch</label>
                                  <input type="number" class="form-control" placeholder="Batch" name="batch" required>    
                            </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Course Code</label>
                                    <select class="form-control" name="code" required>
                                        <option value="">Select</option>
                                        @foreach($courses as $course)
                                            <option value="{{$course->code}}">{{$course->code}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label>Section</label>
                                  
                                  <select class="form-control" name="section" id="" required>
                                  <option value="">--Section--</option>
                                  <option value="A">A</option>
                                  <option value="B">B</option>
                                  <option value="C">C</option>
                                  <option value="D">D</option>
                                  <option value="E">E</option>
                                  <option value="F">F</option>
                                  <option value="G">G</option>
                                  <option value="H">H</option>
                                  <option value="I">I</option>
                                  <option value="J">J</option>
                                  <option value="K">K</option>
                                  <option value="L">L</option>
                                  <option value="M">M</option>
                                  <option value="N">N</option>
                                  <option value="O">O</option>
                                  <option value="P">P</option>
                                  <option value="Q">Q</option>
                                  <option value="R">R</option>
                                  <option value="S">S</option>
                                  <option value="T">T</option>
                                  <option value="U">U</option>
                                  <option value="V">V</option>
                                  <option value="W">W</option>
                                  <option value="X">X</option>
                                  <option value="Y">Y</option>
                                  <option value="Z">Z</option>
                                  </select>
                              </div>
                              </div>
                              <div class="col-md-3">
                                 <button type="submit" class="btn btn-success btn-block mt-4">Take Attendence</button>
                              </div>
                              </div>
                             
                          </form>
                      </div>
                      </div>
                      </div>
@endsection