<?php

namespace WlSdk\Wl\Marketing\Automation\Prebuilt;

class PrebuiltDuplicatePostRequest
{
    /**
     * Automation key.
     *
     * @var string|null
     */
    public ?string $k_automation = null;

    /**
     * List of business types.
     * For `get()` method - list of business types connected to the duplicated prebuilt automation.
     * For `post()` method - list of business types to connect to the new prebuilt automation.
     *
     * @var array|null
     */
    public ?array $a_business_type = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_automation' => $this->k_automation,
            'a_business_type' => $this->a_business_type,
            ],
            static fn ($v) => $v !== null
        );
    }
}
