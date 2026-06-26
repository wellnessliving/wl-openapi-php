<?php

namespace WlSdk\Wl\Eml\Mailchimp;

class EmlMailChimpPostRequest
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

    /**
     * System data of Mailchimp. Can be different for each type. But in our system used only matched data.
     *
     * @var array|null
     */
    public ?array $o_data = null;

    /**
     * Type of fired event.
     * One of (subscribe, unsubscribe, profile, upemail, cleaned, campaign).
     *
     * @var string|null
     */
    public ?string $s_type = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_list_id' => $this->s_list_id,
            's_token' => $this->s_token,
            'o_data' => $this->o_data,
            's_type' => $this->s_type,
            ],
            static fn ($v) => $v !== null
        );
    }
}
