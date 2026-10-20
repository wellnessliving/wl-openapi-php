<?php

namespace WlSdk\Wl\Login\Promotion\GuestPass\Apply;

class ApplyGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Visit key of the attendee for whom the list of guest passes is requested.
     *
     * @var string|null
     */
    public ?string $k_visit_search = null;

    /**
     * Text to search guest pass hosts by (for example, a member name).
     *
     * Empty string means no search.
     *
     * @var string|null
     */
    public ?string $text_search = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_visit_search' => $this->k_visit_search,
            'text_search' => $this->text_search,
            ],
            static fn ($v) => $v !== null
        );
    }
}
