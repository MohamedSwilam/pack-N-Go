<?php

namespace App\Http\Controllers;

use App\Http\Requests\VisaRequest;
use App\IndexResponse;
use App\Media;
use App\RequiredDocument;
use App\Transformers\VisaTransformer;
use App\Visa;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VisaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function index()
    {
        $this->authorize('index', Visa::class);

        return $this->respond(
            'Data Loaded Successfully',
            fractal(
                (new IndexResponse(Visa::query()))->execute(),
                new VisaTransformer()
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
     * @param VisaRequest $request
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function store(VisaRequest $request)
    {
        $this->authorize('store', Visa::class);

        $data = $request->validated();

        $visa = Visa::create($data);

        foreach (json_decode($request->validated()['required_documents']) as $requirement){
            $requirement = RequiredDocument::create([
                'description' => $requirement->description
            ]);
            $visa->documents()->save($requirement);
        }

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $data = [
                'old_name' => $image->getClientOriginalName(),
            ];
            $data['url'] = download_file($image, config('paths.image.create'));
            $image = Media::create($data);
            $visa->image()->save($image);
        }

        return $this->respond(
            'Created Successfully',
            fractal(
                Visa::where('id', $visa->id)->first(),
                new VisaTransformer()
            )
        );    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function show($id)
    {
        $this->authorize('show', Visa::class);
        return $this->respond('fetched successfully', fractal(
                Visa::find($id),
                new VisaTransformer()
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
     * @param VisaRequest $request
     * @param int $id
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function update(VisaRequest $request, $id)
    {
        $this->authorize('update', Visa::class);

        $visa = Visa::find($id);

        $data = $request->validated();

        $visa->update($data);

        return $this->respond(
            'Updated Successfully',
            fractal($visa, new VisaTransformer())
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
        $this->authorize('destroy', Visa::class);

        Visa::find($id)->delete();

        return $this->respond('Deleted Successfully');
    }
}
