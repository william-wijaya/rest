<?php
namespace Plum\Rest;

/**
 * Base request annotation class
 */
abstract class RestMethod
{
    /**
     * The Rest URI
     *
     * @var string
     */
    public $value = "/";

    /**
     * Returns the request method name
     *
     * @return string
     */
    public abstract function method();
} 
