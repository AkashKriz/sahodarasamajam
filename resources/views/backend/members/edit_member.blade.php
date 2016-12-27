@extends('backend.layouts.layout')
@section('title','Members')
@section('small_title','New')
@section('members','active')
@section('body')

<div class="box box-success">
  
  <div class="box-body">
      
      <form action="{{url('members/'.$member->id)}}" method="post">
        
        <div class="form-group">
          <label for="firstname">First Name</label>
          <input class="form-control" type="text" value="{{$member->firstname}}" name="firstname">
        </div>
        
        <div class="form-group">
          <label for="lname">Last Name</label>
          <input class="form-control" type="text" value="{{$member->lastname}}" name="lastname">
        </div>
	      
        <div class="form-group">
	         <label for="lname">Age</label>
           <input class="form-control" type="text" value="{{$member->age}}" name="age">
        </div>
	      
        <div class="form-group">
          <label for="lname">Date of Birth</label>
          <input class="form-control" type="date" value="{{$member->dob}}" id="datepicker1" name="dob">
        </div>
        
        <div class="form-group">
          <label for="lname">Is Life time member?</label>
          Yes <input  type="radio" id="lname" name="lifetime" value="yes">
          No <input  type="radio" id="lname" name="lifetime" value="No">
        </div>


        <div class="form-group">
          <label for="designation"> Designation</label>
          <input class="form-control" type="text" value="{{$member->designation}}" id="lname" name="designation">
        </div>
  
        <div class="form-group">
          <label for="mobileno">mobileno</label>
          <input class="form-control" type="text" value="{{$member->mobileno}}" id="lname" name="mobileno">
        </div> 

        <div class="form-group">
          <label for="email">Email:no</label>
          <input class="form-control" type="text" value="{{$member->email}}" id="lname" name="email">
        </div>

        <div class="form-group">
          <label for="address" class="control-label">Address</label>
          <textarea class="form-control" name="address">{{$member->address}}</textarea>
        </div>
  
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <input type="hidden" name="_method" value="PUT">
          <input type="submit" value="Submit" class="btn btn-primary">
      
      </form>
  
  </div> 

</div>
@endsection
