<?php

// namespace App\Exports;

// use App\Models\Volunteer;
// use Maatwebsite\Excel\Concerns\FromView;
// use Illuminate\Contracts\View\View;



// class VolunteersExport implements FromView
// {
//     /**
//      * @return \Illuminate\Support\Collection
//      */
//     // public function collection()
//     // {
//     //     return Volunteer::all();
//     // }

//     public function view(): View
//     {
//         return view('exports.volunteers', [
//             'volunteers' => Volunteer::all()
//         ]);
//     }
// // }   
// namespace App\Exports;

// use App\Models\Volunteer;
// use Maatwebsite\Excel\Concerns\FromView;
// use Illuminate\Contracts\View\View;

// class VolunteersExport implements FromView
// {
//     protected $volunteerId; // Add a property to store the volunteer ID

//     public function forVolunteer($volunteerId = null)
//     {
//         $this->volunteerId = $volunteerId;
//         return $this;
//     }

//     public function view(): View
//     {
//         $query = Volunteer::query();

//         // If a volunteer ID is specified, filter the query to fetch only that volunteer's data
//         if ($this->volunteerId) {
//             $query->where('id', $this->volunteerId);
//         }

//         return view('exports.volunteers', [
//             'volunteers' => $query->get()
//         ]);
//     }
// }

namespace App\Exports;

use App\Models\Volunteer;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class VolunteersExport implements FromView
{
    protected $volunteerId;

    public function __construct($volunteerId = null)
    {
        $this->volunteerId = $volunteerId;
    }

    public function view(): View
    {
        $query = Volunteer::query();

        // If a volunteer ID is specified, filter the query to fetch only that volunteer's data
        if ($this->volunteerId) {
            $query->where('id', $this->volunteerId);
        }
        // dd($query->with('state', 'parliament_seat', 'assembly_constituency')->get());
        return view('exports.volunteers', [
            'volunteers' => $query->with('state', 'parliament_seat', 'assembly_constituency')->get()
        ]);
    }
}
// $volunteers = Volunteer::with('state', 'parliament_seat', 'assembly_constituency')->get();
