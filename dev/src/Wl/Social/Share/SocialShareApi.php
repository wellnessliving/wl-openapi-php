<?php
namespace WlSdk\Wl\Social\Share;

use WlSdk\WlSdkClient;

/**
 * Saves the share post data and returns the secret key for the shared object.
 */
class SocialShareApi
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
     * The primary keys of the shared objects. Depends on `id_share_object`.
If `id_share_object` is:
* [ShareObjectSid::BOOK](#/components/schemas/Wl.Social.Share.ShareObjectSid) - each value is key of the visit. 
* [ShareObjectSid::LOCATION](#/components/schemas/Wl.Social.Share.ShareObjectSid) - each value is key of the location. 
* [ShareObjectSid::PURCHASE](#/components/schemas/Wl.Social.Share.ShareObjectSid) - each value is key of the purchase. 
* [ShareObjectSid::REVIEW](#/components/schemas/Wl.Social.Share.ShareObjectSid) - each value is key of the review.
     *
     * @var int[]|null
     */
    public ?array $a_key = null;

    /**
     * The id of the social network.
     *
     * @var int|null
     */
    public ?int $id_share_destination = null;

    /**
     * The id of type object for share post to social network.
     *
     * @var int|null
     */
    public ?int $id_share_object = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves the share post data and returns the secret key for the shared object.
     *
     * Records that the user has shared the specified objects (purchases, bookings, locations, or
     * reviews) to a social network, and returns a secret token that can be appended to the
     * destination URL to deep-link directly to the shared items.
     *
     * @return array Parsed JSON response data.
     *   - string s_secret: Secret key for access shared object.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Social/Share/SocialShare.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_key' => $this->a_key,
            'id_share_destination' => $this->id_share_destination,
            'id_share_object' => $this->id_share_object,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
