<?php

/**
 * Copyright (c) 2017-2020 gyselroth™  (http://www.gyselroth.net)
 *
 * @package \gyselroth\Helper
 * @author  gyselroth™  (http://www.gyselroth.com)
 * @link    http://www.gyselroth.com
 * @license Apache-2.0
 */

namespace Tests;

use Gyselroth\Helper\HelperServerClient;

class HelperServerClientTest extends HelperTestCase
{
    public function testGetHost(): void
    {
        self::markTestSkipped('Always dependent on environment.');
    }

    public function testGetDiffOfRequestAndLocalTime(): void
    {
        self::markTestSkipped('Always dependent on environment.');
    }

    public function testGetInstalledFonts(): void
    {
        self::markTestSkipped('Always dependent on environment.');
    }

    public function testGetRequestUrl(): void
    {
        self::markTestSkipped('Always dependent on environment.');
    }

    public function testGetClientIP(): void
    {
        self::markTestSkipped('Always dependent on environment.');
    }

    public function testIsClientWindows(): void
    {
        self::markTestSkipped('Always dependent on environment.');
    }

    public function testPrepareAjaxResponseData(): void
    {
        $data = [
            'key1' => ['values11', 'values12'],
            'key2' => ['values21', 'values22'],
            'key3' => ['values31', 'values32']
        ];

        $dataUnset = $data;

        unset($dataUnset['key2']);

        self::assertEmpty(
            HelperServerClient::prepareAjaxResponseData([])
        );

        self::assertEquals(
            $dataUnset,
            HelperServerClient::prepareAjaxResponseData($data, ['key2', 'key4'])
        );
    }

    public function testGetUriParts(): void
    {
        self::assertEmpty(
            HelperServerClient::getUriParts('http://de.wikipedia.org/wiki/Uniform_Resource_Identifier')
        );

        $parts = [
            'http://nobody:password@example.org:8080/cgi-bin',
            'http',
            'nobody',
            'password',
            'example.org',
            '8080/cgi-bin'
        ];

        self::assertEquals(
            $parts,
            HelperServerClient::getUriParts('http://nobody:password@example.org:8080/cgi-bin')
        );
    }
}
