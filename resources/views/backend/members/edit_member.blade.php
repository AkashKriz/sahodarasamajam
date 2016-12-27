@extends('backend.layouts.layout')
@section('title','Blog')
@section('small_title','New')
@section('blog','active')
@section('body')
<div class="box box-success">

    <div class="box-body">
        <form role="form" method="post" enctype="multipart/form-data">
        	<div class="form-group">
          	  <label for="title" class="control-label">Title</label>           <input class="form-control" type="text" name="blog_title" >
            </div>
            
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="submit" value="Submit" class="btn btn-primary"> 
		</form>
	</div>
</div>
@endsection
