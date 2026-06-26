<?php

namespace WlSdk\Wl\Classes\Tab;

class ClassTabDeleteRequest
{
    /**
     * Class tab key. Primary key in the Sql table.
     * `null` to create new class tab.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_class_tab' => $this->k_class_tab,
            ],
            static fn ($v) => $v !== null
        );
    }
}
