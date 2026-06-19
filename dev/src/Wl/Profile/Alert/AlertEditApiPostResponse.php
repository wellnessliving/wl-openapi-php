<?php
namespace WlSdk\Wl\Profile\Alert;

/**
 * Response from POST
 */
class AlertEditApiPostResponse
{
    /**
     * Login note key to edit or get info for.
     * Empty if new entry is being added.
     *
     * @var string|null
     */
    public ?string $k_login_note = null;

    public function __construct(array $data)
    {
        $this->k_login_note = isset($data['k_login_note']) ? (string)$data['k_login_note'] : null;
    }
}
