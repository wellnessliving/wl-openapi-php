<?php

namespace WlSdk\Core\Passport\Passkey;

class PasskeyCredentialGetResponseCredential
{
    /**
     * Date and time when this credential was registered.
     *
     * @var string|null
     */
    public ?string $dtu_create = null;

    /**
     * Date and time when this credential was last used to sign in, or `null` if never used.
     *
     * @var string|null
     */
    public ?string $dtu_last_use = null;

    /**
     * One of {@link \WlSdk\Core\Passport\Passkey\PasskeyDeviceTypeEnum} values.
     *
     * @var int|null
     * @see \WlSdk\Core\Passport\Passkey\PasskeyDeviceTypeEnum
     */
    public ?int $id_device_type = null;

    /**
     * One of {@link \WlSdk\Core\Passport\Passkey\PasskeyCredentialStatusEnum} values.
     *
     * @var int|null
     * @see \WlSdk\Core\Passport\Passkey\PasskeyCredentialStatusEnum
     */
    public ?int $id_status = null;

    /**
     * `true` if the credential is currently backed up.
     *
     * @var bool|null
     */
    public ?bool $is_backed_up = null;

    /**
     * Credential key.
     *
     * @var string|null
     */
    public ?string $k_passkey_credential = null;

    /**
     * `WebAuthn` credential ID, base64url encoded without padding. Clients pass it to the signal methods of
     *  `WebAuthn` (for example `PublicKeyCredential.signalUnknownCredential()`) after the credential is revoked,
     *  so the device deletes its copy of the passkey.
     *
     * @var string|null
     */
    public ?string $s_credential_id = null;

    /**
     * `WebAuthn` user handle (`user.id`) stored with the passkey on the device, base64url encoded without padding.
     *  The same for every credential of the user.
     *
     * @var string|null
     */
    public ?string $s_user_handle = null;

    /**
     * Name of this credential, assigned at registration and changed by `put()`.
     *
     * @var string|null
     */
    public ?string $text_device = null;

    public function __construct(array $data)
    {
        $this->dtu_create = isset($data['dtu_create']) ? (string)$data['dtu_create'] : null;
        $this->dtu_last_use = isset($data['dtu_last_use']) ? (string)$data['dtu_last_use'] : null;
        $this->id_device_type = isset($data['id_device_type']) ? (int)$data['id_device_type'] : null;
        $this->id_status = isset($data['id_status']) ? (int)$data['id_status'] : null;
        $this->is_backed_up = isset($data['is_backed_up']) ? (bool)$data['is_backed_up'] : null;
        $this->k_passkey_credential = isset($data['k_passkey_credential']) ? (string)$data['k_passkey_credential'] : null;
        $this->s_credential_id = isset($data['s_credential_id']) ? (string)$data['s_credential_id'] : null;
        $this->s_user_handle = isset($data['s_user_handle']) ? (string)$data['s_user_handle'] : null;
        $this->text_device = isset($data['text_device']) ? (string)$data['text_device'] : null;
    }
}
