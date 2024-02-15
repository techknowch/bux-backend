<?php

namespace App\Http\Controllers;

use App\Models\Capability;
use Illuminate\Http\Request;

class CapabilityController extends Controller
{
    //
    public function show($name)
    {
        $formattedName = ucwords(str_replace('-', ' ', $name));
        $capability = Capability::where('name',$formattedName)->first();
        if(!$capability) {
            abort(404);
        }
        return view('frontend.capabilities.show',['capability' => $capability]);
    }
}
