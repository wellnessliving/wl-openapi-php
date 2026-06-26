<?php

namespace WlSdk\Wl\Login\Mail\Secondary;

class MailSecondarySearchGetRequest
{
    /**
     * Business key within which the search should be performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Search query.
     * Search is performed by email, first name and last name.
     * If not specified recent clients and relatives will be returned without filtering.
     *
     * @var string|null
     */
    public ?string $text_search = null;

    /**
     * Key of the user on behalf of whom the search is performed.
     * This user will be excluded from the search results.
     *
     * @var string|null
     */
    public ?string $uid_behalf = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_search' => $this->text_search,
            'uid_behalf' => $this->uid_behalf,
            ],
            static fn ($v) => $v !== null
        );
    }
}
