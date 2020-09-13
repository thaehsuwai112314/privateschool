@extends('backendtemplate')
@section('contend')


  <div class=" mb-4">
    <div class="card-header py-3">
      <div class="row">
        <div class="col-10">
            <h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-chalkboard-teacher"></i> 
    Exam  List
  </h1>
         
        </div>

        <div class="col-2">
          <a href="{{route('teacher.create')}}" class="btn btn-success btn-block float-right"> 
            <i class="fa fa-plus"></i> New Register 
          </a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Photo</th>
              <th>Address</th>
              <th>Phone No</th>
              <th>Salary</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @php $i=1; @endphp
            @foreach($teachers as $teacher)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$teacher->user->name}}</td>             
              <td> <img src="{{asset($teacher->photo)}}" width="120px" height="100px"></td>
              <td>{{$teacher->address}}</td>
              <td>{{$teacher->phoneno}}</td>
              <td>{{$teacher->salary}}</td> 
              <td>
                 <a href="{{route('teacher.show',$teacher->id)}}" class="btn btn-primary"><i class="fas fa-info fa-2x"></i></a>
                <a href="{{route('teacher.edit',$teacher->id)}}" class="btn btn-warning"><i class="fas fa-edit fa-2x"></i></a>
                            <form method="post" action="{{route('teacher.destroy',$teacher->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button  type="submit" class="btn btn-danger"><i class="fas fa-trash fa-2x"></i></button> 
                            </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>
@endsection