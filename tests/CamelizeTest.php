<?php

namespace HalniqueTest\String;

use Halnique\String\Camelize;

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
            'aaa   bbb' => [
                'expected' => 'aaaBbb',
                'actual' => 'aaa   bbb',
            ],
            'aaa-bbb' => [
                'expected' => 'aaaBbb',
                'actual' => 'aaa-bbb',
            ],
            'aaa_bbb' => [
                'expected' => 'aaaBbb',
                'actual' => 'aaa_bbb',
            ],
            'aaa_bbb-ccc ddd' => [
                'expected' => 'aaaBbbCccDdd',
                'actual' => 'aaa_bbb-ccc ddd',
            ],
            'AAABBB' => [
                'expected' => 'aAABBB',
                'actual' => 'AAABBB',
            ],
            'Aaabbb' => [
                'expected' => 'aaabbb',
                'actual' => 'Aaabbb',
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
            'aaabbb' => [
                'expected' => 'Aaabbb',
                'actual' => 'aaabbb',
            ],
            'aaa bbb' => [
                'expected' => 'AaaBbb',
                'actual' => 'aaa bbb',
            ],
            'aaa   bbb' => [
                'expected' => 'AaaBbb',
                'actual' => 'aaa   bbb',
            ],
            'aaa-bbb' => [
                'expected' => 'AaaBbb',
                'actual' => 'aaa-bbb',
            ],
            'aaa_bbb' => [
                'expected' => 'AaaBbb',
                'actual' => 'aaa_bbb',
            ],
            'aaa_bbb-ccc ddd' => [
                'expected' => 'AaaBbbCccDdd',
                'actual' => 'aaa_bbb-ccc ddd',
            ],
            'AAABBB' => [
                'expected' => 'AAABBB',
                'actual' => 'AAABBB',
            ],
            'Aaabbb' => [
                'expected' => 'Aaabbb',
                'actual' => 'Aaabbb',
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
