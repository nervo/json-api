<?php

namespace Elao\JsonApi\Document;

/**
 * Data document
 *
 * @package Elao\JsonApi
 */
class DataDocument extends Document
{
    protected $data = null;

    protected $included;

    /**
     * Constructor
     *
     * @param array|null $data
     */
    public function __construct(array $data = null)
    {
        $this->data = $data;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        $data = [
            'data' => $this->data
        ];

        if (isset($this->included)) {
            $data['included'] = $this->included;
        }

        return array_merge(
            parent::toArray(),
            $data
        );
    }
}
