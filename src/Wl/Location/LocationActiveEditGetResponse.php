<?php

namespace WlSdk\Wl\Location;

/**
 * Response from GET
 */
class LocationActiveEditGetResponse
{
    /**
     * Confirmation message.
     *
     * @var string|null
     */
    public ?string $text_confirm = null;

    public function __construct(array $data)
    {
        $this->text_confirm = isset($data['text_confirm']) ? (string)$data['text_confirm'] : null;
    }
}
