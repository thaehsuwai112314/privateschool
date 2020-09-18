@extends('backendtemplate')

@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row mb-5">
    <div class="col-md-12">
      <h1 class="h3 mb-0 text-gray-800 d-inline-block"><i class="fas fa-credit-card"></i> Payment Detail </h1>
    </div>
  </div>

<div class="card border-success mb-3" style="max-width: 30rem;">
  <div class="card-header">{{$payment->student->user->name}}</div>
  <div class="card-body ">
    
 
  
    <p>Total Amount:{{$payment->total_amount}}</p>

        <p>First Payment Date : {{$payment->first_installation_date}}</p>
        <p>First Payment Amount : {{$payment->first_installation_payment}} </p>
        <p>Second Payment Date : {{$payment->secondpaymentdate}} </p>
        <p>Second Payment Amount : {{$payment->secondpayment}}</p>
        <p>Third Payment Date :{{$payment->thirdpaymentdate}}</p>
        <p>Third Payment Amount : {{$payment->thirdpaymente}}</p>
        <p>Class : {{$payment->class->name}}</p>
        <p>Grade : {{$payment->class->grade->name}}</p>
  </div>
  <div class="col-3">
            <a href="{{route('payment.index')}}" class="btn btn-success btn-block float-right"> 
                    <i class="fas fa-backward pr-2"></i>  Back 
                  </a>
          </div>
</div>
</div>
@endsection