<?php

namespace WlSdk\Wl\Lead;

/**
 * Response from POST
 */
class LeadPostResponse
{
    /**
     * Key of the lead source.
     *
     * Must be `null` if `text_lead_source` is set.
     * If both parameters are empty, the {@link \WlSdk\Wl\Mode\ModeSid} lead source will be used.
     *
     * `LEAD_SOURCE_REPLACE_NONE` if Lead Source is to be unselected for the user.
     *
     * @var string|null
     */
    public ?string $k_lead_source = null;

    /**
     * An error code if the lead is not signed in after creation.
     * This field is filled in the POST method.
     *
     * Possible values:
     * - `email-exists` - the email is already used by another lead;
     * - `different-user` - another user is signed in already.
     *
     * @var string|null
     */
    public ?string $text_sign_in_error = null;

    /**
     * The key of the new user.
     *
     * Typing is not added because the variable is an integer.
     * Specifying typing may break third party integration.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->k_lead_source = isset($data['k_lead_source']) ? (string)$data['k_lead_source'] : null;
        $this->text_sign_in_error = isset($data['text_sign_in_error']) ? (string)$data['text_sign_in_error'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
