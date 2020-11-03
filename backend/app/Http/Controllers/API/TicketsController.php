<?php

namespace App\Http\Controllers\API;

use App\Models\Tickets;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    private $tickets;
    
    public function __construct (Tickets $tickets) {
        $this->tickets = $tickets;
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ['data' => $this->tickets->all()];
        
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resultCreate = $this->tickets->create($request->all());
        if($resultCreate) {
            return response()->json(["success" => true]);
        } else {
            return response()->json(["success" => false]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ['data' => $this->tickets->findOrFail($id)];
        
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
