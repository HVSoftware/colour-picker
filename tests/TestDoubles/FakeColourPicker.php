<?php
declare(strict_types=1);

namespace HVSoftware\ColourPicker\tests\TestDoubles;

use HVSoftware\ColourPicker\ColourPickerInterface;

final class FakeColourPicker implements ColourPickerInterface
{
    public function getRGBByColour(string $name): array
    {
        return [255, 0, 0];
    }
}
