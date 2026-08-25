<?php

namespace WlSdk\Wl\Event;

class EventEnrollmentGetRequest
{
    /**
     * List of event classes for which enrollment must be retrieved.
     *
     * @var string[]|null
     */
    public ?array $a_class = null;

    /**
     * Key of the business to which the event classes belong.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_class' => $this->a_class,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
