<?php
namespace WlSdk\Wl\Event;

class EventCancelWholePostRequest
{
    /**
     * Key of the business in which the class resides.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * An event key.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * A user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_class' => $this->k_class,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
