<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\Appointments;
use App\Notifications\SendEmailNotification;
use Illuminate\Notifications\Notification;


class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function save(Request $request)
    {
        $doctor = new doctor;        
        $image = $request->file;
        $imagename = time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $doctor->image = $imagename;
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        $doctor->save();
        
        return redirect()->back()->with('message', 'Doctor Added Successfully.');
    }

    public function show_appointment()
    {
        $data = appointments::all();
        return view('admin.appointment-list', compact('data'));
    }
    
    public function approved($id)
    {
        $data=appointments::find($id);
        $data->status='Approved';
        $data->save();

        return redirect()->back()->with('message', 'Appointment Approved Successfully.');
    }

    public function canceled($id)
    {
        $data=appointments::find($id);
        $data->status='Canceled';
        $data->save();

        return redirect()->back()->with('message', 'Appointment Canceled Successfully.');
    }

    public function show_doctor()
    {
        $data = doctor::all();
        return view('admin.view-doctor', compact('data'));
    }

    public function edit_doctor($id)
    {
        $data=doctor::find($id);
        return view('admin.edit-doctor',compact('data'));
    }

    public function delete_doctor($id)
    {
        $data=doctor::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Doctor Details Deteled Successfully.');
    }

    public function update_doctor(Request $request,$id)
    {
        $doctor=doctor::find($id);

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        $image = $request->file;
        
        if($image)
        {
            $imagename = time().'.'.$image->getClientoriginalExtension();
            $request->file->move('doctorimage', $imagename);
            $doctor->image = $imagename;
        }

        $doctor->save();

        return redirect()->back()->with('message', 'Doctor Details Updated Successfully.');
    }

    public function emailview($id)
    {
        $data=appointments::find($id);
        return view('admin.email-view',compact('data'));
    }

    public function sendemail(Request $request,$id)
    {
        $data = appointments::find($id);
        $details = [
            'greeting'=> $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart
        ];

        // Notification::send($data, new SendEmailNotification($details));
        // Notification::sendNow($data, new SendEmailNotification($details));
        // return redirect()->back();

        // Notification::send($data, new SendEmailNotification($details));
   
        // dd('Notification sent!');
        
    }
}
