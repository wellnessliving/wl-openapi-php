<?php

namespace WlSdk\Wl\Marketing\Automation\Prebuilt;

class PrebuiltDuplicateGetRequest
{
    /**
     * Automation key.
     *
     * @var string|null
     */
    public ?string $k_automation = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_automation' => $this->k_automation,
            ],
            static fn ($v) => $v !== null
        );
    }
}
