<?php

namespace WlSdk\Wl\Reception\Application;

class ReceptionAuthorizePostRequest
{
    /**
     * Key of the business, where Check In application is started.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the location, where Check In application is started.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Key of the Check In application.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    /**
     * Authorization value - it's a value, which client entered on authorization form.
     *
     * It can be client ID, email or phone number. Depends on the business settings.
     *
     * @var string|null
     */
    public ?string $text_authorize = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            's_secret' => $this->s_secret,
            'text_authorize' => $this->text_authorize,
            ],
            static fn ($v) => $v !== null
        );
    }
}
