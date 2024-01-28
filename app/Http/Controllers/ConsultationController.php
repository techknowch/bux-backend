<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ConsultationController extends Controller
{
    //
    public function store(Request $request)
    {
        try {
            $request->validate([
                'first_name' =>'required|string|max:255',
                'last_name' =>'required|string|max:255',
                'phone_number' =>'required|integer',
                'email' =>'required|email|',
             'service_type' =>'required|string',
             'message' =>'string',
            ]);

            $data = $request->all();
            $data['first_name'] = $request->first_name;
            $data['last_name'] = $request->last_name;
            $data['phone_number'] = $request->phone_number;
            $data['email'] = $request->email;
            $data['service_type'] = $request->service_type;
            $data['message'] = $request->message;
            DB::beginTransaction();
            $consultation = Consultation::create($data);
            DB::commit();

            return redirect()->route('home')->with('success', 'Contact Created Successfully');
        }
        catch (QueryException $e)
        {
            return redirect()->route('home')->with('error', 'Error: ' . $e->getMessage());
        }
        catch (\Exception $e) {
            Log::error($e);
            DB::rollback();
            return redirect()->route('home')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
