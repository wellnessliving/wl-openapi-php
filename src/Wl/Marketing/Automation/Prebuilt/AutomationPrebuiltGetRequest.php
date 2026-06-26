<?php

namespace WlSdk\Wl\Marketing\Automation\Prebuilt;

class AutomationPrebuiltGetRequest
{
    /**
     * Whether to get original automation data without Isaac template generation.
     * If `true`, the API will return original automation data without Isaac template generation.
     * If `false`, the API will return automation data with Isaac template generation, if the pre-built automation
     * is
     * marked as using Isaac.
     *
     * @var bool|null
     */
    public ?bool $is_original = null;

    /**
     * Call to action data in JSON format.
     *
     * @var string|null
     */
    public ?string $json_action = null;

    /**
     * Automation key.
     *
     * @var string|null
     */
    public ?string $k_automation = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_original' => $this->is_original,
            'json_action' => $this->json_action,
            'k_automation' => $this->k_automation,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
