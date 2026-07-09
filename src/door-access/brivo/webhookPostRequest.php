<?php
namespace WlSdk\door-access\brivo;

class webhookPostRequest
{
    /**
     * Business the webhook belongs to. Taken from the webhook URL.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Secret token from the webhook URL used to authenticate the Brivo request.
     *
     * @var string|null
     */
    public ?string $s_token = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_token' => $this->s_token,
            ],
            static fn($v) => $v !== null
        );
    }
}
