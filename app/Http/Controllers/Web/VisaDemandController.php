<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\VisaDemandRequest;
use App\Visa;
use App\VisaDemand;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class VisaDemandController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param VisaDemandRequest $request
     * @return RedirectResponse|Redirector
     */
    public function store(VisaDemandRequest $request)
    {
        $data = $request->validated();

        $demand = VisaDemand::create($data);

        Visa::find($data['visa_id'])->demands()->save($demand);

        return redirect(route('submitted'));
    }
}
