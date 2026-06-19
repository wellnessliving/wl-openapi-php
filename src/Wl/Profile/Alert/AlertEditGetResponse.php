<?php
namespace WlSdk\Wl\Profile\Alert;

/**
 * Response from GET
 */
class AlertEditGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_login_note_data = null;

    public function __construct(array $data)
    {
        $this->a_login_note_data = isset($data['a_login_note_data']) ? (array)$data['a_login_note_data'] : null;
    }
}
