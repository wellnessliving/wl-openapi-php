<?php

namespace WlSdk\Wl\Lead;

class LeadPostRequest
{
    /**
     * Whether it is possible to give free promotion when adding a user (only if free promotion is configured in
     * the widget).
     * `true` or `null` if it is possible, `false` if not.
     * `null` used for backward compatibility.
     *
     * @var bool|null
     */
    public ?bool $can_use_free_purchase = null;

    /**
     * This will be `true` if the API is being used from the backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * The key of business to which the new user must be captured.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the widget skin. If left empty, then the default skin is used.
     * This will be the Lead Capture widget skin with "Use this widget for the Add Lead form" selected.
     * If your business doesn't have a skin selected, this endpoint will default to the system-wide default,
     * which may lack fields your business requires when adding a lead or a client.
     *
     * @var string|null
     */
    public ?string $k_skin = null;

    /**
     * A list of fields containing the lead information.
     * The keys are the field keys and values are field values.
     *
     * If field key is `Address` field key, value may be an array or string.
     * Can be a string if only address field is used. Will be an array if city and postal code are used,
     * with the following keys:
     *
     * @var array[]|null
     */
    public ?array $a_field_data = null;

    /**
     * `true` if newly created lead should be automatically signed in, `false` otherwise.
     *
     * Lead will not be signed in if:
     * - email is used already for another existing user;
     * - different user is signed in already (can be changed with {@link \WlSdk\Wl\Lead\Lead}).
     *
     * If lead is not signed in, then {@link \WlSdk\Wl\Lead\Lead} will contain an error message.
     *
     * @var bool|null
     */
    public ?bool $is_sing_in = null;

    /**
     * `true` if newly created lead should be automatically signed in instead of the currently signed-in user,
     * `false` if currently singed-in user should not be signed out.
     * If lead is not signed in, then {@link \WlSdk\Wl\Lead\Lead} will contain an error message.
     *
     * @var bool|null
     */
    public ?bool $is_sing_in_force = null;

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
     * The characters entered by the lead for the captcha test.
     * This isn't necessary if the GET method returned an empty {@link \WlSdk\Wl\Lead\Lead}.
     * This field isn't necessary if the GET method returned an empty {@link \WlSdk\Wl\Lead\Lead}.
     *
     * @var string|null
     */
    public ?string $s_captcha = null;

    /**
     * Lead source title.
     *
     * A new lead source will be created if it does not exist.
     * Must be `null` if `k_lead_source` is set.
     * If both parameters are empty, the {@link \WlSdk\Wl\Mode\ModeSid} lead source will be used.
     *
     * @var string|null
     */
    public ?string $text_lead_source = null;

    public function params(): array
    {
        return array_filter(
            [
            'can_use_free_purchase' => $this->can_use_free_purchase,
            'is_backend' => $this->is_backend,
            'k_business' => $this->k_business,
            'k_skin' => $this->k_skin,
            'a_field_data' => $this->a_field_data,
            'is_sing_in' => $this->is_sing_in,
            'is_sing_in_force' => $this->is_sing_in_force,
            'k_lead_source' => $this->k_lead_source,
            's_captcha' => $this->s_captcha,
            'text_lead_source' => $this->text_lead_source,
            ],
            static fn ($v) => $v !== null
        );
    }
}
