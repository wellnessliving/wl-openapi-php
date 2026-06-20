<?php
namespace WlSdk\Wl\Profile\Edit\Email;

/**
 * Response from POST
 */
class EditEmail67PostResponse
{
    /**
     * Shows, whether client was registered in the business: `true` if user was added to the business,
     * `false` if staff only received temporary access, because mandatory fields must be specified first.
     *
     * @var bool|null
     */
    public ?bool $is_added = null;

    public function __construct(array $data)
    {
        $this->is_added = isset($data['is_added']) ? (bool)$data['is_added'] : null;
    }
}
