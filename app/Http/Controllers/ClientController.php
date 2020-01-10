<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\ClientRequest;
use App\IndexResponse;
use App\Transformers\ClientTransformer;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index()
    {
        $this->authorize('index', Client::class);

        return $this->respond(
            'Data Loaded Successfully',
            fractal(
                (new IndexResponse(Client::query()))->execute()
                , new ClientTransformer()
            )
        );
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
     * @param ClientRequest $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(ClientRequest $request)
    {
        $this->authorize('store', Client::class);

        $data = $request->validated();

        $client = Client::create($data);

        return $this->respond(
            'Client Created Successfully',
            fractal(
                Client::where('id', $client->id)->first(),
                new ClientTransformer()
            )
        );
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show($id)
    {
        $this->authorize('show', Client::class);
        return $this->respond('fetched successfully', fractal(
                Client::where('id', $id)
                    ->first(),
                new ClientTransformer()
            )
        );
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
     * @param ClientRequest $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(ClientRequest $request, $id)
    {
        $this->authorize('update', Client::class);

        $client = Client::find($id);

        $data = $request->validated();

        $client->update($data);

        return $this->respond(
            'Client Updated Successfully',
            fractal(
                Client::where('id' , $client->id)->first(),
                new ClientTransformer()
            )
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy($id)
    {
        $this->authorize('destroy', Client::class);

        Client::find($id)->delete();

        return $this->respond('Client Deleted Successfully');
    }
}
