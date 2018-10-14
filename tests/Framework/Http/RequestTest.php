<?php

namespace Tests\Framework\Http;

use Framework\Http\Request;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    public function testEmpty()
    {
        $_GET = [];
        $_POST = [];

        $request = new Request();

        self::assertEquals([], $request->getQueryParams());
        self::assertNull($request->getParsedBody());
    }

    public function testQueryParams()
    {
        $_GET = $data = [
            'name' => 'John',
            'age' => 28,
        ];
        $_POST = [];

        $request = new Request();

        self::assertEquals($data, $request->getQueryParams());
        self::assertNull($request->getParsedBody());
    }

    public function testParsedBody()
    {
        $_GET = [];
        $_POST = $data = ['title' => 'Title'];

        $request = new Request();

        self::assertEquals([], $request->getQueryParams());
        self::assertEquals($data, $request->getParsedBody());
    }

    public function testPostGet()
    {
        $_GET = $data1 = [
            'name' => 'John',
            'age' => 28,
        ];
        $_POST = $data2 = ['title' => 'Title'];

        $request = new Request();

        self::assertEquals($data1, $request->getQueryParams());
        self::assertEquals($data2, $request->getParsedBody());
    }
}