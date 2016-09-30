<?php

namespace Elao\JsonApi\Document;

/**
 * Data document
 *
 * @package Elao\JsonApi
 */
class DataDocument extends Document
{
    protected $data;

    protected $included;

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return [];
    }
}
