<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\Form;
use Illuminate\Http\Request;


class FormController extends Controller
{
    public function form(){
        return view('form');
    }
    public function store(Request $request)
    {
        $form = new Form;
        $form->fio = $request->fio;
        $form->address = $request->address;
        $form->number = $request->number;
        $form->email = $request->email;
        $form->save();
        return redirect()->back()->with('success', 'Данные успешно сохранены.');

    }

    public function users(): View{
        $users = Form::get();
        return view('form', ['users' => $users,]);
    }
    
    

}
