<?php

namespace App\Transformers;

use App\Visa;
use League\Fractal\TransformerAbstract;

class VisaTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        'documents'
    ];

    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        'demands', 'documents'
    ];

    /**
     * A Fractal transformer.
     *
     * @param Visa $visa
     * @return array
     */
    public function transform(Visa $visa)
    {
        return $visa->toArray();
    }

    public function includeDemand(Visa $visa)
    {
        return $this->collection($visa->demands, new VisaDemandTransformer());
    }

    public function includeDocuments(Visa $visa)
    {
        return $this->collection($visa->documents, new RequiredDocumentTransformer());
    }
}
