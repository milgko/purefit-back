<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipAdminController extends Controller
{
    public function index()
    {
        $memberships = Membership::all();
        return view('admin.memberships.index', compact('memberships'));
    }

    public function create()
    {
        return view('admin.memberships.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration' => 'required|string',
        ]);

        Membership::create($request->all());

        return redirect()->route('admin.memberships.index')->with('success', 'Membership created successfully.');
    }

    public function show($id)
    {
        $membership = Membership::findOrFail($id);
        return view('admin.memberships.show', compact('membership'));
    }

    public function edit($id)
    {
        $membership = Membership::findOrFail($id);
        return view('admin.memberships.edit', compact('membership'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration' => 'required|string',
        ]);

        $membership = Membership::findOrFail($id);
        $membership->update($request->all());

        return redirect()->route('admin.memberships.index')->with('success', 'Membership updated successfully.');
    }

    public function destroy($id)
    {
        $membership = Membership::findOrFail($id);
        $membership->delete();

        return redirect()->route('admin.memberships.index')->with('success', 'Membership deleted successfully.');
    }
}
