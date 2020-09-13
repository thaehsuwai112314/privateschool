@extends('backendtemplate')
@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> <i class="fas fa-book-open"></i>Examination Edit Form
    </h1>
  </div>
  <div class="container">
    <form action="{{route('examination.update',$examination->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      {{-- <input type="hidden" name="user_id" value="{{$teacher->user_id}}"> --}}
      <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputName" name="name" value="{{$teacher->user->name}}">
          <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
      </div>
      <div class="form-group row {{ $errors->has('result') ? 'has-error' : '' }}">
        <label for="inputEmail" class="col-sm-2 col-form-label">Result</label>
        <div class="col-sm-5">
          <input type="number" class="form-control" id="inputEmail" name="result" value="{{$examination->result}}">
          <span class="text-danger">{{ $errors->first('result') }}</span>
        </div>
      </div>
      <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
        <label for="inputEmail" class="col-sm-2 col-form-label">Student</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputEmail" name="name" value="{{$student->user->name}}">
          <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
      </div>

      <div class="form-group row {{ $errors->has('subject') ? 'has-error' : '' }}">
            <label for="inputClass" class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" id="inputClass" name="subject">
                <optgroup label="Choose Subjrct">
                    @foreach($subjects as $row)
                <option value="{{$row->id}}" @if($subject->id == $row->id){{'selected'}} @endif>{{$row->name}}
                </option>
              @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('subject') }}</span>
            </div>
          </div>
       
        <div class="form-group row">
          <div >
            <input type="submit" class="btn btn-success form-control" id="submit" value="Update" name="btnsubmit">
          </div>
        </div>
      </form>
        </div>
    </div>
  </div>
  @endsection