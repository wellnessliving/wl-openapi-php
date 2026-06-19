<?php
namespace WlSdk\Wl\Gym\Visit;

use WlSdk\WlSdkClient;

/**
 * Records a gym visit for the specified client at the given date and time.
 */
class VisitAddApi
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
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the user making the gym visit.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_time = null;

    /**
     * The date of visit, without a time component in MySQL format. Date is based on the timezone of the location.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Determines whether payment is required for the visit.

`true` if payment is needed for the visit.
`false` if visit should be not pay.
     *
     * @var bool|null
     */
    public ?bool $is_pay = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Records a gym visit for the specified client at the given date and time.
     *
     * Validates access and input, creates a visit record for the client at the specified location, optionally
     * applies a membership promotion if payment is required, and returns the catalog URL if no promotion was
     * found and payment was requested.
     *
     * @return array Parsed JSON response data.
     *   - string url_catalog: Url to the business catalog with items that can be used to pay for the visit.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Gym/Visit/VisitAdd.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            'a_time' => $this->a_time,
            'dt_date' => $this->dt_date,
            'is_pay' => $this->is_pay,
            ],
            static fn($v) => $v !== null
        );
    }
}
