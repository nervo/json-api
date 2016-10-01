<?php

/*
 * This file is part of the Elao JsonApi component.
 *
 * Copyright © Elao
 *
 * @author Elao <contact@elao.com>
 */

namespace Elao\JsonApi\Document;

/**
 * Errors document
 *
 * @package Elao\JsonApi
 */
class ErrorsDocument extends Document
{
    protected $errors = [];

    /**
     * Constructor
     *
     * @param array $errors
     */
    public function __construct(array $errors = [])
    {
        $this->errors = $errors;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        $data = [
            'errors' => $this->errors
        ];

        return array_merge(
            parent::toArray(),
            $data
        );
    }
}
