@extends('teacher_master')
@section('content')
  <div class="col-12 col-lg-12 grid-margin">
                  <div class="card shadow p-3 m-5 bg-white rounded">
                      <div class="card-body px-5">
                          <h2 class="card-title">Attandance</h2>
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
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                          @php
                            $i=0;
                          @endphp
                      @foreach($users AS $user)
                       <tr>
                       	<td>{{++$i}}</td>
                       	<td>{{ $user->name }}</td>
                       	<td>{{ $user->teacher_student_id }}</td>
                       	<!-- <td>{{ $user->batch }}</td> -->
                       	<td>
                       		@if(!$user->Check)
                               <form action="{{ URL::to('teacher/submit_attendence') }}" method="POST">
                                  @csrf
                                  <input name="code" value="{{$code}}" hidden/>
                                  <input name="user_id" value="{{$user->id}}" hidden/>
                                  <button type="submit" class="btn btn-danger">Absent</button>
                               </form>
                            @else
                               <a class="btn btn-success">Present</a>
                            @endif
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
