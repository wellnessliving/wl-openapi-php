<?php

namespace WlSdk\Wl\Lead;

class LeadPagePostRequest
{
    /**
     * List of lead fields.
     *
     * @var array|null
     */
    public ?array $a_lead_field = null;

    /**
     * List of Lead Sources.
     *
     * @var array[]|null
     */
    public ?array $a_lead_source = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Settings for added leads.
     *
     * @var array|mixed|null
     */
    public $o_lead_setting = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_lead_field' => $this->a_lead_field,
            'a_lead_source' => $this->a_lead_source,
            'k_business' => $this->k_business,
            'o_lead_setting' => $this->o_lead_setting,
            ],
            static fn ($v) => $v !== null
        );
    }
}
