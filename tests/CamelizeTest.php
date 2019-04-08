<?php

namespace HalniqueTest\Slack\String;

use Halnique\String\Camelize;
use HalniqueTest\String\TestCase;

class CamelizeTest extends TestCase
{
    public function lowerData(): array
    {
        return [
            'aaabbb' => [
                'expected' => 'aaabbb',
                'actual' => 'aaabbb',
            ],
            'aaa bbb' => [
                'expected' => 'aaaBbb',
                'actual' => 'aaa bbb',
            ],
            'aaa-bbb' => [
                'expected' => 'aaaBbb',
                'actual' => 'aaa-bbb',
            ],
            'aaa_bbb' => [
                'expected' => 'aaaBbb',
                'actual' => 'aaa_bbb',
            ],
            'AAABBB' => [
                'expected' => 'aAABBB',
                'actual' => 'AAABBB',
            ],
        ];
    }

    /**
     * @dataProvider lowerData
     * @param string $expected
     * @param string $actual
     */
    public function testLower(string $expected, string $actual)
    {
        $this->assertEquals($expected, Camelize::lower($actual));
    }

    public function upperData(): array
    {
        return [
            'aaa bbb' => [
                'expected' => '',
                'actual' => '',
            ],
        ];
    }

    /**
     * @dataProvider upperData
     * @param string $expected
     * @param string $actual
     */
    public function testUpper(string $expected, string $actual)
    {
        $this->assertEquals($expected, Camelize::upper($actual));
    }
}
