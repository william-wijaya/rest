<?php
namespace Plum\Rest;

use Plum\Http\Request;

/**
 * @Annotation
 */
class OPTIONS extends RestMethod
{
    /**
     * {@inheritdoc}
     */
    public function method()
    {
        return Request::METHOD_OPTIONS;
    }
}
