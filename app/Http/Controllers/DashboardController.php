<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use App\Exports\VolunteersExport;
use Maatwebsite\Excel\Facades\Excel;



use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Calculation\TextData\Search;

class DashboardController extends Controller
{
    //
    public function index()
    {
        //
        $count=Volunteer::count();
        return view('dashboard.index', ['count' => $count]);
    }
    public function list(Request $request)
    {
        //
        $search=$request['search']??"";
        if($search!= ""){
            $volunteers=Volunteer::where('name','LIKE',"%$search%")->orWhere('voter_id','LIKE',"%$search%")->get();
        }
        else{

            $volunteers = Volunteer::paginate(10);
        }
        
        return view("dashboard.list", ['volunteers' => $volunteers,'search'=>$search]);
    }
    public function export() 
    {
        return Excel::download(new VolunteersExport, 'All_Volunteers.xlsx');
        
    }
    public function exportSingleVolunteer($volunteerId)
{
    return Excel::download(new VolunteersExport($volunteerId), 'Volunteer_' . $volunteerId . '.xlsx');
}
 
}