<?php

namespace Wellison\Kutter\Models;

class Cable {

    public function __construct(
            public int $id,
            public string $description,
            public float $section,
            public SectionUnit $sectionUnit,
            public Color $color,
            public int $size,
            public ?float $stripA,
            public ?float $stripB
    ) {
        
    }
}
