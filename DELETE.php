<?php
namespace Plum\Rest;

use Plum\Http\Request;

/**
 * @Annotation
 */
class DELETE extends RestMethod
{
    /**
     * {@inheritdoc}
     */
    public function method()
    {
        return Request::METHOD_DELETE;
    }
}
