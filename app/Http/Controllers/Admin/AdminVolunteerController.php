<?php

namespace App\Http\Controllers\Admin;

use App\Volunteer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class AdminVolunteerController extends Controller
{
    public function index() {
        $volunteers = Volunteer::paginate(10);
        
        return view("admin.displayvolunteers",['volunteers'=>$volunteers]);
    }

    public function editVolunteerForm($id){
        $volunteer = Volunteer::find($id);
        return view('admin.editvolunteerform',['volunteer'=>$volunteer]);
    }

    public function updateVolunteer(Request $request,$id){        
        return redirect()->route("adminDisplayVolunteers"); 
     }

     public function deleteVolunteer($id){         
        Volunteer::destroy($id);
        return redirect()->route("adminDisplayVolunteers");
    }  
}
