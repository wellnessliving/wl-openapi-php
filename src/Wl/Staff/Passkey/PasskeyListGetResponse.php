<?php

namespace WlSdk\Wl\Staff\Passkey;

/**
 * Response from GET
 */
class PasskeyListGetResponse
{
    /**
     * Active staff members of the business who have at least one active passkey, sorted by name.
     *
     * @var PasskeyListGetResponseStaff[]|null
     */
    public ?array $a_staff = null;

    public function __construct(array $data)
    {
        $this->a_staff = isset($data['a_staff']) ? array_map(static fn ($item) => new PasskeyListGetResponseStaff((array)$item), (array)$data['a_staff']) : null;
    }
}
