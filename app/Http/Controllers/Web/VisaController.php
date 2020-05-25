<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\VisaRequest;
use App\IndexResponse;
use App\Media;
use App\RequiredDocument;
use App\Transformers\VisaTransformer;
use App\Visa;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class VisaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        return view('pages.visa_list', [
            'visas' => Visa::paginate(30)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Factory|View
     */
    public function show($id)
    {
        return view('pages.visa_details', [
            'visa' => Visa::where('id', $id)->first()
        ]);
    }
}
