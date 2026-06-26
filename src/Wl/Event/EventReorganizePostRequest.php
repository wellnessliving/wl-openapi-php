<?php

namespace WlSdk\Wl\Event;

class EventReorganizePostRequest
{
    /**
     * List of the class periods' keys which should be reorganized.
     *
     * @var string[]|null
     */
    public ?array $a_class_period = null;

    /**
     * Class key.
     * Destination class.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_class_period' => $this->a_class_period,
            'k_class' => $this->k_class,
            ],
            static fn ($v) => $v !== null
        );
    }
}
