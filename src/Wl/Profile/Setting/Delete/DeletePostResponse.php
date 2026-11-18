<?php

namespace WlSdk\Wl\Profile\Setting\Delete;

/**
 * Response from POST
 */
class DeletePostResponse
{
    /**
     * The result of the deletion for every user.
     *
     * The key is a user key.  The value is:
     *
     * @var array|null
     */
    public ?array $a_delete_result = null;

    /**
     * The reasons why the account cannot be deleted, for every user.
     *
     * The key is a user key.  The value is:
     *
     * @var array|null
     */
    public ?array $a_error_info = null;

    /**
     * The keys of the users from {@link \WlSdk\Wl\Profile\Setting\Delete\Delete} that can be deleted.
     *
     * @var string[]|null
     */
    public ?array $a_uid_valid = null;

    public function __construct(array $data)
    {
        $this->a_delete_result = isset($data['a_delete_result']) ? (array)$data['a_delete_result'] : null;
        $this->a_error_info = isset($data['a_error_info']) ? (array)$data['a_error_info'] : null;
        $this->a_uid_valid = isset($data['a_uid_valid']) ? (array)$data['a_uid_valid'] : null;
    }
}
