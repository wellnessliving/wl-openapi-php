<?php

namespace WlSdk\Core\Passport\Login\Enter\Quick;

class EnterQuickGetRequest
{
    /**
     * Additional data, which can be sent to the listeners of the event "user signed in".
     *
     * @var array|null
     */
    public ?array $a_data = null;

    /**
     * Key of the user to be signed in.
     *
     * `null` to logout current user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Link to redirect user after sign in.
     *
     * @var string|null
     */
    public ?string $url_redirect = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_data' => $this->a_data,
            'uid' => $this->uid,
            'url_redirect' => $this->url_redirect,
            ],
            static fn ($v) => $v !== null
        );
    }
}
