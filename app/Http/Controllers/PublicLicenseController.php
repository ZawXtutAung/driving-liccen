<?php

namespace App\Http\Controllers;

use App\Models\License;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PublicLicenseController extends Controller
{
    /**
     * Display the public license details.
     */
    public function show(Request $request): View
    {
        $license = null;

        // Check by ID
        if ($request->has('id')) {
            $license = License::find($request->id);
        }
        // Check by license number
        elseif ($request->has('license_number')) {
            $license = License::where('license_number', $request->license_number)->first();
        }
        // Check by NRC number
        elseif ($request->has('nrc_number')) {
            $license = License::where('nrc_number', $request->nrc_number)->first();
        }

        if (!$license) {
            abort(404, 'License not found');
        }

        return view('public.license', compact('license'));
    }
}
