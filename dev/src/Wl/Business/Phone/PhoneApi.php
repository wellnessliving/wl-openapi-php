<?php
namespace WlSdk\Wl\Business\Phone;

use WlSdk\WlSdkClient;

/**
 * Returns phone number(in locale format) of the business, if phone number does not exist returns empty line.
 */
class PhoneApi
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
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Business phone number(in locale format).
Used to receive SMS notifications from clients. Can be `null` during bundle SID saving.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns phone number(in locale format) of the business, if phone number does not exist returns empty line.
     *
     * Used in the SMS settings UI to display the currently registered business phone number and its input
     * mask. The locale is derived from the business's office country so the number is formatted correctly
     * for that region.
     *
     * @return array Parsed JSON response data.
     *   - int id_locale: Locale corresponding to the business' address country. One of [LocaleSid](#/components/schemas/Core.Locale.LocaleSid) constants.
Note that this may not be the same as the business' locale, if the business is misconfigured and has an address
country that is outside its locale.
     *   - string text_phone: Business phone number(in locale format).
Used to receive SMS notifications from clients. Can be `null` during bundle SID saving.
     *   - string text_phone_mask: Business phone number mask.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Business/Phone/Phone.json', $this->params(), 'GET');
    }

    /**
     * Registers business phone number in system.
     *
     * Used when a business enables SMS messaging for the first time or replaces an existing number.
     * Provisions a messaging service with the SMS provider so the business can receive inbound client
     * messages. If the same number is already registered for this business, the call is a no-op.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Business/Phone/Phone.json', $this->params(), 'POST');
    }

    /**
     * Deletes business phone number from the system.
     *
     * Used by WellnessLiving admins to decommission a business's SMS messaging service. After deletion,
     * the business can no longer receive inbound SMS notifications. Admin privileges are required.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): array
    {
        return $this->client->request('/Wl/Business/Phone/Phone.json', $this->params(), 'DELETE');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'text_phone' => $this->text_phone,
            ],
            static fn($v) => $v !== null
        );
    }
}
