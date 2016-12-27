@extends('layouts.layout')

@section('title', 'Add Student')

@section('content')
@section('body')
{!! Form::open(['action' => 'StudentController@store','method'=>'POST','enctype' => 'multipart/form-data']) !!}
<h2>Personal Details</h2>
<div class="box box-primary">
    <div class="box-body">

        <!-- first_name Field -->
        <div class= "col-md-12">
        <div class="form-group col-md-6">
            {!! Form::label('first_name', 'First Name') !!}
            {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder'=>'Enter First Name']) !!}
            {!! errors_for('first_name', $errors) !!}
        </div>

        <!-- last_name Field -->
        <div class="form-group col-md-6">
            {!! Form::label('last_name', 'Last Name') !!}
            {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder'=>'Enter Last Name']) !!}
            {!! errors_for('last_name', $errors) !!}
        </div>
        </div>
        <div class= "col-md-12">
         
        
        <div class="form-group col-md-6">
            {!! Form::Label('gender', 'Gender') !!}<br>
            {!! Form::radio('gender', 'male') !!}{!! Form::Label('gender', 'Male') !!}
            {!! Form::radio('gender', 'female') !!}{!! Form::Label('gender', 'Female') !!}
        </div>
        </div>
         <div class= "col-md-12">
        <div class="form-group col-md-6">
            {!! Form::label('dob', 'Date Of Birth') !!}
            {!! Form::text('dob', null, ['class'=>'form-control', 'placeholder'=>'Date Of Birth', 'id'=>'datepicker']) !!}
            {!! errors_for('dob', $errors) !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('guardian', 'Guardian') !!}
            {!! Form::text('guardian', null, ['class'=>'form-control', 'placeholder'=>'Enter guardian name ']) !!}
            {!! errors_for('guardian', $errors) !!}
        </div>
		<div>
		 
        <div class= "col-md-12">
        <div class="form-group col-md-6">
            {!! Form::Label('Religion', 'Religion') !!}<br>
            {!! Form::radio('religion', 'Hindu') !!}{!! Form::Label('Religion', 'Hindu') !!}
            {!! Form::radio('religion', 'Christian') !!}{!! Form::Label('Religion', 'Christian') !!}
            {!! Form::radio('religion', 'Muslim') !!}{!! Form::Label('Religion', 'Muslim') !!}
            {!! Form::radio('religion', 'Jain') !!}{!! Form::Label('Religion', 'Jain') !!}
            {!! Form::radio('religion', 'Buddhist') !!}{!! Form::Label('Religion', 'Buddhist') !!}
            {!! Form::radio('religion', 'Secular') !!}{!! Form::Label('Religion', 'Secular') !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::Label('category', 'Category') !!}<br>
            {!! Form::radio('category', 'General') !!}{!! Form::Label('Category', 'Genaral') !!}
            {!! Form::radio('category', 'SC') !!}{!! Form::Label('Category', 'SC') !!}
            {!! Form::radio('category', 'ST') !!}{!! Form::Label('Category', 'ST') !!}
            {!! Form::radio('category', 'OBC') !!}{!! Form::Label('Category', 'OBC') !!}
        </div>
        </div>
		
		</div>
		<h2>Accademic Details</h2>
		<div class="box box-primary">
    <div class="box-body">
	<div class="form-group col-md-6">
            {!! Form::Label('class', 'Class') !!}
            {!! Form::select('class', $batch->class, null, ['class' => 'form-control']) !!}
        </div>
             <div class="form-group col-md-6">
            {!! Form::Label('class', 'Division') !!}
            {!! Form::select('division', $batch->division, null, ['class' => 'form-control']) !!}
        </div>
        <div class= "col-md-6">
        <div class="form-group col-md-6"><b>HOSTEL FACILITIES NEEDED?</b>
            <input type="radio" id="hostel" value="yes" name="hostel" onclick="sasi()" /> Yes
            <input type="radio" id="hostel" value="no" name="hostel" onclick="sasi()" /> NO
     </div>
       </div>

            <div class="form-group col-md-6" id="sasi1">
            {!! Form::Label('hostelfee', 'Hostel fee paid?') !!}<br>
            {!! Form::radio('hostelfee', 'yes') !!}{!! Form::Label('hostelfee', 'yes') !!}
            {!! Form::radio('hostelfee', 'no') !!}{!! Form::Label('hostelfee', 'no') !!}
        </div>
		  <div class= "col-md-12">
		<div class="form-group col-md-6">
		<h5><b>Blood Group<b></h5>
		<select name="blood">
		<option value="a+ve">a+ve</option>
		<option value="a-ve">a-ve</option>
		<option value="b+ve">b+ve</option>
		<option value="b-ve">b-ve</option>
		<option value="o+ve">o+ve</option>
		<option value="o-ve">o-ve</option>
		<option value="ab+ve">ab+ve</option>
		<option value="ab-ve">ab-ve</option></select>
        </div>
		</div>
        </div>
        </div>
<h2> Contact Details</h2>		
         <div class="box box-primary">
    <div class="box-body">
       <div  class="col-md-6">
            {!! Form::label('address', 'House Name') !!}
           
            {!! Form::text('housename', null, ['class' => 'form-control', 'placeholder'=>'Enter House name']) !!}
            {!! errors_for('housename', $errors) !!}
        </div>
      <div  class="col-md-6">
            {!! Form::label('place', 'Place') !!}
           
            {!! Form::text('place', null, ['class' => 'form-control', 'placeholder'=>'Enter place Name']) !!}
            {!! errors_for('place', $errors) !!}
        </div>
   <div  class="col-md-6">
            {!! Form::label('district', 'District') !!}
           
            {!! Form::text('district', null, ['class' => 'form-control', 'placeholder'=>'Enter district name']) !!}
            {!! errors_for('district', $errors) !!}
        </div>
<div  class="col-md-6">
            {!! Form::label('state', 'State') !!}
           
            {!! Form::text('state', null, ['class' => 'form-control', 'placeholder'=>'Enter state name']) !!}
            {!! errors_for('state', $errors) !!}
        </div>

        <!--
            <br>
            {!! Form::text('place/street', null,  ['class'=>'form-control', 'placeholder'=>'place/street']) !!}
            {!! errors_for('place/street', $errors) !!}
             <br>
            {!! Form::text('district', null,  ['class'=>'form-control', 'placeholder'=>'District']) !!}
            {!! errors_for('district', $errors) !!}
             <br>
            {!! Form::text('State', null,  ['class'=>'form-control', 'placeholder'=>'State']) !!}
            {!! errors_for('State', $errors) !!}
            <!--
            {!! Form::text('House name', null,  ['class'=>'form-control', 'placeholder'=>'House name']) !!}
            {!! errors_for('House name', $errors) !!}
        </div>
        -->
      
        <div class="form-group col-md-6">
            {!! Form::label('phone', 'Phone') !!}
            {!! Form::text('phone', null, ['class'=>'form-control', 'placeholder'=>'Enter Phone']) !!}
            {!! errors_for('phone', $errors) !!}
        </div>
		 <div class="form-group col-md-6">
            {!! Form::label('Adhaar Number', 'adhar') !!}
            {!! Form::text('adhar', null, ['class'=>'form-control', 'placeholder'=>'Enter Phone']) !!}
            {!! errors_for('adhar', $errors) !!}
        </div>
      
         <div class="form-group col-md-6">
            {!! Form::label('school', 'School') !!}
            {!! Form::text('school', null, ['class'=>'form-control', 'placeholder'=>'Enter School Name']) !!}
            {!! errors_for('school', $errors) !!}
        </div>
        
        
        <!-- email Field -->
        <div class="form-group col-md-6">
            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', null, ['class' => 'form-control','placeholder'=>'Email']) !!}
            {!! errors_for('email', $errors) !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('photo', 'Photo') !!}
            {!! Form::file('photo', null, ['class'=>'form-control']) !!}
            {!! errors_for('photo', $errors) !!}
        </div>
		</div>
		</div>
      <center>
        <div class='btn btn-primary btn-block'>
            {!! Form::submit( 'Submit', ['class'=>'btn btn-primary']) !!} 
        </div>
      
        </center>
        {!! Form::close() !!}
    
</div>

@stop

@endsection
 <script type="text/javascript">
    function sasi() {
        var chkYes = document.getElementById("hostel");
        var dvPassport = document.getElementById("sasi1");
        dvPassport.style.display = chkYes.checked ? "block" : "none";
    }
</script>
@section('validation')
<script>
 $(function () {

	    $("form[name='contact']").validate({

	        rules: {
	            name: {required: true,lettersonly: true},
	            email: {required: true,email: true},
				
				
				housename: {required: true,housename: true},
				state: {required: true,state: true},
				 district: {required: true,district: true,},
				 place: {required: true,place: true},
				
	            phone:{
	    			required: true,
	                number: true,
	                minlength:10,
	                maxlength:10,
	                },
	            message:"required"                    
	    },

			messages: {
	            name: {required: "Please enter your name",lettersonly: "Please enter  letters only"},
	            email:{required: "Please enter email", email: "Please enter valid email!"},
	            phone:{required: "Please enter your phone number.",minlength: "Enter 10 digit phone number",maxlength: "Enter 10 digit phone number"},
	            message:"Please enter message"
	        },
			submitHandler: function (form) {
				form.submit();

	        }
	    });
    });
    
    jQuery.validator.addMethod("lettersonly", function(value, element) {
                return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);},    "Letters only please"); 
</script>
@endsection


