<?php

namespace WlSdk\Wl\Sms\History;

class ResendPostRequest
{
    /**
     * A sms history ID.
     *
     * @var string|null
     */
    public ?string $k_sms_history = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_sms_history' => $this->k_sms_history,
            ],
            static fn ($v) => $v !== null
        );
    }
}
