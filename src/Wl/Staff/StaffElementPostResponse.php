<?php

namespace WlSdk\Wl\Staff;

/**
 * Response from POST
 */
class StaffElementPostResponse
{
    /**
     * The key of the staff member resolved and used internally by this API.
     *
     * This property is populated from {@link \WlSdk\Wl\Staff\StaffElementPostResponse::$uid_staff} in `post()` and
     * returned in API result for compatibility.
     *
     * Passing `k_staff` in request payload is not supported and causes an error.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * User key of a staff member.
     *
     * This is the supported request identifier for staff update operations.
     * Value is normalized into {@link \WlSdk\Wl\Staff\StaffElementPostResponse::$k_staff} in `post()`.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function __construct(array $data)
    {
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
    }
}
