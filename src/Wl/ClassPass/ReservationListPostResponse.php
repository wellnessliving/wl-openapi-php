<?php

namespace WlSdk\Wl\ClassPass;

/**
 * Response from POST
 */
class ReservationListPostResponse
{
    /**
     * See `text_spot_label` for documentation.
     *
     * @var string|null
     */
    public ?string $text_spot_label = null;

    public function __construct(array $data)
    {
        $this->text_spot_label = isset($data['text_spot_label']) ? (string)$data['text_spot_label'] : null;
    }
}
