<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employees;
  class EmpController extends Controller
    {
      public function index()
 		 {
  	  	 $employee = Employees::all()->toArray();
       	 return view('employee.index', compact('employee'));
  		}
      public function create()
  	   	{
 	    	return view('employee.create');
    	  }
      public function store(Request $request)
	      {
  	 		$employee = new Employees([
          	'Id' => $request->get('Id'),
           	'Name' => $request->get('name'),
          	'Gender' => $request->get('gender'),
          	'Phone' => $request->get('phone'),
          	'Address' => $request->get('address'),
        		]);
          
        	Employees::create($request->all());
       		return redirect('/employee');
  		  }
      public function show($id)
  	    {
  		$employee= Employees::find($id);
  		return view('employee.show',compact('employee'));
 		    }
      public function edit($id)
 	 	    {
 	 	  $employee= Employees::find($id);
 	  	return view('employee.edit',compact('employee','id'));
        }
      public function update(Request $request,$id)
  		  {
 	 	    $employee = Employees::find($id);
		    $employee->id = $request->get('Id');
        $employee->name = $request->get('name');
        $employee->gender = $request->get('gender');
        $employee->phone = $request->get('phone');
        $employee->address = $request->get('address');
        Employees::find($id)->update($request->all());
        return redirect('/employee');
  		  }
      public function destroy($id)
  	   {
        $employee = Employees::find($id);
        $employee->delete();
        return redirect('employee');
 		   }
    }
