<?php

namespace WlSdk\Wl\Eml\Mailchimp;

class EmlMailChimpGetRequest
{
    /**
     * Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * List ID.
     *
     * @var string|null
     */
    public ?string $s_list_id = null;

    /**
     * Encrypted data.
     *
     * @var string|null
     */
    public ?string $s_token = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_list_id' => $this->s_list_id,
            's_token' => $this->s_token,
            ],
            static fn ($v) => $v !== null
        );
    }
}
