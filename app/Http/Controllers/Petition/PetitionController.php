<?php

namespace App\Http\Controllers\Petition;

use App\Http\Controllers\Controller;
use App\Models\Analytic\Impression;
use App\Models\Petition\Petition;
use Illuminate\Http\Request;

class PetitionController extends Controller
{
    public function index()
    {
        return view('petitions.index');
    }

    public function show($slug)
    {
        $petition = Petition::where('slug', $slug)->first();

        if(!$petition){
            return redirect()->route('petitions.index');
        }

        Impression::create([
            'assignable_type' => Petition::class,
            'assignable_id' => $petition->id,
            'user_id' => auth()->check() ? auth()->user()->id : null,
            'ip_address' => \request()->getClientIp(),
            'user_agent' => \request()->userAgent(),
        ]);

        return view('petitions.show', compact('petition'));
    }
}
