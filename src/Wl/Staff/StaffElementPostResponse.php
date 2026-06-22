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
     * This property is populated from [StaffElementApi](/Wl/Staff/StaffElement.json) in `post()` and
     * returned in API result for compatibility.
     *
     * Passing `k_staff` in request payload is not supported and causes an error.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    public function __construct(array $data)
    {
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
    }
}
