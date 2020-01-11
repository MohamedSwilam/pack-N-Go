<?php

namespace App\Http\Controllers;

use App\Accommodation;
use App\Http\Requests\PackageRequest;
use App\IndexResponse;
use App\Lusion;
use App\Package;
use App\Schedule;
use App\Transformers\PackageTransformer;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        return $this->respond(
            'Data Loaded Successfully',
            fractal(
                (new IndexResponse(Package::query()))->execute(),
                new PackageTransformer()
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
     * @param PackageRequest $request
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function store(PackageRequest $request)
    {
        $this->authorize('store', Package::class);

        $package = Package::create($request->validated());

        foreach ($request->validated()['inclusions'] as $inclusion){
            $inclusion['type'] = 1;
            $inclusion = Lusion::create($inclusion);
            $package->inclusions()->save($inclusion);
        }

        foreach ($request->validated()['exclusions'] as $exclusion){
            $exclusion['type'] = 0;
            $exclusion = Lusion::create($exclusion);
            $package->exclusions()->save($exclusion);
        }

        foreach ($request->validated()['schedules'] as $schedule){
            $schedule = Schedule::create($schedule);
            $package->schedules()->save($schedule);
        }

        foreach ($request->validated()['accommodations'] as $accommodation){
            $accommodation = Accommodation::create($accommodation);
            $package->accommodations()->save($accommodation);
        }

        return $this->respond(
            'Created Successfully',
            fractal(
                Package::where('id', $package->id)->first(),
                new PackageTransformer()
            )
        );
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function show($id)
    {
        $this->authorize('show', Package::class);
        return $this->respond('Fetched successfully', fractal(
                Package::where('id', $id)->first(),
                new PackageTransformer()
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
     * Update the specified resource in storage.
     *
     * @param PackageRequest $request
     * @param int $id
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function update(PackageRequest $request, $id)
    {
        $this->authorize('update', Package::class);

        $package = Package::find($id);

        $package->update($request->validated());

        return $this->respond(
            'Updated Successfully',
            fractal($package, new PackageTransformer())
        );
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
        $this->authorize('destroy', Package::class);

        Package::find($id)->delete();

        return $this->respond('Deleted Successfully');
    }
}
