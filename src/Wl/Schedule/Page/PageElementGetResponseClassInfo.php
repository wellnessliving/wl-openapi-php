<?php

namespace WlSdk\Wl\Schedule\Page;

class PageElementGetResponseClassInfo
{
    /**
     * A total number of booked visits in the class, including all lists: active and waitlist.
     *
     * @var int|null
     */
    public ?int $i_book_active = null;

    /**
     * Class capacity.
     *
     * @var int|null
     */
    public ?int $i_capacity = null;

    /**
     * A total number of booked visits in the waitlist.
     *
     * @var int|null
     */
    public ?int $i_wait = null;

    public function __construct(array $data)
    {
        $this->i_book_active = isset($data['i_book_active']) ? (int)$data['i_book_active'] : null;
        $this->i_capacity = isset($data['i_capacity']) ? (int)$data['i_capacity'] : null;
        $this->i_wait = isset($data['i_wait']) ? (int)$data['i_wait'] : null;
    }
}
