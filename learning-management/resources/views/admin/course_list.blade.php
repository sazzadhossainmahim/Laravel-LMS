@extends('admin_master')
@section('content')
            <div class="col-12 col-lg-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">
                                Basic form elements
                                <a href="{{ URL::to('admin/add_course') }}" class="btn btn-success float-right">Add New</a>
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
                          <th>Code</th>
                          <th>Title</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                          @php 
                            $i=0;
                          @endphp
                      @foreach($courses AS $course)
                       <tr>
                       	<td>{{++$i}}</td>
                       	<td>{{ $course->code }}</td>
                       	<td>{{ $course->title }}</td>
                       	<td>
                       		<a href="{{ URL::to('admin/course_edit',['id'=>$course->id]) }}">
                       			<button class="btn btn-outline-info">Edit</button>
                       		</a>
                       		<a href="{{ URL::to('admin/course_delete',['id'=>$course->id]) }}"><button class="btn btn-outline-danger">Delete</button>
        
                       		</a>
                       	</td>
                       </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <!-- End Teacher List -->
            </div>
@endsection