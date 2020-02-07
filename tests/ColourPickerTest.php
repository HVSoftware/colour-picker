<?php
declare(strict_types=1);

namespace HVSoftware\ColourPicker\tests;

use HVSoftware\ColourPicker\tests\TestDoubles\FakeColourPicker;
use PHPUnit\Framework\TestCase;

class ColourPickerTest extends TestCase
{
    /**
     * @test
     */
    public function i_should_test_if_i_get_an_rgb_by_colour_name(string $name = ''): void
    {
        $colourPicker = new FakeColourPicker();

        $this->assertEquals([255, 0, 0], $colourPicker->getRGBByColour($name));
    }
}
