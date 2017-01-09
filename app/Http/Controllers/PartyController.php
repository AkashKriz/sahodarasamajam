<?php

namespace App\Http\Controllers;
use App\Member;
use Illuminate\Http\Request;

class PartyController extends Controller
{
    public function index(Request $requestData)
   {
	  $member = new Member;
	  $member = $member->get();
	  $member->party = $requestData['party'];
	  return view("backend.party.list",compact('member'));
   }
    
}
