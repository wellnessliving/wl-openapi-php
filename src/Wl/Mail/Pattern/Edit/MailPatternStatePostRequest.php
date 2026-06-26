<?php

namespace WlSdk\Wl\Mail\Pattern\Edit;

class MailPatternStatePostRequest
{
    /**
     * Determines if the mail pattern should be active.
     * `true` if the mail pattern is active, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Business key where the mail pattern is used.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Mail pattern key.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_active' => $this->is_active,
            'k_business' => $this->k_business,
            'k_mail_pattern' => $this->k_mail_pattern,
            ],
            static fn ($v) => $v !== null
        );
    }
}
