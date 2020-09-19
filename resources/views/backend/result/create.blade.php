@extends('backendtemplate')

@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="row">
      <div class="col">
        <h1 class="h3 mb-0 text-gray-800"> <i class="fas fa-book-open"></i>Add New Result </h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form action="{{route('result.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row {{ $errors->has('marks') ? 'has-error' : '' }}">
            <label for="inputName" class="col-sm-2 col-form-label">Marks</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="marks" name="marks">
              <span class="text-danger">{{ $errors->first('marks') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="inputName" class="col-sm-2 col-form-label">Student Name</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" name="student_id">
                <optgroup label="Choose Student">
                   @foreach($students as $student)
                    <option value="{{$student->id}}">{{$student->name}}</option>
                  @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('student') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="inputName" class="col-sm-2 col-form-label">Student Name</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" name="student_id">
                <optgroup label="Choose Student">
                   @foreach($students as $student)
                    <option value="{{$student->id}}">{{$student->name}}</option>
                  @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('student') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('examination') ? 'has-error' : '' }}">
            <label for="inputName" class="col-sm-2 col-form-label">Exam Name</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" name="exam_id">
                <optgroup label="Choose Student">
                   @foreach($examinations as $examination)
                    <option value="{{$examination->id}}">{{$examination->name}}</option>
                  @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('examination') }}</span>
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