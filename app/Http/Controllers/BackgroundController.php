<?php

namespace App\Http\Controllers;

use App\Media;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BackgroundController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {

        $data = $request->all();

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $image->move(config('paths.image.create'), "background.jpg");
        }

        return $this->respond(
            'Created Successfully'
        );
    }
}
