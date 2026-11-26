<?php

namespace WlSdk\Wl\Login\Agree;

class AgreePostRequest
{
    /**
     * The key of business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The user's key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * `false` if the user has not agreed to use Electronic Signatures,
     * `true` if the user has agreed to use Electronic Signatures,
     * `null` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_agree = null;

    /**
     * The base64-encoded user's signature image from the signature pad as a PNG file.
     *
     * @var string|null
     */
    public ?string $s_signature = null;

    /**
     * Key of the main contact who signs the waiver for the user.
     *
     * Read only when the current user is neither the user nor a relative of the user (a staff member or an
     * administrator signs the waiver at the kiosk). Must be a relative of the user in the business. `null` or an
     * empty
     * value to record no signer. When the current user is a relative of the user, the current user is recorded as
     * the
     * signer, and this value is ignored.
     *
     * @var string|null
     */
    public ?string $uid_sign = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'is_agree' => $this->is_agree,
            's_signature' => $this->s_signature,
            'uid_sign' => $this->uid_sign,
            ],
            static fn ($v) => $v !== null
        );
    }
}
