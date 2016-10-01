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
