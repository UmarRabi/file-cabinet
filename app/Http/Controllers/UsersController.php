<?php

namespace App\Http\Controllers;

use App\Jobs\SendReminder;
use App\Models\Appointments;
use App\Models\Contacts;
use Illuminate\Http\Request;
use App\Models\Files;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //

    public function upload()
    {
        return view('upload');
    }

    public function profile()
    {
        return view('profile');
    }

    public function appointment()
    {
        $appointments = [];
        if (Auth::user()->hasRole('user')) {
            $appointments = Appointments::where('user_id', Auth::user()->id)->get();
        } else {
            $appointments = Appointments::get();
        }
        return view('book-appointment')->with('appointments', $appointments);
    }

    public function savefile(Request $request)
    {
        $uploadedFile = $request->file('upload');
        $file = new Files();
        $identifier = uniqid();
        $extension = $request->file('upload')->getClientOriginalExtension();
        $file->name = $identifier;
        $file->mimeType = $extension;
        $file->file_category = $request->file_category;
        $file->original_name = $uploadedFile->getClientOriginalName();
        $file->user()->associate(auth::user());
        $file->save();
        Alert::success("File Uploaded successfully");
        $uploadedFile->storeAs('uploads/' . $request->file_category, $identifier . '.' . $extension, 'public');
        return redirect()->route('manage-document');
    }

    public function savecontact(Request $request)
    {
        $contact = new Contacts($request->all());
        $contact->user()->associate(Auth::user());
        $contact->save();
        return view('thanks')->with('message', 'Contacts saved successfully');
        //  return back()->with('message', 'Contact created successfully');
    }

    public function viewcontacts()
    {
        $contacts = Contacts::where('user_id', Auth::user()->id)->get();
        return view('contacts')->with('contacts', $contacts);
    }

    public function contacts()
    {
        return view('contact');
    }

    public function viewappointment()
    {
        $appointments = [];
        if (Auth::user()->hasRole('user')) {
            $appointments = Appointments::where('user_id', Auth::user()->id)->get();
        } else {
            $appointments = Appointments::get();
        }
        //   $appointments = Appointments::where('user_id', Auth::user()->id)->get();
        return view('manage-appointments')->with('appointments', $appointments);
    }

    public function saveappointment(Request $request)
    {
        $appointment = new Appointments($request->all());
        $appointment->user()->associate(Auth::user());
        $appointment->channel = $request->channel;
        $appointment->details = $request->details;
        $appointment->save();
        $schedule = new Schedule();
        $reminder = $request->reminder;
        $dateTime = date($reminder);
        // return $dateTime;
        $reminder =  Carbon::create($dateTime)->format('m-d-Y H:i:s');
        // return $reminder;
        $reminder = Carbon::date('Y-m-d H:i:S', $request->reminder);
        $schedule->job(new SendReminder())->monthlyOn($reminder);
        Alert::success('Appointment booked successfully');
        return redirect('/dashboard');
        //  return view('thanks')->with('message', "Your appointment have been booked successfully");
    }

    public function files()
    {
        $files = Files::where('user_id', Auth::user()->id)->get();
        return view('files')->with('files', $files);
    }

    public function file($id)
    {
        return view('file-upload');
    }

    public function documents()
    {
        if (Auth::user()->hasRole('user')) {
            $documents = Files::where('user_id', Auth::user()->id)
                ->orderBy('id', 'DESC')
                ->get();
        } else {
            $documents = Files::get();
        }
        return view('manage-document')->with('documents', $documents);
    }
}
