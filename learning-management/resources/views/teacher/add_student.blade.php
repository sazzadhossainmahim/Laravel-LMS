@extends('teacher_master')
@section('content')
  <div class="col-12 col-lg-12 grid-margin">
                  <div class="card shadow p-3 m-5 bg-white rounded">
                      <div class="card-body px-5">
                          <h2 class="card-title">Basic form elements</h2>
                          @if(Session::has('message'))
                          <div class="bg-dark text-success text-center p-2">{{ Session::get('message') }}</div>
                          @endif
                          <form action="{{ URL::to('teacher/add_student') }}" method="POST">
                             @csrf
                             <div class="row">
                                   <div class="col-md-3">
                            <div class="form-group">
                                  <label>Name</label>
                                  <input type="text" class="form-control" placeholder="Enter name" name="name" required>
                            </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label 
                                  >Department</label>
                                  
                                  <select class="form-control" name="dept" id="" required>
                                  <option value="">--Department--</option>
                                  <option value="SWE">SWE</option>
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
                                  <label>Section</label>
                                  
                                  <select class="form-control" name="section" id="" required>
                                  <option value="">--Section--</option>
                                  <option value="A">A</option>
                                  <option value="B">B</option>
                                  <option value="c">c</option>
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
                                  <label>Teacher Id</label>
                                  <input type="text" class="form-control" placeholder="Student's Id" name="teacher_student_id" required>    
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                  <label 
                                  >Email address</label>
                                  <input type="email" class="form-control"  placeholder="Enter email" name="email" required>
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control" placeholder="Password" name="password" required>
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
                     <div class="row">
                           <div class="col-md-1"></div>
                           <div class="col-md-10">
                                  <!-- Start Student -->
                      <table class="table table-striped" style="width:100%;">
                    <thead>
                      <tr class="bg-info">
                          <th>#</th>
                          <th>Name</th>
                          <th>Dept.</th>
                          <th>Batch</th>
                          <th>Section</th>
                          <th>Id</th>
                          <th>Email</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                          @php 
                            $i=0;
                          @endphp
                      @foreach($students AS $student)
                       <tr>
                       	<td>{{++$i}}</td>
                       	<td>{{ $student->name }}</td>
                       	<td>{{ $student->dept }}</td>
                       	<td>{{ $student->batch }}</td>
                       	<td>{{ $student->section }}</td>
                       	<td>{{ $student->teacher_student_id }}</td>
                       	<td>{{ $student->email }}</td>
                       	<td>
                       		<a href="{{ URL::to('teacher/student_edit',['id'=>$student->id]) }}">
                       			<button class="btn btn-outline-info">Edit</button>
                       		</a>
                       		<a href="{{ URL::to('teacher/student_delete',['id'=>$student->id]) }}"><button class="btn btn-outline-danger">Delete</button>
        
                       		</a>
                       	</td>
                       </tr>
                      @endforeach
                    </tbody>
                  </table>
                      <!-- End Student -->
                           </div>
                           <div class="col-md-1"></div>
                     </div>
@endsection