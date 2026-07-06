<?php

namespace WlSdk\Wl\Book\Process;

/**
 * Response from POST
 */
class ProcessGroupPostResponse
{
    /**
     * Primary keys of users' activity that correspond to bookings made.
     *
     * @var string[]|null
     */
    public ?array $a_login_activity_book = null;

    /**
     * Primary keys of bookings made.
     *
     * @var string[]|null
     */
    public ?array $a_visit = null;

    /**
     * The key of the user's activity corresponding to the purchase made.
     * `null` if no purchase was made.
     *
     * @var string|null
     */
    public ?string $k_login_activity_purchase = null;

    public function __construct(array $data)
    {
        $this->a_login_activity_book = isset($data['a_login_activity_book']) ? (array)$data['a_login_activity_book'] : null;
        $this->a_visit = isset($data['a_visit']) ? (array)$data['a_visit'] : null;
        $this->k_login_activity_purchase = isset($data['k_login_activity_purchase']) ? (string)$data['k_login_activity_purchase'] : null;
    }
}
