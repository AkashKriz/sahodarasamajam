<?php

namespace App\Http\Controllers;
use App\Member;
use Illuminate\Http\Request;

class PartyController extends Controller
{
    public function index(Request $RequestData)
   {
	  $member = new Member;
	  $member = $member->get();
	  return view("backend.party.list",compact('member'));
   }
}
