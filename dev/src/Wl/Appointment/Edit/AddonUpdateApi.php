<?php
namespace WlSdk\Wl\Appointment\Edit;

use WlSdk\WlSdkClient;

/**
 * Return data about appointment's add-ons.
 */
class AddonUpdateApi
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
     * List of user keys to get add-ons for. Not empty only when getting add-ons for new appointment
(`k_appointment` is null). User key '-1' means walk-in, user key '0' means new user
(user will be created together with appointment).
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * The appointment key.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * The business key. This will be an empty string if not set yet.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location key.
Not empty only when getting add-ons for new appointment (`k_appointment` is null).
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Service key.
Not empty only when getting add-ons for new appointment (`k_appointment` is null).
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * No description.
     *
     * @var array|null
     */
    public ?array $a_addon = null;

    /**
     * Determines whether the appointment duration needs to be updated.
     *
     * @var bool|null
     */
    public ?bool $is_duration_update = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Return data about appointment's add-ons.
     *
     * Returns the current list of add-ons attached to the specified appointment along with the full
     *  catalog of available add-ons for the service. The caller must have view access to the appointment.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_addon_data: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Appointment/Edit/AddonUpdate.json', $this->params(), 'GET');
    }

    /**
     * Replaces the add-ons for the appointment with the provided list, optionally updating the appointment duration.
     *
     * Removes all existing add-ons from the appointment and attaches the provided set in their place.
     *  When add-ons with a duration are included, the appointment end time is recalculated accordingly.
     *  The operation runs inside a database transaction to ensure consistency.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Wl/Appointment/Edit/AddonUpdate.json', $this->params(), 'PUT');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_uid' => $this->a_uid,
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_service' => $this->k_service,
            'a_addon' => $this->a_addon,
            'is_duration_update' => $this->is_duration_update,
            ],
            static fn($v) => $v !== null
        );
    }
}
