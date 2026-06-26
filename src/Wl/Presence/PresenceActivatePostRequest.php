<?php

namespace WlSdk\Wl\Presence;

class PresenceActivatePostRequest
{
    /**
     * Key of the business, where client want to activate website.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * ID of the plan to be activated.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\WebsiteSid
     */
    public ?int $id_website = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'id_website' => $this->id_website,
            ],
            static fn ($v) => $v !== null
        );
    }
}
