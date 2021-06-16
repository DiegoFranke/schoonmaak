<?php

namespace App\Http\Controllers;

use App\Models\Huurplek;
use Illuminate\Http\Request;


class HuurpleksController extends Controller
{

    public function index()
    {
        $huurpleks = Huurplek::all();
        return view('huurpleks.index')->with('huurpleks', $huurpleks);
    }

    public function create()
    {
        return view('huurpleks.create');
    }


    public function store(Request $request)
    {
        request()->validate([
            'bezet' => 'required'
        ]);
        Huurplek::create([
            'id' => request('id'),
            'bezet' => request('bezet'),
            'schoon' => request('schoon'),
            'description' => request('description'),
            'start_date' => request('start_date'),
            'end_date' => request('end_date')

        ]);

        redirect('/huurpleks');
    }

    public function show(Huurplek $huurplek)
    {
        //
    }


    public function edit(Huurplek $huurplek)
    {
        return view('huurpleks.edit', ['huurplek' => $huurplek]);
    }


    public function update(Huurplek $huurplek)
    {
        request()->validate([
            'id' => 'required'
            ]);

        $huurplek->update(
            [
                'id' => request('id'),
                'bezet' => request('bezet'),
                'schoon' => request('schoon'),
                'description' => request('description'),
                'start_date' => request('start_date'),
                'end_date' => request('end_date')
            ]
         );
        return redirect()->action([HuurpleksController::class, 'index']);
    }


    public function destroy(Huurplek $huurplek)
    {
        $huurplek->delete();
        redirect('/huurpleks');
    }
}
