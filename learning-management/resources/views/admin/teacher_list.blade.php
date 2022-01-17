@extends('admin_master')
@section('content')
            <div class="col-12 col-lg-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">
                                Basic form elements
                                <a href="{{ URL::to('admin/add_teacher') }}" class="btn btn-success float-right">Add New</a>
                          </h2>
                          @if(Session::has('message'))
                          <div class="bg-dark text-success text-center p-2">{{ Session::get('message') }}</div>
                          @endif
                      </div>
                  </div>
                  <!-- Start Teacher List -->
                  <table class="table table-dark table-striped" style="width:100%;">
                    <thead>
                      <tr class="bg-info">
                          <th>#</th>
                          <th>Name</th>
                          <th>Department</th>
                          <th>Id</th>
                          <th>Email</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                          @php 
                            $i=0;
                          @endphp
                      @foreach($teachers AS $teacher)
                       <tr>
                       	<td>{{++$i}}</td>
                       	<td>{{ $teacher->name }}</td>
                       	<td>{{ $teacher->dept }}</td>
                       	<td>{{ $teacher->teacher_student_id }}</td>
                       	<td>{{ $teacher->email }}</td>
                       	<td>
                       		<a href="{{ URL::to('admin/teacher_edit',['id'=>$teacher->id]) }}">
                       			<button class="btn btn-outline-info">Edit</button>
                       		</a>
                       		<a href="{{ URL::to('admin/teacher_delete',['id'=>$teacher->id]) }}"><button class="btn btn-outline-danger">Delete</button>
        
                       		</a>
                       	</td>
                       </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <!-- End Teacher List -->
            </div>
@endsection