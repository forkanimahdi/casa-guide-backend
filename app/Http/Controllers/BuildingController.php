<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{


    public function index()
    {
        $unassigned_buildings = Building::where('circuit_id', null)->get();
        $assigned_buildings = Building::where('circuit_id', '!=', null)->get();
        return view('building.building_index', compact('unassigned_buildings', 'assigned_buildings'));
    }


    public function create()
    {
        $buildings = Building::where('circuit_id', null)->get();
        return view('building.building_map', compact('buildings'));
    }


    public function store(Request $request)
    {
        request()->validate([
            'circuit_id' => 'nullable',
            'name' => 'required',
            'description' => 'required',
            'audio' => 'required',
            'image' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $audio = $request->file('audio');
        $audioName = time() . $audio->getClientOriginalName();
        $audio->storeAs('/audios', $audioName, 'public');

        $building =  Building::create([
            'circuit_id' => $request->circuit_id,
            'name' => $request->name,
            'description' => $request->description,
            'audio' => $audioName,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        $images = $request->file('image');
        foreach ($images as  $image) {
            $imageName = time() .  $image->getClientOriginalName();
            $building->images()->create([
                'path' => $imageName
            ]);
            $image->storeAs('buildings/', $imageName, 'public');
        }
        return back();
    }

    public function destroy(string $id)
    {
        $building = Building::where('id', $id)->first();
        $building->delete();
        return back();
    }
}
