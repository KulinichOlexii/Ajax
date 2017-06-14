<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClients;
use \Illuminate\Http\Request;
use App\Client;
use Validator;
use Illuminate\Http\Response;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'email' => 'required|email|unique:clients,email'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
            return response()->json (array (
                'errors' => $validator->getMessageBag()->toArray()
            ) );
        else{
            $client = Client::create($request->all());
            return response()->json($client);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $client = Client::find($id);
        $rules = array(
            'email' => 'required|email|unique:clients,email,' . $client->id,
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
            return response()->json (array (
                'errors' => $validator->getMessageBag()->toArray()
            ) );
        else{
            $client->update($request->all());
            return response()->json($client);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::find($id)->delete();
        return response()->json();
    }
}
