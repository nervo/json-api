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

    public function invalidDataProvider()
    {
        return [
            [[]],
            [['data' => null, 'errors' => null]],
            [['included' => null]]
        ];
    }

    /**
     * @dataProvider invalidDataProvider
     */
    public function testInvalid(array $data)
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->factory->fromArray($data);
    }
}
