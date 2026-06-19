<?php
namespace WlSdk\Wl\Reception\Design;

use WlSdk\WlSdkClient;

/**
 * Returns information about settings for Check In Web Application.
 */
class ReceptionDesignApi
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
     * Key of the business, where application is run.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the location, where application is run.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about settings for Check In Web Application.
     *
     * This method does not require any access checks, because this is public information.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_reception_logo: No description.
     *   - bool hide_profile_images: `true` - client profile images will be hidden after the client signs in on the Check-in Kiosk;
`false` - otherwise.
     *   - int i_book_open: Number of minutes for the client check-in window after session has started.
     *   - int i_confirm_delay: Delay in seconds on Check-in Confirmation Screen before redirect to Login screen.
     *   - int i_schedule_delay: Delay in seconds on Schedule Screen before redirect to Login screen.
     *   - int id_failed_sound: ID of the sound for failed check in.
     *   - int id_success_sound: ID of the sound for successful check in.
     *   - bool is_attend_free: `true` - allow client to check-in unpaid;
`false` - otherwise.
     *   - bool is_auto_check_in: If only one service available with the look ahead window the client will:
`true` - automatically check in to it; `false` - have to select the service.
     *   - bool is_book_open: `true` - allow clients to check-in to sessions in progress;
`false` - otherwise.
     *   - bool is_book_optional: `true` - allow client check-in without booking prior;
`false` - otherwise.
     *   - bool is_client_id: `true` - enable check-in by client id;
`false` - otherwise.
     *   - bool is_mail: `true` - enable check-in by email;
`false` - otherwise.
     *   - bool is_password: `true` - require password while check-in;
`false` - otherwise.
     *   - bool is_phone: `true` - enable check-in by phone;
`false` - otherwise.
     *   - bool is_reconcile_auto: `true` - automatically reconcile unpaid visits upon check in;
`false` - otherwise.
     *   - bool show_business_name: `true` - show business name on client self check-in page;
`false` - otherwise.
     *   - bool show_confirm_screen: `true` - show confirm screen after client self check-in;
`false` - otherwise.
     *   - string text_business_name: Name of the business to display on the client self check-in page.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Reception/Design/ReceptionDesign.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            ],
            static fn($v) => $v !== null
        );
    }
}
