<?php

namespace Elao\JsonApi\Document;

/**
 * Document interface
 *
 * @package Elao\JsonApi
 */
interface DocumentInterface extends \JsonSerializable
{
    /**
     * To array
     *
     * @return array
     */
    public function toArray();
}
