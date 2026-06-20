<?php
namespace WlSdk\Wl\Business\Account;

class BusinessAccountGetRequest
{
    /**
     * `true` returns WellnessLiving customers.
     * 
     * `false` returns prospects.
     * 
     * Test and churned businesses are never returned.
     *
     * @var bool|null
     */
    public ?bool $is_prospects = null;

    /**
     * Specifies if only businesses having published locations should be returned.
     *
     * @var bool|null
     */
    public ?bool $is_published = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_prospects' => $this->is_prospects,
            'is_published' => $this->is_published,
            ],
            static fn($v) => $v !== null
        );
    }
}
