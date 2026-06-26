<?php

namespace WlSdk\Wl\Business\Sms\Chat\Staff;

class SmsChatStaffAssignGetRequest
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

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid_client' => $this->uid_client,
            ],
            static fn ($v) => $v !== null
        );
    }
}
