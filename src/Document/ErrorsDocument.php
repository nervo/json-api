<?php

namespace Elao\JsonApi\Document;

/**
 * Errors document
 *
 * @package Elao\JsonApi
 */
class ErrorsDocument extends Document
{
    protected $errors;

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return [];
    }
}
