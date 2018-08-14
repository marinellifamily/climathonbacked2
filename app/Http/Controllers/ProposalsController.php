<?php

namespace App\Http\Controllers;

use App\Proposal;
use App\Solution;
use App\Cost;
use Illuminate\Http\Request;

class ProposalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proposals = Proposal::all();
        
        foreach($proposals as $proposal) {
            $solutions = $proposal->solutions;
            foreach($solutions as $solution) {
                $solution->costs;
            }
        }

        return $proposals;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proposal = Proposal::create([
            'important' => 1,
            'user_id' => 1,
            'name' => $request->name,
            'description' => $request->description,
            'reason' => $request->reason,
            'lat' => $request->lat,
            'lng' => $request->lng,
            'address' => $request->address,
            'likes' => 0,
            'dislikes' => 0
        ]);

        foreach($request->solutions as $solution) {
            $newSolution = Solution::create([
                'user_id' => 1,
                'proposal_id' => $proposal->id,
                'name' => $solution['name'],
                'description' => $solution['description'],
                'likes' => 0
            ]);
            
            foreach($solution['costs'] as $cost) {
                Cost::create([
                    'solution_id' => $newSolution->id,
                    'name' => $cost['name'],
                    'description' => $cost['description'],
                    'price' => $cost['price'],
                    'amount' => $cost['amount']
                ]);
            }
        }

        return $proposal;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function show(Proposal $proposal)
    {
        
        foreach($proposal->solutions as $so) {
            $so->costs;
        }
        return $proposal;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proposal $proposal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proposal $proposal)
    {
        //
    }
}
