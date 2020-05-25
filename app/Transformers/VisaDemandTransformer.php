<?php

namespace App\Transformers;

use App\VisaDemand;
use League\Fractal\TransformerAbstract;

class VisaDemandTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        //
    ];

    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        //
    ];

    /**
     * A Fractal transformer.
     *
     * @param VisaDemand $demand
     * @return array
     */
    public function transform(VisaDemand $demand)
    {
        return $demand->toArray();
    }
}
