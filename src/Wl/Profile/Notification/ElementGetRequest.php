<?php

namespace WlSdk\Wl\Profile\Notification;

class ElementGetRequest
{
    /**
     * Business key.
     *
     * Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of push notification to retrieve information about.
     *
     * Primary key in Sql.
     *
     * @var string|null
     */
    public ?string $k_push_history = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_push_history' => $this->k_push_history,
            ],
            static fn ($v) => $v !== null
        );
    }
}
