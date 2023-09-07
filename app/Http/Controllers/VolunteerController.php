<?php

namespace App\Http\Controllers;

use App\Mail\ThankYouEmail;
use App\Models\Constituency;
use App\Models\Seat;
use App\Models\State;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $states = State::all();
        
    
    return view('register', compact('states'));

            // return view('');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            // Validation rules
            $rules = [
                'voter_id' => 'required',
                'name' => 'required',
                'mobile_no' => 'required',
                'email' => 'required|email|unique:volunteers',
                'whatsapp_no' => 'required',
                'facebook_id' => 'required',
                'twitter_id' => 'required',
                'address' => 'required',
                'ward_name_no' => 'required',
                'assembly_constituency' => 'required',
                'parliament_seat' => 'required',
                'state' => 'required',
                'contribute_options' =>  'required',
                'about_yourself' => 'required',
                'file' => 'required|file|mimes:jpg,jpeg,png,webp,pdf|max:2048', // Max size in kilobytes (2MB)
                // Add more rules for other fields
            ];
            
            $customMessages = [
                'file.required' => 'Please select a file.',
                'file.mimes' => 'The file must be in JPG, JPEG, PNG, WEBP, or PDF format.',
                'file.max' => 'The file size must be less than 2MB.',
            ];
            
            $validator = Validator::make($request->all(), $rules, $customMessages);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            
            // Handle file upload
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $voterId = $request->input('voter_id'); 
                $fileExtension = $file->getClientOriginalExtension();
                $timestamp = now()->timestamp; // This gets the current timestamp

                $file_path = $file->storeAs('uploads', $voterId . '_' . $timestamp . '.' . $fileExtension, 'public');                
            } else {
                $file_path = null;
            }
         
            // Create a new Volunteer record
            Volunteer::create([
                'voter_id' => $request->input('voter_id'),
                'name' => $request->input('name'),
                'mobile_no' => $request->input('mobile_no'),
                'email' => $request->input('email'),
                'whatsapp_no' => $request->input('whatsapp_no'),
                'facebook_id' => $request->input('facebook_id'),
                'twitter_id' => $request->input('twitter_id'),
                'address' => $request->input('address'),
                'ward_name_no' => $request->input('ward_name_no'),
                'assembly_constituency' => $request->input('assembly_constituency'),
                'parliament_seat' => $request->input('parliament_seat'),
                'state' => $request->input('state'),
                'contribute_options' => implode(', ', $request->input('contribute_options')),
                'about_yourself' => $request->input('about_yourself'),
                'file_path' => $file_path,
            ]);
            $volunteer = Volunteer::find($request->voter_id);
            // $data=$request->input('name');
            // $volunteer = Volunteer::find($voterId);
            $volunteerEmail = $request->input('email');
//  Mail::to($volunteerEmail)->send(new ThankYouEmail($volunteer));

    
            // Redirect to a thank-you page
            return view('thanks');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $data = Volunteer::with('state', 'parliamentSeat', 'assemblyConstituency')->find($id);
        // $data= Volunteer::find($id);
        return view('volunteer.show')->with('volunteer',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function edit(Volunteer $volunteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volunteer $volunteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volunteer $volunteer)
    {
        //
    }

    
    public function getSeats(Request $request)
    {
        
        $seats = Seat::where('state_id', $request->state_id)->get();
// dd($seats);
        if (count($seats) > 0) {
            return response()->json($seats);
        } 
    }
    
    /**
     * Return constituencies list
     *
     * @return json
     */
    public function getConstituencies(Request $request)
    {
        $constituencies = Constituency::where('seats_id', $request->seats_id)->get();
    
        if (count($constituencies) > 0) {
            return response()->json($constituencies);
        }
    }
}
