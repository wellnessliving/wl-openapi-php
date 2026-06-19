<?php
namespace WlSdk\Thoth\WlPay\Form;

use WlSdk\WlSdkClient;

/**
 * Returns information about payment environment.
 */
class EnvironmentUserApi
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

    /**
     * The key of the business to retrieve payment information for.

This will be `0` if not set yet.
An empty string or `null` if payments are performed with the WellnessLiving system merchant.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the currency to retrieve payment information for.
     *
     * @var string|null
     */
    public ?string $k_currency = null;

    /**
     * The key of the location to retrieve payment information for.

This will be `0` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The user ID to retrieve payment information for.

`null` if not defined.
     *
     * @var string|null
     */
    public ?string $uid_owner = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about payment environment.
     *
     * Called before rendering a payment form to determine which payment methods and card types are available
     * for a given business and location, what surcharges apply, and how the form should behave (tip prompt,
     * optional card save). This endpoint is deprecated; use
     * [EnvironmentUserApi](/Thoth/WlPay/Form/EnvironmentUser.json)
     *  for new integrations.
     *
     * @return array Parsed JSON response data.
     *   - int[] a_card_system: A list of supported bank card systems.
Keys refer to card types based on card numbers (see [ACardSystemSid](#/components/schemas/ACardSystemSid)),
and values are IDs of card systems (one of [ACardSystemSid](#/components/schemas/ACardSystemSid) constants).
     *   - int[] a_method_staff: A list of payment methods enabled for staff members.
The ID is one of [RsPayMethodSid](#/components/schemas/RsPayMethodSid) constants.
The value is always `true`.
     *   - array[] a_method_support: No description.
     *   - array a_mobile_config: The configuration array that's sent to mobile card reader plugin.
The structure of this array depends on the payment processor being used.
`null` when mobile card readers are not supported, or when actor has no access to them.
     *   - array[] a_pay_processor: No description.
     *   - string dl_now: Current local date in current location [EnvironmentApi](/Thoth/WlPay/Form/Environment.json)
or business [EnvironmentApi](/Thoth/WlPay/Form/Environment.json) if not set location.
     *   - string f_surcharge: Surcharge amount for payment with card represented as a percent of transaction amount.

This will be `null` if the percentage surcharge amount shouldn't be withdrawn.
     *   - string f_surcharge_ach: Surcharge amount for payment with ACH represented as a percent of transaction amount.

This will be `null` if the percentage surcharge amount shouldn't be withdrawn.
     *   - int id_locale: The locale ID of the business.
     *   - bool is_save_optional: `true` if clients can choose whether their banking and credit card information is saved at checkout,
`false` if this information is always saved.
     *   - bool is_save_source: Determines whether newly added payment sources should be saved. This will be `true` if payment sources should be saved,
`false` if otherwise.
     *   - bool is_tip: Whether tips are accepted.
     *   - string m_surcharge: Surcharge amount for payment with card represented as a fixed amount.

This will be `null` if the fixed surcharge amount shouldn't be withdrawn.
     *   - string m_surcharge_ach: Surcharge amount for payment with ACH represented as a fixed amount.

This will be `null` if the fixed surcharge amount shouldn't be withdrawn.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Thoth/WlPay/Form/EnvironmentUser.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_currency' => $this->k_currency,
            'k_location' => $this->k_location,
            'uid_owner' => $this->uid_owner,
            ],
            static fn($v) => $v !== null
        );
    }
}
