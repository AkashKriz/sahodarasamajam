<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\LifeTime;
use DB;
class LifeTimeController extends Controller
{
    public function index(){
		 
	$lifemem = DB::table('member')
	
     ->select('member.*')
	 
      ->where ('member.lifetime','yes')	
      ->get();
     // dd("$lifemem");
		 return view('backend.lifetime.list_lifemem',compact('lifemem'));
	}
	public function store(Request $requestData)
	{
	
	}
	public function show()
	{
		
	}
public function edit($id)
{
	
		$lifememb = DB::table('member')
		->where('id', $id)
		->update(['lifetime' => 'no']);
      dd($lifememb);
        if ($lifememb==1) {
            return redirect()->route('LifeTime.index')
                            ->withFlashMessage('change  !')

                            ->withType('success');
        } else {
            return redirect()->route('LifeTime.')
                            ->withFlashMessage('Failed!')
                            ->withType('danger');
        }
        

     
    }
}
	


