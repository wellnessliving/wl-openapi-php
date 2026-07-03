<?php

namespace WlSdk\Wl\Session;

/**
 * Response from GET
 */
class EnvironmentGetResponse
{
    /**
     * List of businesses which are available in given application.
     * `null` for default application.
     *
     * @var string[]|null
     */
    public ?array $a_business = null;

    /**
     * List of businesses keys, which are connected to franchise.
     * `null` if current business is not part of franchise.
     *
     * @var string[]|null
     */
    public ?array $a_business_franchise_all = null;

    /**
     * List of business franchisee keys.
     * Can be limited by levels to which a user can view/access in frontend. See {@link
     * \WlSdk\Wl\Business\Franchise\FranchiseSwitchSid}.
     * `null` if current business is not part of franchise or if 'Allow clients to switch between franchise
     * locations' is OFF.
     *
     * @var string[]|null
     */
    public ?array $a_business_franchisee = null;

    /**
     * Payment alert data. `null` if user is not logged or none businesses are available for user, or if it's not
     * backend.
     * Otherwise, contains data:
     *
     * @var EnvironmentGetResponsePaymentAlert|null
     */
    public ?EnvironmentGetResponsePaymentAlert $a_payment_alert = null;

    /**
     * Settings of splash screen customization for business:
     *
     *
     * `null` if splash screen in not customized for business.
     *
     * @var EnvironmentGetResponseSplashScreen|null
     */
    public ?EnvironmentGetResponseSplashScreen $a_splash_screen = null;

    /**
     * Local date with time now in current location [EnvironmentApi](/Wl/Session/Environment.json).
     *
     * @var string|null
     */
    public ?string $dtl_now = null;

    /**
     * Whether exists form to confirm during registration process.
     *
     * @var bool|null
     */
    public ?bool $has_form_quiz = null;

    /**
     * Whether the merchant is configured for the client's home location or for business
     * [EnvironmentApi](/Wl/Session/Environment.json).
     *
     * @var bool|null
     */
    public ?bool $has_merchant = null;

    /**
     * Currency ID. One of {@link \WlSdk\RsCurrencySid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsCurrencySid
     */
    public ?int $id_currency = null;

    /**
     * Business locale. One of {@link \WlSdk\Core\Locale\LocaleSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Core\Locale\LocaleSid
     */
    public ?int $id_locale = null;

    /**
     * Current place ID. One of {@link \WlSdk\RsPlaceSid} constants. For the Application is determined by the
     * template. For the Web version of the site is determined by the current session.
     *
     * @var int|null
     * @see \WlSdk\RsPlaceSid
     */
    public ?int $id_place = null;

    /**
     * Achieve subscription plan ID.
     *
     * One of {@link \WlSdk\Wl\Business\Account\Subscription\Achieve\AchieveSubscriptionSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\Subscription\Achieve\AchieveSubscriptionSid
     */
    public ?int $id_plan_achieve = null;

    /**
     * Base subscription plan ID.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\Subscription\Base\BaseSubscriptionSid
     */
    public ?int $id_plan_base = null;

    /**
     * Marketing subscription plan ID.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\Subscription\MarketingSuite\MarketingSuiteSubscriptionSid
     */
    public ?int $id_plan_marketing = null;

    /**
     * Current travel mode ID in business.
     *
     * `null` if travel mode is disabled.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Franchise\Travel\TravelModeSid
     */
    public ?int $id_travel_mode = null;

    /**
     * Whether AI agent chat (CAASI) is available for current business.
     * * `true` if chat is available
     * * `false` if chat is not available
     *
     * @var bool|null
     */
    public ?bool $is_aiagent_chat = null;

    /**
     * Determines current business has custom application. If `true` application has custom application, `false`
     * otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_application_custom = null;

    /**
     * `true` if user must be redirected to billing page to enter credit card; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_billing_required = null;

    /**
     * `true` if clients must sign in to book an appointment; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_booking_appointment_authorize = null;

    /**
     * `true` if user must be redirected from booking page to billing page to enter credit card;
     *   `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_booking_required_billing = null;

    /**
     * Determines if a business has multiple locations.
     *
     * @var bool|null
     */
    public ?bool $is_business_location_multiple = null;

    /**
     * `true` id profile details can be shared with the new location while adding a client that already has an
     * existing
     *   profile in franchise, `false` - otherwise.
     *
     * * `null` if not franchise.
     *
     * @var bool|null
     */
    public ?bool $is_client_profile_share = null;

    /**
     * If clients are allowed to select a date and time, then the available asset while asset booking.
     *
     * @var bool|null
     */
    public ?bool $is_client_select_date_asset = null;

    /**
     * `true` - user has unassigned contract(s); `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_contract = null;

    /**
     * `true` is allowed relationship to display, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_family_relation_display_client = null;

    /**
     * `true` - if business is franchisor; `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_franchisor = null;

    /**
     * `true` to use page of geographical search of locations (possible for franchise case only); `false` to use
     * simple select of locations from list.
     *
     * @var bool|null
     */
    public ?bool $is_location_geo = null;

