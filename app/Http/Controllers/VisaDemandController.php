<?php

namespace App\Http\Controllers;

use App\Http\Requests\VisaDemandRequest;
use App\IndexResponse;
use App\Transformers\VisaDemandTransformer;
use App\Visa;
use App\VisaDemand;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VisaDemandController extends Controller
{    /**
 * Display a listing of the resource.
 *
 * @return JsonResponse
 * @throws AuthorizationException
 */
    public function index()
    {
        $this->authorize('index', VisaDemand::class);

        return $this->respond(
            'Data Loaded Successfully',
            fractal(
                (new IndexResponse(VisaDemand::query()))->execute()
                , new VisaDemandTransformer()
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param VisaDemandRequest $request
     * @return JsonResponse
     */
    public function store(VisaDemandRequest $request)
    {
        $data = $request->validated();

        $demand = VisaDemand::create($data);

        Visa::find($data['visa_id'])->demands()->save($demand);

        return $this->respond(
            'Created Successfully',
            fractal(
                VisaDemand::where('id', $demand->id)->first(),
                new VisaDemandTransformer()
            )
        );
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function show($id)
    {
        $this->authorize('show', VisaDemand::class);

        return $this->respond('fetched successfully', fractal(
                VisaDemand::where('id', $id)
                    ->first(),
                new VisaDemandTransformer()
            )
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function destroy($id)
    {
        $this->authorize('destroy', VisaDemand::class);

        VisaDemand::find($id)->delete();

        return $this->respond('Deleted Successfully');
    }
}
