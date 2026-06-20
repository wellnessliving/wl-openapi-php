<?php
namespace WlSdk\Wl\Book\Process\Info;

/**
 * Response from GET
 */
class InfoCanCompleteGetResponse
{
    /**
     * Determines whether users can complete the booking process from the info step.
     *
     * @var bool|null
     */
    public ?bool $can_complete = null;

    /**
     * `true` if price for the individual session should be hidden, if client has applicable pricing option to pay
     * for this
     * booking.
     * `false` if price should be shown always.
     *
     * @var bool|null
     */
    public ?bool $hide_price = null;

    public function __construct(array $data)
    {
        $this->can_complete = isset($data['can_complete']) ? (bool)$data['can_complete'] : null;
        $this->hide_price = isset($data['hide_price']) ? (bool)$data['hide_price'] : null;
    }
}
