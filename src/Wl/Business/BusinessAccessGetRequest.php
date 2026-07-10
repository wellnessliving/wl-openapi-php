<?php

namespace WlSdk\Wl\Business;

class BusinessAccessGetRequest
{
    /**
     * This will be `true` if the API is being used from the backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = true;

    /**
     * The staff member's Facebook ID. This won't be empty if the staff member is logging in with Facebook.
     * This will be empty if the UID is already known or the staff member is logging in another way.
     *
     * @var string|null
     */
    public ?string $s_facebook_id = null;

    /**
     * The staff member's Microsoft key.
     * This won't be empty if the staff member is logging in with Microsoft.
     *
     * @var string|null
     */
    public ?string $s_microsoft_id = null;

    /**
     * The staff member's Apple authorization code. This won't be empty if the staff member is logging in with
     * Apple.
     * This will be empty if the UID is already known or the staff member is logging in another way.
     *
     * @var string|null
     */
    public ?string $text_authorization_apple = null;

    /**
     * The Google Plus user ID. This won't be empty if the staff member is logging in with Google.
     * This will be empty if the UID is already known or the staff member is logging in another way.
     *
     * @var string|null
     */
    public ?string $text_google_plus = null;

    /**
     * The staff member's email to determine their UID. This won't be empty if the staff member is logging in with
     * email or with Google.
     * This will be empty if the UID is already known or the staff member is logging in another way.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * User key. Empty if user is not logged in, but their authorization data is known.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_backend' => $this->is_backend,
            's_facebook_id' => $this->s_facebook_id,
            's_microsoft_id' => $this->s_microsoft_id,
            'text_authorization_apple' => $this->text_authorization_apple,
            'text_google_plus' => $this->text_google_plus,
            'text_mail' => $this->text_mail,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
