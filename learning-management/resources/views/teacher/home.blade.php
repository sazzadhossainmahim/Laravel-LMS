@extends('teacher_master')
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
                        
                      </div>
                      </div>
                      </div>
@endsection