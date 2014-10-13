<?php
namespace Plum\Rest;

use Plum\Http\Request;

/**
 * @Annotation
 */
class PUT extends RestMethod
{
    /**
     * {@inheritdoc}
     */
    public function method()
    {
        return Request::METHOD_PUT;
    }
}
