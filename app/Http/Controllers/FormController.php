<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormModel;


class FormController extends Controller
{
    public function index(){
    	return view('form');
    }
    public function store(Request $request){
    	$form = new FormModel();
    	$form->Name=$request->input('Name');
    	$form->Surname=$request->input('Surname');
    	$form->Email=$request->input('Email');
    	$form->Country=$request->input('Country');
    	

    	 if($request->hasfile('Photo')){
            $file = $request->file('Photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/form/', $filename);
            $form->Photo = $filename;
        } else {
            return $request;
            $form->Photo = '';
        }

        $form->save();
        return view('form')->with('form',$form);
    }
}
