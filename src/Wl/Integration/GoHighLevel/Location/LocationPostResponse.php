<?php

namespace WlSdk\Wl\Integration\GoHighLevel\Location;

/**
 * Response from POST
 */
class LocationPostResponse
{
    /**
     * Go High Level account name.
     *
     * @var string|null
     */
    public ?string $text_account = null;

    /**
     * Go High Level location token.
     *
     * @var string|null
     */
    public ?string $text_token = null;

    public function __construct(array $data)
    {
        $this->text_account = isset($data['text_account']) ? (string)$data['text_account'] : null;
        $this->text_token = isset($data['text_token']) ? (string)$data['text_token'] : null;
    }
}
