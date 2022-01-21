@extends('teacher_master')
@section('content')
  <div class="col-12 col-lg-12 grid-margin">
                  <div class="card shadow p-3 m-5 bg-white rounded">
                      <div class="card-body px-5">
                          <h2 class="card-title">Show Attandance</h2>
                          @if(Session::has('message'))
                          <div class="bg-dark text-success text-center p-2">{{ Session::get('message') }}</div>
                          @endif
                         <!-- Start Table -->
                         <table class="table table-striped" style="width:100%;">
                    <thead>
                      <tr class="bg-info">
                          <th>#</th>
                          <th>Name</th>
                          <th>Id</th>
                          <th>Date</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                          @php
                            $i=0;
                          @endphp
                      @foreach($attendences AS $attendence)
                       <tr>
                       	<td>{{++$i}}</td>
                       	<td>
                               @if($attendence->User)
                               {{ $attendence->User->name }}
                               @endif
                        </td>
                       	<td>
                           @if($attendence->User)
                               {{ $attendence->User->teacher_student_id }}
                           @endif
                        </td>
                       	<td>
                           @if($attendence->User)
                               {{ $attendence->attendence_date }}
                           @endif
                        </td>
                       	<td>
                            <a class="btn btn-success">Present</a>
                       	</td>
                       </tr>
                      @endforeach
                    </tbody>
                  </table>
                         <!-- End Table -->
                      </div>
                      </div>
                      </div>
@endsection
