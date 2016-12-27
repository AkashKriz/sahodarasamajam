@extends('backend.layouts.layout')
@section('title','Members')
@section('small_title','New')
@section('members','active')
@section('body')

<div class="box box-success">
  
  <div class="box-body">
      
      <form role="form" action="{{url('members/')}}" method="POST" name="form1">
        
        <div class="form-group">
          <label for="firstname">First Name</label>
          <input class="form-control" type="text" name="firstname">
        </div>
        
        <div class="form-group">
          <label for="lname">Last Name</label>
          <input class="form-control" type="text" name="lastname">
        </div>
	      
        <div class="form-group">
	         <label for="lname">Age</label>
           <input class="form-control" type="text" name="age">
        </div>
	      
        <div class="form-group">
          <label for="lname">Date of Birth</label>
          <input class="form-control" type="date" id="datepicker1" name="dob">
        </div>
        
        <div class="form-group">
          <label for="lname">Is Life time member?</label>
          Yes <input  type="radio" id="lname" name="lifetime" value="yes">
          No <input  type="radio" id="lname" name="lifetime" value="No">
        </div>


        <div class="form-group">
          <label for="designation"> Designation</label>
          <input class="form-control" type="text" id="lname" name="designation">
        </div>
  
        <div class="form-group">
          <label for="mobileno">mobileno</label>
          <input class="form-control" type="text" id="lname" name="mobileno">
        </div> 

        <div class="form-group">
          <label for="email">Email:no</label>
          <input class="form-control" type="text" id="lname" name="email">
        </div>

        <div class="form-group">
          <label for="address" class="control-label">Address</label>
          <textarea class="form-control" name="address"></textarea>
        </div>
  
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <input type="submit" value="Submit" class="btn btn-primary">
      
      </form>
  
  </div> 

</div>
@endsection
