<?php

namespace WlSdk\Wl\Staff\Passkey;

class PasskeyListGetResponseStaffPasskey
{
    /**
     * Date and time when the passkey was registered.
     *
     * @var string|null
     */
    public ?string $dtu_create = null;

    /**
     * Date and time when the passkey was last used to sign in, or `null` if it was never used.
     *
     * @var string|null
     */
    public ?string $dtu_last_use = null;

    /**
     * Passkey key.
     *
     * @var string|null
     */
    public ?string $k_passkey_credential = null;

    /**
     * Name of the passkey.
     *
     * @var string|null
     */
    public ?string $text_device = null;

    public function __construct(array $data)
    {
        $this->dtu_create = isset($data['dtu_create']) ? (string)$data['dtu_create'] : null;
        $this->dtu_last_use = isset($data['dtu_last_use']) ? (string)$data['dtu_last_use'] : null;
        $this->k_passkey_credential = isset($data['k_passkey_credential']) ? (string)$data['k_passkey_credential'] : null;
        $this->text_device = isset($data['text_device']) ? (string)$data['text_device'] : null;
    }
}
