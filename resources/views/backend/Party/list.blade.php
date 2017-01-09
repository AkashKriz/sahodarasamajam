@extends('backend.layouts.layout')
@section('title','Members')
@section('small_title','New')
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
					<th>Party Status</th>
					
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
                    <td><center><input type="checkbox" name="party" value="yes"/></center></td>
                </tr>

                   <?php $i++ ?>
                @endforeach
            </tbody>

        </table>
    </div>

</div>
@endsection