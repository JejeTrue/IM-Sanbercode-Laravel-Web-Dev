<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GenreController extends Controller
{
    public function create()
    {
        return view('genre.create');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'min:5'],
                'description' => ['required'],
            ],
            [
                'required' => 'The :attribute field is required.',
                'min' => 'The :attribute field must be at least :min characters.',
            ]
        );

        $now = Carbon::now();

        DB::table('genres')->insert([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'created_at' => $now,
            'updated_at' => $now
        ]);

        

        return redirect('/genre');
    }

    public function index()
    {
        $genres = DB::table('genres')->get();
        return view('genre.list', ['genres' => $genres]);
    }
    public function show($id)
    {
        $genre = DB::table('genres')->find($id);
        return view('genre.detail', ['genre' => $genre]);
    }

    public function edit($id){
        $genre = DB::table('genres')->find($id);
        return view('genre.edit', ['genre' => $genre]);
    }

    public function update(Request $request, $id){
        $request->validate(
            [
                'name' => ['required', 'min:5'],
                'description' => ['required'],
            ],
            [
                'required' => 'The :attribute field is required.',
                'min' => 'The :attribute field must be at least :min characters.',
            ]
        );

        $now = Carbon::now();

        DB::table('genres')->where('id', $id)->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'updated_at' => $now
        ]);

        return redirect('/genre');
    }
    public function destroy($id){
        DB::table('genres')->where('id', $id)->delete();
        return redirect('/genre');
    }
}
