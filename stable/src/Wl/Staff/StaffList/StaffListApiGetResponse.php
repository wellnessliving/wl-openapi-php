<?php
namespace WlSdk\Wl\Staff\StaffList;

/**
 * Response from GET
 */
class StaffListApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_staff = null;

    public function __construct(array $data)
    {
        $this->a_staff = isset($data['a_staff']) ? (array)$data['a_staff'] : null;
    }
}
