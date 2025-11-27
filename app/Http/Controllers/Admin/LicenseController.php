<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LicenseStoreRequest;
use App\Http\Requests\LicenseUpdateRequest;
use App\Models\License;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class LicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $query = License::query();

        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('license_number', 'like', "%{$search}%")
                  ->orWhere('name', 'like', "%{$search}%")
                  ->orWhere('nrc_number', 'like', "%{$search}%");
            });
        }

        $licenses = $query->latest()->paginate(10);

        return view('admin.licenses.index', compact('licenses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.licenses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LicenseStoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->store('licenses', 'public');
            $data['photo_path'] = $photoPath;
        }

        // Remove 'photo' from data array as it's not a database column
        unset($data['photo']);

        License::create($data);

        return redirect()->route('admin.licenses.index')
            ->with('success', 'License created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(License $license): View
    {
        return view('admin.licenses.show', compact('license'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(License $license): View
    {
        return view('admin.licenses.edit', compact('license'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LicenseUpdateRequest $request, License $license): RedirectResponse
    {
        $license->update($request->validated());

        return redirect()->route('admin.licenses.index')
            ->with('success', 'License updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(License $license): RedirectResponse
    {
        $license->delete();

        return redirect()->route('admin.licenses.index')
            ->with('success', 'License deleted successfully.');
    }
}
