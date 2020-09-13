@extends('backendtemplate')

@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="row">
      <div class="col">
        <h1 class="h3 mb-0 text-gray-800"> <i class="fas fa-book-open"></i>Add new Examination </h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form action="{{route('examination.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row {{ $errors->has('ename') ? 'has-error' : '' }}">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputName" name="ename">
              <span class="text-danger">{{ $errors->first('ename') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('result') ? 'has-error' : '' }}">
            <label for="inputEmail" class="col-sm-2 col-form-label">Result</label>
            <div class="col-sm-5">
              <input type="number" class="form-control" id="inputEmail" name="result">
              <span class="text-danger">{{ $errors->first('result') }}</span>
            </div>
          </div>
         <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="inputStudent" class="col-sm-2 col-form-label">Student</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" id="inputStudent" name="name">
                <optgroup label="Choose Student">
                   @foreach($students as $student)
                    <option value="{{$student->id}}">{{$student->user->name}}</option>
                  @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('name') }}</span>
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