<?php
namespace WlSdk\Wl\Profile\Alert;

/**
 * Response from GET
 */
class AlertEditGetResponse
{
    /**
     * Login note information.
     *
     * @var AlertEditGetResponseLoginNoteData|null
     */
    public ?AlertEditGetResponseLoginNoteData $a_login_note_data = null;

    public function __construct(array $data)
    {
        $this->a_login_note_data = isset($data['a_login_note_data']) ? new AlertEditGetResponseLoginNoteData((array)$data['a_login_note_data']) : null;
    }
}
