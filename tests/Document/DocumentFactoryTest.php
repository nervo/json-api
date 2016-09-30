<?php

/*
 * This file is part of the ADELE api.
 *
 * Copyright (C) 2015 ADELE
 *
 * @author Elao <contact@elao.com>
 */

namespace Elao\JsonApi\Tests\Document;

use Elao\JsonApi\Document;
use PHPUnit_Framework_TestCase;

class DocumentFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Document\DocumentFactory
     */
    protected $factory;

    protected function setUp()
    {
        $this->factory = new Document\DocumentFactory();
    }

    public function testTrue()
    {
        $this->assertTrue(true);
    }
}
