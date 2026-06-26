<?php

namespace WlSdk\Wl\Profile\Setting\Delete;

/**
 * Response from GET
 */
class DeleteGetResponse
{
    /**
     * List of reasons why account can not be deleted.
     *
     * @var DeleteGetResponseErrorInfo[]|null
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
        $this->a_error_info = isset($data['a_error_info']) ? array_map(static fn ($item) => new DeleteGetResponseErrorInfo((array)$item), (array)$data['a_error_info']) : null;
        $this->a_uid_valid = isset($data['a_uid_valid']) ? (array)$data['a_uid_valid'] : null;
    }
}
