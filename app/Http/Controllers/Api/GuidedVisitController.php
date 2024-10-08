<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models as models;
use App\TokenValidation;
use Illuminate\Http\Request;

class GuidedVisitController extends Controller
{
    use TokenValidation;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->validateToken(
            $request,
            function (models\Visitor $visitor) use ($request) {

                models\GuidedVisit::create([
                    'visitor_id' => $visitor->id,
                    'circuit_id' => $request->circuit_id['id'],
                    'phone' => $request->phone,
                    'number_of_people' => $request->ppl,
                    'date' => $request->date,
                    'time' => $request->time,
                    'nationality' => $request->nationality,
                    'city' => $request->city,
                    'reason' => $request->reason != 'Other' ? $request->reason : $request->reason . ' ' . $request->other,
                    'language' => $request->language,
                    'receipt' => $request->receipt ?? 'No Receipt',
                    'validate' => $request->validate,

                ]);

                return response()->json([
                    'message' => "success",
                ], 200);
            }
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
