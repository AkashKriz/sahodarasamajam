<!DOCTYPE html>
<html>
<head>

<style>

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 2px;
    background-color: #f2f2f2;
    padding: 10px;
}

</style>
</head>
<body>
<div>
  <form action="{{url('members.update')}}" method="GET" name="form1">
  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" value="{{$member->firstname}}">
</div ><div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" value="{{$member->lastname}}" ></div>
	<div class="form-group">
	<label for="lname">Age</label>
    <input type="text" id="lname" name="age" value="{{$member->age}}"></div>
	<div><label for="lname">Date of Birth</label>
    <input type="date" id="datepicker" name="dob"></div>
<div class="form-group"><label for="lname">Is Life time member?</label>
<input type="radio" id="lname" name="lifetime" value="yes">
<input type="radio" id="lname" name="lifetime" value="No"></div>



 <div class="form-group">Designation<input type="text" id="lname" name="designation" value="{{$member->designation}}"></div>
  <div class="form-group">mobileno<input type="text" id="lname" name="mobileno" value="{{$member->mobileno}}"></div> 
<div class="form-group">Email:no<input type="text" id="lname" name="email" value="{{$member->email}}"></div>   
 <div class="form-group"><label for="address" class="control-label">Address</label>
  
  <center> <textarea class="form-control" rows="10" cols="100%" name="address" value="{{$member->address}}"></textarea></div></center>
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <input type="submit">
  </div></form>

</body>
</html>