    /**
     * `true` - in backend application user must be redirected to location selection; `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_location_redirect = null;

    /**
     * `true` if user must be redirected to profile page to enter mandatory fields; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_profile_required = null;

    /**
     * Indicates whether to obtain customer required information such as required profile data and waiver. Mostly
     * used for selenium tests running purposes to avoid creating profile filled with required
     * information. If `true` all required information must be obtained before client will be allowed to use
     * application, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_request_required_information = null;

    /**
     * `true` if user is traveler; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_traveller = null;

    /**
     * `true` if it is required to sign online waiver, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_waiver_required = null;

    /**
     * Key of business to be set as current.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Not `null` for franchise application only.
     *
     * @var string|null
     */
    public ?string $k_business_franchisor = null;

    /**
     * Currency key.
     *
     * @var string|null
     */
    public ?string $k_currency = null;

    /**
     * Key of location to be set as current.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Country code for business locale {@link \WlSdk\Core\Locale\LocaleSid} constants.
     *
     * @var string|null
     */
    public ?string $text_country_code = null;

    /**
     * Current user key. `null` if user is not signed in.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Business login URL.
     *
     * `null` if user is not logged in or none businesses are available for user.
     *
     * @var string|null
     */
    public ?string $url_login = null;

    public function __construct(array $data)
    {
        $this->a_business = isset($data['a_business']) ? (array)$data['a_business'] : null;
        $this->a_business_franchise_all = isset($data['a_business_franchise_all']) ? (array)$data['a_business_franchise_all'] : null;
        $this->a_business_franchisee = isset($data['a_business_franchisee']) ? (array)$data['a_business_franchisee'] : null;
        $this->a_payment_alert = isset($data['a_payment_alert']) ? new EnvironmentGetResponsePaymentAlert((array)$data['a_payment_alert']) : null;
        $this->a_splash_screen = isset($data['a_splash_screen']) ? new EnvironmentGetResponseSplashScreen((array)$data['a_splash_screen']) : null;
        $this->dtl_now = isset($data['dtl_now']) ? (string)$data['dtl_now'] : null;
        $this->has_form_quiz = isset($data['has_form_quiz']) ? (bool)$data['has_form_quiz'] : null;
        $this->has_merchant = isset($data['has_merchant']) ? (bool)$data['has_merchant'] : null;
        $this->id_currency = isset($data['id_currency']) ? (int)$data['id_currency'] : null;
        $this->id_locale = isset($data['id_locale']) ? (int)$data['id_locale'] : null;
        $this->id_place = isset($data['id_place']) ? (int)$data['id_place'] : null;
        $this->id_plan_achieve = isset($data['id_plan_achieve']) ? (int)$data['id_plan_achieve'] : null;
        $this->id_plan_base = isset($data['id_plan_base']) ? (int)$data['id_plan_base'] : null;
        $this->id_plan_marketing = isset($data['id_plan_marketing']) ? (int)$data['id_plan_marketing'] : null;
        $this->id_travel_mode = isset($data['id_travel_mode']) ? (int)$data['id_travel_mode'] : null;
        $this->is_aiagent_chat = isset($data['is_aiagent_chat']) ? (bool)$data['is_aiagent_chat'] : null;
        $this->is_application_custom = isset($data['is_application_custom']) ? (bool)$data['is_application_custom'] : null;
        $this->is_billing_required = isset($data['is_billing_required']) ? (bool)$data['is_billing_required'] : null;
        $this->is_booking_appointment_authorize = isset($data['is_booking_appointment_authorize']) ? (bool)$data['is_booking_appointment_authorize'] : null;
        $this->is_booking_required_billing = isset($data['is_booking_required_billing']) ? (bool)$data['is_booking_required_billing'] : null;
        $this->is_business_location_multiple = isset($data['is_business_location_multiple']) ? (bool)$data['is_business_location_multiple'] : null;
        $this->is_client_profile_share = isset($data['is_client_profile_share']) ? (bool)$data['is_client_profile_share'] : null;
        $this->is_client_select_date_asset = isset($data['is_client_select_date_asset']) ? (bool)$data['is_client_select_date_asset'] : null;
        $this->is_contract = isset($data['is_contract']) ? (bool)$data['is_contract'] : null;
        $this->is_family_relation_display_client = isset($data['is_family_relation_display_client']) ? (bool)$data['is_family_relation_display_client'] : null;
        $this->is_franchisor = isset($data['is_franchisor']) ? (bool)$data['is_franchisor'] : null;
        $this->is_location_geo = isset($data['is_location_geo']) ? (bool)$data['is_location_geo'] : null;
        $this->is_location_redirect = isset($data['is_location_redirect']) ? (bool)$data['is_location_redirect'] : null;
        $this->is_profile_required = isset($data['is_profile_required']) ? (bool)$data['is_profile_required'] : null;
        $this->is_request_required_information = isset($data['is_request_required_information']) ? (bool)$data['is_request_required_information'] : null;
        $this->is_traveller = isset($data['is_traveller']) ? (bool)$data['is_traveller'] : null;
        $this->is_waiver_required = isset($data['is_waiver_required']) ? (bool)$data['is_waiver_required'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_business_franchisor = isset($data['k_business_franchisor']) ? (string)$data['k_business_franchisor'] : null;
        $this->k_currency = isset($data['k_currency']) ? (string)$data['k_currency'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->text_country_code = isset($data['text_country_code']) ? (string)$data['text_country_code'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_login = isset($data['url_login']) ? (string)$data['url_login'] : null;
    }
}
