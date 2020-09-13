@extends('backendtemplate')

@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="row">
      <div class="col">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-user-graduate"></i> Student Register</h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          {{-- <div class="form-group row">
            <label for="inputEnrollno" class="col-sm-2 col-form-label">Enroll No</label>
            <div class="col-sm-5">
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="inputCodeno" name="enrollno">
              <span class="text-danger">{{ $errors->first('enrollno') }}</span>
            </div>
          </div> --}}
          <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputName" name="name">
              <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
              <input type="email" class="form-control" id="inputEmail" name="email">
              <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('photo') ? 'has-error' : '' }}">
            <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
            <div class="col-sm-5">
              <input type="file" id="inputPhoto" name="photo" class="d-block">
              <span class="text-danger">{{ $errors->first('photo') }}</span>
            </div>
          </div>
             <div class="form-group row {{ $errors->has('address') ? 'has-error' : '' }}">
              <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
              <div class="col-sm-5">
                <textarea id="inputAddress" class="form-control" name="address"></textarea>
                <span class="text-danger">{{ $errors->first('address') }}</span>
              </div>
            </div>
          

          <div class="form-group row {{ $errors->has('dob') ? 'has-error' : '' }}">
            <label for="dateob" class="col-sm-2 col-form-label">Date Of Birth</label>
            <div class="col-sm-5">
              <input type="date" class="form-control" id="dateob" name="dob" value="0">
              <span class="text-danger">{{ $errors->first('dob') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('fname') ? 'has-error' : '' }}">
            <label for="inputFather" class="col-sm-2 col-form-label">Father Name</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputFather" name="fname" >
              <span class="text-danger">{{ $errors->first('fname') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('father_nrc') ? 'has-error' : '' }}">
            <label for="inputFathernrc" class="col-sm-2 col-form-label">Father NRC</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputFathernrc" name="father_nrc" >
              <span class="text-danger">{{ $errors->first('father_nrc') }}</span>
            </div>
          </div>
         {{--  <div class="form-group row {{ $errors->has('payment') ? 'has-error' : '' }}">
            <label for="inputPayment" class="col-sm-2 col-form-label">Payment</label>
            <div class="col-sm-5">
              <input type="number" class="form-control" id="inputDiscount" name="payment" value="100000">
              <span class="text-danger">{{ $errors->first('payment') }}</span>
            </div>
          </div> --}}
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
          <div class="form-group row {{ $errors->has('grade') ? 'has-error' : '' }}">
            <label for="inputGrade" class="col-sm-2 col-form-label">Grade</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md grade" id="inputGrade year" name="grade">
                <optgroup label="Choose Grde">
                  @foreach($grades as $grade)
                    <option value="{{$grade->id}}">{{$grade->name}}</option>
                  @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('grade') }}</span>
            </div>
          </div>



          <div class="form-group row {{ $errors->has('class') ? 'has-error' : '' }}">
            <label for="inputClass" class="col-sm-2 col-form-label">Class</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md stuclass" id="inputClass" name="class">
                <optgroup label="Choose Class">
                   @foreach($classes as $class)
                    <option value="{{$class->id}}">{{$class->name}}</option>
                  @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('class') }}</span>
            </div>
          </div>
         {{--  <section id="major">
    <label>Major:</label>
    <input type="radio" name="major" value="cs" id="cs" checked>
    <label for="cs">Bio</label>
    <input type="radio" name="major" value="ct" id="ct"  >
    <label for="ct">Eco</label>
    <br></section> --}}
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