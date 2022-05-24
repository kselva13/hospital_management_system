<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctor;

use App\Models\Appointments;

use App\Http\Controllers\DB;


class HomeController extends Controller
{

    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $doctor = doctor::all();
                return view('user.home', compact('doctor'))->with('success', 'Welcome to Dashboard...!');
            }
            else
            {
                $users = user::get()->count();
                $doctor = doctor::get()->count();
                $appointment = appointments::get()->count();
                return view('admin.home',compact('users','doctor','appointment'))->with('success', 'Welcome to Dashboard...!');
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {
            $doctor = doctor::all();
            return view('user.home', compact('doctor'));
        }
    }

    public function save(Request $request)
    {
        $data = new appointments;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->doctor = $request->doctor;
        $data->date = $request->date;
        $data->message = $request->message;
        $data->status = 'In Progress';

        if(Auth::id())
        {
            $data->user_id = Auth::user()->id;
        }
        else
        {
        
            return redirect()->back()->with('danger', 'Please Login to Access.');
            
        }

        $data->save();

        return redirect()->back()->with('success', 'Appointment Registered Successfully. We will contact with you soon.');

    }

    public function myappointment()
    {
        if(Auth::id())
        {
            $user_id=Auth::user()->id;
            $appoints = Appointments::where('user_id',$user_id)->get();
            return view('user.my_appointment',compact('appoints'));
        }
        else
        {
            return redirect()->back();
        }
    }

    public function appointment_delete($id)
    {
        $appoint_del = Appointments::find($id);
        $appoint_del->delete();
        return redirect()->back()->with('success', 'Appointment Deleted Successfully...!');
    }


}
