<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'logo' => 'image',
            'website' => 'required'
        ]);

        $name = str_replace(' ', '_', $request->name);
        $file = $request->file('logo');
        $path = $file->storeAs('image', $name .'.'. $file->extension(),['disk' => 'public']);

        $company = new Company;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->logo = $path;
        $company->website = $request->website;
        $company->save();

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::find($id);

        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'logo' => 'image',
            'website' => 'required'
        ]);

        $company = Company::find($id);

        if (!$request->file('logo') == null){
            $name = str_replace(' ', '_', $request->name);
            $file = $request->file('logo');
            $path = $file->storeAs('image', $name . $file->extension(),['disk' => 'public']);

            $company->logo = $path;
        }

        $company->name = $request->name;
        $company->email = $request->email;
        $company->website = $request->website;
        $company->save();

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company = Company::find($id);

        $company->delete();

        return redirect()->route('dashboard');
    }
}
