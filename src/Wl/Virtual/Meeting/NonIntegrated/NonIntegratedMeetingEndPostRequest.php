<?php

namespace WlSdk\Wl\Virtual\Meeting\NonIntegrated;

class NonIntegratedMeetingEndPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Meeting id.
     *
     * @var string|null
     */
    public ?string $s_meeting_id = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_meeting_id' => $this->s_meeting_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
