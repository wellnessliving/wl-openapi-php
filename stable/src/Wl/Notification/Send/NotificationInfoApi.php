<?php
namespace WlSdk\Wl\Notification\Send;

use WlSdk\WlSdkClient;

/**
 * Returns configuration information about the specified notification for the given business.
 */
class NotificationInfoApi
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
     * ID of the notification. See [RsMailSid](#/components/schemas/RsMailSid).
     *
     * @var int|null
     */
    public ?int $id_notification = null;

    /**
     * Key of the business where information about notification should be retrieved.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns configuration information about the specified notification for the given business.
     *
     * Validates the business key and notification ID, then returns the notification configuration including
     * mail template settings and channel availability for the given business. Requires the `rs.profile` privilege.
     *
     * @return array Parsed JSON response data.
     *   - array a_info: Information about mail.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Notification/Send/NotificationInfo.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'id_notification' => $this->id_notification,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
