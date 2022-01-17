@extends('admin_master')
@section('content')
  <div class="col-12 col-lg-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Basic form elements</h2>
                          <div class="bg-dark text-success text-center p-2">
                            <?php 
                   $message=Session::get('message');
                   if($message){
                    echo $message;
                    Session::put('message',null);
                   }
                 ?>
                          </div>
                          <!-- <form class="{{ URL::to('addStudent') }}" method="POST" enctype="multipart/form-data">
                             @csrf
                            <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" placeholder="Enter name" name="name">
                            </div>
                            <div class="form-group">
                                  <label for="exampleInputEmail1">Roll</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" placeholder="Roll" name="roll">    
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Father Name</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" placeholder="Father name" name="fName">    
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Mother Name</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" placeholder="Mother Name" name="mName">    
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email address</label>
                                  <input type="email" class="form-control p-input" id="exampleInputEmail1"  placeholder="Enter email" name="email">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Phone</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" placeholder="Enter phone" name="phone">
                              </div>
                          
                            <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control p-input" id="exampleInputPassword1" placeholder="Password" name="password">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Address</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" placeholder="Address" name="address">
                              </div>

                               <div class="form-group">
                                  <label>Image</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                      <input type="file" class="form-control-file" id="exampleInputFile2" name="image"/>
                                    </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Department</label>
                                  
                                  <select class="form-control p-input" name="department" id="">
                                  <option value="">--Department--</option>
                                  <option value="CSE">CSE</option>
                                  <option value="EEE">EEE</option>
                                  <option value="ECE">ECE</option>
                                  <option value="BBA">BBA</option>
                                  <option value="MBA">MBA</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Admission Year</label>
                                  <input type="date" class="form-control p-input" id="exampleInputEmail1" placeholder="Enter year" name="year">
                              </div>
                             
                              <button type="submit" class="btn btn-success">Submit</button>
                          </form> -->
                      </div>
                      </div>
                      </div>
@endsection