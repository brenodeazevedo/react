<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    private $event;

    function  __construct(Event $event)
    {

        $this->event = $event;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try
        {
            $event = $this->event->with('ticketEvent')->get();

            return response()->json($event,200);

        }catch (\Exception $e){

            return response()->json([$e], 400);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
            $data = $request->only(['name','date', 'category','description']);

            $validate = validator($data, $this->event->rules);

            if ($validate->fails())
            {

                return response()->json($validate->Errors(), 400);

            }

            $insert = $this->event->create($data);

            return response()->json(["created" => $insert],201);

        }catch (\Exception $e){

            return response()->json([$e], 400);
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
        //
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
