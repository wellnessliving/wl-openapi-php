<?php

namespace WlSdk\Wl\Profile\Setting\Delete;

/**
 * Response from POST
 */
class DeletePostResponse
{
    /**
     * Data about deletion result. Key is a user key, primary key in PassportLoginSql table.
     * Value is:
     *
     * @var DeletePostResponseDeleteResult[]|null
     */
    public ?array $a_delete_result = null;

    /**
     * List of reasons why account can not be deleted.
     *
     * @var DeletePostResponseErrorInfo[]|null
     */
    public ?array $a_error_info = null;

    /**
     * List of user keys that can be deleted.
     *
     * @var string[]|null
     */
    public ?array $a_uid_valid = null;

    public function __construct(array $data)
    {
        $this->a_delete_result = isset($data['a_delete_result']) ? array_map(static fn ($item) => new DeletePostResponseDeleteResult((array)$item), (array)$data['a_delete_result']) : null;
        $this->a_error_info = isset($data['a_error_info']) ? array_map(static fn ($item) => new DeletePostResponseErrorInfo((array)$item), (array)$data['a_error_info']) : null;
        $this->a_uid_valid = isset($data['a_uid_valid']) ? (array)$data['a_uid_valid'] : null;
    }
}
