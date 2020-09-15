@extends('backendtemplate')
@section('contend')


  <div class=" mb-4">
    <div class="card-header py-3">
      <div class="row">
        <div class="col-10">
            <h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-table"></i> 
    Timetable  List
  </h1>
         
        </div>

        <div class="col-2">
          <a href="{{route('timetable.create')}}" class="btn btn-success btn-block float-right"> 
            <i class="fa fa-plus"></i> New Timetable 
          </a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered ml-3">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Day</th>
              <th>StartTime</th>
              <th>EndTime</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @php $i=1; @endphp
            @foreach($timetables as $timetable)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$timetable->day}}</td>             
              
              <td>{{$timetable->starttime}}</td>
              <td>{{$timetable->endtime}}</td>
              <td>
                 <a href="{{route('timetable.show',$timetable->id)}}" class="btn btn-primary"><i class="fas fa-info fa-1x"></i></a>
                <a href="{{route('timetable.edit',$timetable->id)}}" class="btn btn-warning"><i class="fas fa-edit fa-1x"></i></a>
                            <form method="post" action="{{route('timetable.destroy',$timetable->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button  type="submit" class="btn btn-danger"><i class="fas fa-trash fa-1x"></i></button> 
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