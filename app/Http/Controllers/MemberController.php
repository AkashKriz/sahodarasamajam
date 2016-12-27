<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Member;
use App\Http\Requests\MemberRequest;
use Illuminate\Support\Facades\Redirect;
class MemberController extends Controller
{
   public function index()
   {
	  $member = new Member;
	  $member = $member->get();
	 return view("members.list_member",compact('member'));
   }
   
   public function create()
   {
	   
	   return view('members.add_member');
   }
   public function store(MemberRequest $requestData)
   {
	  $user = new Member;
	  $user->firstname = $requestData['firstname'];
	  $user->lastname =  $requestData['lastname'];
	  $user->age = $requestData['age'];
	  $user->dob = $requestData['dob'];
	  $user->designation = $requestData['designation'];
	  $user->lifetime = $requestData['lifetime'];
	
	  $user->address = $requestData['address'];
	  
	    $user->mobileno = $requestData['mobileno'];
		 $user->email = $requestData['email'];
		 
   
  
		$user->save();
		
		if($user->save())
		{
			return redirect::back()
			->withFlashMessage('Members added successfully')
			->withType('success');
		}else{
						return redirect::back()
			->withFlashMessage('Members  cannot be added ')
			->withType('danger');
		}
		 
	 }
public function edit($id)
{
	
$member = new Member;
$member = $member->find($id);
return view ('lifetime.edit_lifetime', compact('member'));
}
        
public function show()
{}

public function update(MemberRequest $requestData)
{
	
$member = new Member;
$member = $member->find($id);	

	  $member->firstname = $requestData['firstname'];
	  $member->lastname =  $requestData['lastname'];
	  $member->age = $requestData['age'];
	  $member->dob = $requestData['dob'];
	  $member->designation = $requestData['designation'];
	  $member->lifetime = $requestData['lifetime'];
	
	  $member->address = $requestData['address'];
	  
	    $member->mobileno = $requestData['mobileno'];
		 $member->email = $requestData['email'];
		 $member->save();
		 
}

}