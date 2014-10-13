<?php
namespace Plum\Rest;

use Plum\Http\Request;

/**
 * @Annotation
 */
class GET extends RestMethod
{
    /**
     * {@inheritdoc}
     */
    public function method()
    {
        return Request::METHOD_GET;
    }
}
