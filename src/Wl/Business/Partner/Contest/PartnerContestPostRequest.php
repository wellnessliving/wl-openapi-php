<?php

namespace WlSdk\Wl\Business\Partner\Contest;

class PartnerContestPostRequest
{
    /**
     * Contest key.
     *
     * @var string|null
     */
    public ?string $k_partner_contest = null;

    /**
     * Weather the contest is visible to anyone or not.
     *
     * @var bool|null
     */
    public ?bool $is_remove = null;

    /**
     * Weather the contest is visible to the business or not.
     *
     * @var bool|null
     */
    public ?bool $is_visible = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_partner_contest' => $this->k_partner_contest,
            'is_remove' => $this->is_remove,
            'is_visible' => $this->is_visible,
            ],
            static fn ($v) => $v !== null
        );
    }
}
