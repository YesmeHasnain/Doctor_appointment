<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AdminController extends Controller
{
    public function UserRecord(){
        $PatientRecord = User::get();
        // dump($PatientRecord);
        return view('admin.tables-basic', ['data'=>$PatientRecord]);
    }
}
