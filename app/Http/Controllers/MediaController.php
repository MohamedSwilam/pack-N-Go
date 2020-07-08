<?php

namespace App\Http\Controllers;

use App\IndexResponse;
use App\Media;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

    class MediaController extends Controller
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
            Media::where('relation', 'background')->get()
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
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $data = [
                'old_name' => $image->getClientOriginalName(),
                'relation' => 'background'
            ];
            $data['url'] = download_file($image, config('paths.image.create'));
            Media::create($data);
        }

        return $this->respond('Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy($id)
    {
        Media::find($id)->delete();

        return $this->respond('Media Deleted Successfully');
    }
}
