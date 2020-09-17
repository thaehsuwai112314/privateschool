@extends('backendtemplate')
@section('contend')

  <div class=" mb-4">
    <div class="card-header py-3">
      <div class="row">
        <div class="col-10">
          <h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-user-graduate"></i> 
    Exam Result Register List
  </h1>
        </div>

        <div class="col-2">
          <a href="{{route('result.create')}}" class="btn btn-success btn-block float-right"> 
            <i class="fa fa-plus"></i> New Register 
          </a>
        </div>
      </div>
    </div>
  
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered ml-3">
          <thead class="thead-dark">
            <tr>
              <th>Id</th>
              <th>Marks</th>
              <th>Student Name</th>              
              <th>Exam Name</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @php $i=1; @endphp
            @foreach($results as $result)
            <tr>result
              <td>{{$i++}}</td>
              <td>{{$result->name}}</td>
              <td>{{$result->student->name}}</td>
              <td>{{$result->exam->name}} </td>

              
              <td>
                 <a href="{{route('result.show',$result->id)}}" class="btn btn-primary"><i class="fas fa-info fa-2x"></i></a>
                <a href="{{route('result.edit',$result->id)}}" class="btn btn-warning"><i class="fas fa-edit fa-2x"></i></a>
                            <form method="post" action="{{route('result.destroy',$result->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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