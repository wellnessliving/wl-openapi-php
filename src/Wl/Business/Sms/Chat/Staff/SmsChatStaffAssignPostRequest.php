<?php

namespace WlSdk\Wl\Business\Sms\Chat\Staff;

class SmsChatStaffAssignPostRequest
{
    /**
     * Business key.
     * Primary key in RsBusinessSql table.
     * `null` if not specified, will throw an exception.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * UID of the client with which selected dialog.
     * Primary key in PassportLoginSql table.
     * `null` if not specified, will throw an exception.
     *
     * @var string|null
     */
    public ?string $uid_client = null;

    /**
     * User staff Key assigned to chat of client.
     * Primary key in PassportLoginSql table.
     * `null` if staff unassigned.
     *
     * @var string|null
     */
    public ?string $uid_staff_assign = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid_client' => $this->uid_client,
            'uid_staff_assign' => $this->uid_staff_assign,
            ],
            static fn ($v) => $v !== null
        );
    }
}
