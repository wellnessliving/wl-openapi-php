<?php
namespace WlSdk\Wl\Event;

class EventListPutRequest
{
    /**
     * The event business key to retrieve a list of all event sessions in business.
     * 
     * `null` to retrieve events from `k_location`.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The user key.
     * Required to apply specific user rules such as age restrictions.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Model cache reset flag.
     *
     * @var bool|null
     */
    public ?bool $is_cache_reset = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'is_cache_reset' => $this->is_cache_reset,
            ],
            static fn($v) => $v !== null
        );
    }
}
