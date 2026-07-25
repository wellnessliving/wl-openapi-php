<?php

namespace WlSdk\Wl\Login\Member;

class LoginMemberListAllGetRequest
{
    /**
     * The maximum number of members to return in the list.
     *
     * Use with `uid_last` to get the next page of results.
     *
     * @var int|null
     */
    public ?int $i_page_size = 150;

    /**
     * The key of the business to get a list of members for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The last member UID from the previous page.
     * Use with `i_page_size` to get the next page of results.
     * If empty, the first page of results is returned.
     *
     * @var string|null
     */
    public ?string $uid_last = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_page_size' => $this->i_page_size,
            'k_business' => $this->k_business,
            'uid_last' => $this->uid_last,
            ],
            static fn ($v) => $v !== null
        );
    }
}
