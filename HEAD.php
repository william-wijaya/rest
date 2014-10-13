<?php
namespace Plum\Rest;

use Plum\Http\Request;

/**
 * @Annotation
 */
class HEAD extends RestMethod
{
    /**
     * {@inheritdoc}
     */
    public function method()
    {
        return Request::METHOD_HEAD;
    }
}
