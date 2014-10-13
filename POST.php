<?php
namespace Plum\Rest;

use Plum\Http\Request;

/**
 * @Annotation
 */
class POST extends RestMethod
{
    /**
     * {@inheritdoc}
     */
    public function method()
    {
        return Request::METHOD_POST;
    }
}
