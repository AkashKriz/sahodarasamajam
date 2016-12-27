@extends('backend.layouts.layout')
@section('title','Members')
@section('small_title','list')
@section('members','active')
@section('body')

<div class="box box-success">
	<div class="box-body">
			<table id="example2" border='1' class="table table-bordered table-hover">
				<thead>
				<tr>
					<th>Sl.No</th>
                    <th>First Name</th>
					<th>Last Name</th>
					<th>DOB</th>
					<th>AGE</th>
                    <th>Mobile No.</th>
                    <th>Email</th>
                    <th>Address</th>
					<th>Edit</th>
                    <th>Delete</th>
					
				</tr>
			     <tbody>
			     	<?php $i=1 ?>
					@foreach ($member as $member)
				<tr>
                    <td>{{ $i }}</td>
                    <td>{!! $member->firstname !!}</td>
                    <td>{!! $member->lastname !!}</td>
                    <td>{!! $member->dob !!}</td>
                    <td>{!! $member->age !!}</td>
                    <td>{!! $member->mobileno !!}</td>
                    <td>{!! $member->email !!}</td>
                    <td>{!! $member->address !!}</td>
                    <td><a href="members/{{ $member->id }}/edit"><input type="button" value="Edit" class="btn btn-danger"></a></center></td>
                    <td>
                        <form action="{{url('members/'.$member->id)}}" method="post">
                            <input type="submit" value="Delete" onclick="confirmDelete()" class="btn btn-danger">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="_method" value="DELETE">
                        </form>
                    </td>
                </tr>

                   <?php $i++ ?>
                @endforeach
            </tbody>

        </table>
    </div>

</div>
@endsection


