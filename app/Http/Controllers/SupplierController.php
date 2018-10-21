<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
	public function index($id = null)
	{
		if($id == null)
		{
			return Supplier::orderBy('id','asc')->get();
		}
		else
		{
			return $this->show($id);
		}
	}

	public function store(Request $request)
	{
		$supplier = new Supplier;
		$supplier->name = $request['name'];
		$supplier->email = $request['email'];
		$supplier->dept = $request['dept'];
		//$supplier->faculty = $request['faculty'];
		$supplier->save();
		return redirect()->back();
	}

	public function show($id)
	{
		return Supplier::find($id);
	}

	public function update(Request $request,$id)
	{
		$supplier = Supplier::find($id);
		$supplier->name = $request['name'];
		$supplier->email = $request['email'];
		$supplier->dept = $request['dept'];
		//$supplier->faculty = $request['faculty'];
		$supplier->save();
		return redirect()->back();
	}

	public function destroy($id)
	{
		$supplier = Supplier::find($id)->delete();
		return redirect()->back();
	}    
}
