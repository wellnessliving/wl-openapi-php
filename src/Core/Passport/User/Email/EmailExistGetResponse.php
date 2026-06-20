<?php
namespace WlSdk\Core\Passport\User\Email;

/**
 * Response from GET
 */
class EmailExistGetResponse
{
    /**
     * Determines whether the email address exists.
     *
     * @var bool|null
     */
    public ?bool $is_exist = null;

    public function __construct(array $data)
    {
        $this->is_exist = isset($data['is_exist']) ? (bool)$data['is_exist'] : null;
    }
}
