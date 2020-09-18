@extends('backend.Teacher_role.teacherhome')
@section('content')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row mb-5">
    <div class="col-md-12 text-center">
      <h1 class="h3 mb-0 text-gray-800 d-inline-block"><i class="fas fa-chalkboard-teacher"></i>Teacher Detail </h1>
    </div>
  </div>


  <div class="container table-bordered border-info my-3">

    <div class="row">
      <div class="log-4">



        <img src="{{asset($teacher->photo)}}" class="my-3 mx-3" style="width:260px">

      </div>

      <div class="log-4 mx-5 my-3">
       <p><strong>Teacher Name:{{$teacher->user->name}}</strong></p>
       <p><strong>Email:{{$teacher->user->email}}</strong></p>
       <p><strong>Address : {{$teacher->address}}</strong></p>

     </div>
     <div class="log-4 mx-5 my-3">
      <p><strong>Salary :{{$teacher->salary}}</strong></p>
      <p><strong>NRC : {{$teacher->nrc}}</strong> </p>
      <p><strong>Phone No : {{$teacher->phoneno}}</strong></p>

      
    </div>
  </div>
  
</div>
<div class="container">

  <a href="{{route('teacherhomepage')}}" style="text-decoration: none" class="btn btn-primary float-right"><i class="fas fa-backward pr-2"></i>Back</a>


</div>

@endsection