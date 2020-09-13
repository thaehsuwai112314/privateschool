@extends('backendtemplate')

@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="row">
      <div class="col">
        <h1 class="h3 mb-0 text-gray-800">New Timeable</h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form action="{{route('timetable.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row {{ $errors->has('day') ? 'has-error' : '' }}">
            <label for="inputDay" class="col-sm-2 col-form-label">Day</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" id="inputDay" name="day">
                <optgroup label="Choose Day">
                  @foreach($timetables as $timetable)
                    <option value="{{$timetable->id}}">{{$timetable->day}}</option>
                  @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('day') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('starttime') ? 'has-error' : '' }}">
            <label for="inputStarttime" class="col-sm-2 col-form-label">StartTime</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputStarttime" name="starttime">
              <span class="text-danger">{{ $errors->first('starttime') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('endtime') ? 'has-error' : '' }}">
            <label for="inputEndtime" class="col-sm-2 col-form-label">EndTime</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputEndtime" name="endtime">
              <span class="text-danger">{{ $errors->first('endtime') }}</span>
            </div>
          </div>


          <div class="form-group row {{ $errors->has('class') ? 'has-error' : '' }}">
            <label for="inputClass" class="col-sm-2 col-form-label">Class</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" id="inputClass" name="class">
                <optgroup label="Choose Class">
                   @foreach($classes as $class)
                    <option value="{{$class->id}}">{{$class->name}}</option>
                  @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('class') }}</span>
            </div>
          </div>


          
          <div class="form-group row {{ $errors->has('subject') ? 'has-error' : '' }}">
            <label for="inputSubject" class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" id="inputSubject" name="subject">
                <optgroup label="Choose Grde">
                  @foreach($subjects as $subject)
                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                  @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('subject') }}</span>
            </div>
          </div>


           <div class="form-group row {{ $errors->has('academic') ? 'has-error' : '' }}">
            <label for="inputAcademic" class="col-sm-2 col-form-label">Academic</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" id="inputAcademic" name="academic">
                <optgroup label="Choose Academic">
                  @foreach($academics as $academic)
                    <option value="{{$academic->id}}">{{$academic->name}}</option>
                  @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('academic') }}</span>
            </div>
          </div>


          
          <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="inputTeacher" class="col-sm-2 col-form-label">Teacher</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" id="inputTeacher" name="name">
                <optgroup label="Choose Teacher">
                  @foreach($teachers as $teacher)
                    <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                  @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-5">
              <input type="submit" class="btn btn-success" name="btnsubmit" value="Register">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection