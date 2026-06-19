<?php
namespace WlSdk\Wl\Business\User\Subscribe;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about if user is subscribed on specified business or not.
 */
class SubscribeApi
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
     * The business key used for users to subscribe, unsubscribe, and receive information about the status of the subscription.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user whose subscription status needs to be checked or switched to subscribed/unsubscribed.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Information about the user`s subscription.

When getting information, `true` indicates the user has an email subscription in the business (`false` otherwise).

When changing a subscription, `true` subscribes the user in the business. `false` unsubscribes the user in the business.

This will be `null` if not set yet.
     *
     * @var bool|null
     */
    public ?bool $is_subscribe = null;

    /**
     * Information about the user`s subscription.

When getting information, `true` indicates the user has an SMS subscription in the business (`false` otherwise).

When changing a subscription, `true` subscribes the user in the business. `false1 unsubscribes the user in the business.

This will be `null` if not set yet.
     *
     * @var bool|null
     */
    public ?bool $is_subscribe_sms = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about if user is subscribed on specified business or not.
     *
     * Used to pre-populate the notification preferences toggle in a client's profile page. Shows whether
     * the client has opted in to email and SMS communications from the business.
     *
     * @return array Parsed JSON response data.
     *   - bool is_subscribe: Information about the user`s subscription.

When getting information, `true` indicates the user has an email subscription in the business (`false` otherwise).

When changing a subscription, `true` subscribes the user in the business. `false` unsubscribes the user in the business.

This will be `null` if not set yet.
     *   - bool is_subscribe_sms: Information about the user`s subscription.

When getting information, `true` indicates the user has an SMS subscription in the business (`false` otherwise).

When changing a subscription, `true` subscribes the user in the business. `false1 unsubscribes the user in the business.

This will be `null` if not set yet.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Business/User/Subscribe/Subscribe.json', $this->params(), 'GET');
    }

    /**
     * Subscribes or unsubscribes user on specified business.
     *
     * Called when a client changes their notification preferences. Controls whether the business can
     * contact the client by email and by SMS.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Wl/Business/User/Subscribe/Subscribe.json', $this->params(), 'PUT');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'is_subscribe' => $this->is_subscribe,
            'is_subscribe_sms' => $this->is_subscribe_sms,
            ],
            static fn($v) => $v !== null
        );
    }
}
