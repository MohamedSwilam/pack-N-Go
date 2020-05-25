<?php

namespace App\Transformers;

use App\RequiredDocument;
use League\Fractal\TransformerAbstract;

class RequiredDocumentTransformer extends TransformerAbstract
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
     * @param RequiredDocument $document
     * @return array
     */
    public function transform(RequiredDocument $document)
    {
        return $document->toArray();
    }
}
