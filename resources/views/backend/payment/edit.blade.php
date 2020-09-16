@extends('backendtemplate')

@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="row">
      <div class="col">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-credit-card"></i> Payment Register</h1>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form action="{{route('payment.store',$payment->id)}}" method="post" enctype="multipart/form-data">
          @csrf
  <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="inputName" class="col-sm-2 col-form-label">Student Name</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" name="student_id">
                <optgroup label="Choose Student">
                   @foreach($students as $student)
                    <option value="{{$student->id}}">{{$student->user->name}}</option>
                  @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('student') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('class') ? 'has-error' : '' }}">
            <label for="inputClass" class="col-sm-2 col-form-label">Class</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md stuclass" id="inputClass" name="class">
                <optgroup label="Choose Class">
                    @foreach($classes as $row)
                <option value="{{$row->id}}" @if($payment->class_id == $row->id){{'selected'}} @endif>{{$row->name}}
                </option>
              @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('class') }}</span>
            </div>
          </div>
                    <div class="form-group row {{ $errors->has('academic') ? 'has-error' : '' }}">
            <label for="inputAcademic" class="col-sm-2 col-form-label">Academic</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" id="inputAcademic" name="academic">
                <optgroup label="Choose Academic">
                  @foreach($academics as $row)
                <option value="{{$row->id}}" @if($payment->academic_id == $row->id){{'selected'}} @endif>{{$row->name}}
                </option>
              @endforeach
          </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('academic') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('totalamount') ? 'has-error' : '' }}">
            <label for="totalamount" class="col-sm-2 col-form-label">Total Amount</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="totalamount" name="totalamount" value="{{$payment->total_amount}}" >
              <span class="text-danger">{{ $errors->first('totalamount') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('firstpaymentdate') ? 'has-error' : '' }}">
            <label for="firstpaymentdate" class="col-sm-2 col-form-label">First Payment Date</label>
            <div class="col-sm-5">
              <input type="date" class="form-control" id="firstpaymentdate" name="firstpaymentdate" value="{{$payment->first_installation_date}}">
              <span class="text-danger">{{ $errors->first('firstpaymentdate') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('firstpayment') ? 'has-error' : '' }}">
            <label for="firstpayment" class="col-sm-2 col-form-label">First Payment Amount</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="firstpayment" name="firstpayment" value="{{$payment->first_installation_payment}}">
              <span class="text-danger">{{ $errors->first('firstpayment') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('secondpaymentdate') ? 'has-error' : '' }}">
            <label for="secondpaymentdate" class="col-sm-2 col-form-label">Second Payment Date</label>
            <div class="col-sm-5">
              <input type="date" class="form-control" id="secondpaymentdate" name="secondpaymentdate" value="{{$payment->second_installation_date}}">
              <span class="text-danger">{{ $errors->first('secondpaymentdate') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('secondpayment') ? 'has-error' : '' }}">
            <label for="secondpayment" class="col-sm-2 col-form-label">Second Payment Amount</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="secondpayment" name="secondpayment" value="{{$payment->second_installation_payment}}" >
              <span class="text-danger">{{ $errors->first('secondpayment') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('thirdpaymentdate') ? 'has-error' : '' }}">
            <label for="thirdpaymentdate" class="col-sm-2 col-form-label">Third Payment Date</label>
            <div class="col-sm-5">
              <input type="date" class="form-control" id="thirdpaymentdate" name="thirdpaymentdate" value="{{$payment->third_installation_date}}">
              <span class="text-danger">{{ $errors->first('thirdpaymentdate') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('thirdpayment') ? 'has-error' : '' }}">
            <label for="thirdpayment" class="col-sm-2 col-form-label">Third Payment Amount</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="thirdpayment" name="thirdpayment" value="{{$payment->third_installation_payment}}">
              <span class="text-danger">{{ $errors->first('thirdpayment') }}</span>
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