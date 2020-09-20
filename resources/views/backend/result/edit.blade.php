@extends('backendtemplate')
@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-marker"></i>Result Edit 
    </h1>
  </div>
  <div class="container">
    <form action="{{route('result.update',$result->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      
      <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
        <label for="inputName" class="col-sm-2 col-form-label"> Student Name</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputName" name="name" value="{{$result->student->user->name}}">
          <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
      </div>
        <div class="form-group row {{ $errors->has('academic') ? 'has-error' : '' }}">
            <label for="inputAcademic" class="col-sm-2 col-form-label">Academic</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" id="inputAcademic" name="academic">
                <optgroup label="Choose Academic">
                  @foreach($academics as $row)
                 <option value="{{$row->id}}" @if($result->academic_id == $row->id){{'selected'}} @endif>{{$row->name}}
                 </option>
                 @endforeach
               </optgroup>
             </select>
             <span class="text-danger">{{ $errors->first('academic') }}</span>
           </div>
         </div>
          <div class="form-group row {{ $errors->has('grade') ? 'has-error' : '' }}">
          <label for="inputGrade" class="col-sm-2 col-form-label">Grade</label>
          <div class="col-sm-5">
            <select class="form-control form-control-md" id="inputGrade" name="grade">
              <optgroup label="Choose Grde">
               @foreach($grades as $row)
               <option value="{{$row->id}}" @if($result->class->grade_id == $row->id){{'selected'}} @endif>{{$row->name}}
               </option>
               @endforeach
             </optgroup>
           </select>
           <span class="text-danger">{{ $errors->first('grade') }}</span>
         </div>
       </div>



       <div class="form-group row {{ $errors->has('class') ? 'has-error' : '' }}">
        <label for="inputClass" class="col-sm-2 col-form-label">Class</label>
        <div class="col-sm-5">
          <select class="form-control form-control-md" id="inputClass" name="class">
            <optgroup label="Choose Class">
              @foreach($classes as $row)
              <option value="{{$row->id}}" @if($result->class_id == $row->id){{'selected'}} @endif>{{$row->name}}
              </option>
              @endforeach
            </optgroup>
          </select>
          <span class="text-danger">{{ $errors->first('class') }}</span>
        </div>
      </div>
       <div class="form-group row {{ $errors->has('grade') ? 'has-error' : '' }}">
          <label for="inputGrade" class="col-sm-2 col-form-label">Exam Name</label>
          <div class="col-sm-5">
            <select class="form-control form-control-md" id="inputGrade" name="grade">
              <optgroup label="Choose Grde">
               @foreach($exams as $row)
               <option value="{{$row->id}}" @if($result->exam_id == $row->id){{'selected'}} @endif>{{$row->name}}
               </option>
               @endforeach
             </optgroup>
           </select>
           <span class="text-danger">{{ $errors->first('grade') }}</span>
         </div>
       </div>



       
          <div class="form-group row {{ $errors->has('subject') ? 'has-error' : '' }}">
            <label for="inputSubject" class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md subject" id="inputSubject" name="subject">
                <optgroup label="Choose Subject">
                   @foreach($subjects as $row)
                <option value="{{$row->id}}" @if($result->subject_id == $row->id){{'selected'}} @endif>{{$row->name}}
                </option>
              @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('subject') }}</span>
            </div>
          </div>
 <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
        <label for="inputName" class="col-sm-2 col-form-label"> Marks</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputName" name="name" value="{{$result->mark}}">
          <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
      </div>
      
        <div class="form-group row">
          <div >
            <input type="submit" class="btn btn-success form-control" id="submit" value="Update" name="btnsubmit">
          </div>
          <div class="col-3">
        <a href="{{route('result.index')}}" class="btn btn-success btn-block float-right"> 
          <i class="fas fa-backward pr-2"></i>  Back 
        </a>
      </div>
        </div>
      </form>
        </div>
    </div>
  @endsection