<?php
namespace WlSdk\Wl\Video\Tag;

use WlSdk\WlSdkClient;

/**
 * Creates a new video tag.
 */
class TagApi
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
     * The video tag key.
     *
     * @var string|null
     */
    public ?string $k_video_tag = null;

    /**
     * The video tag title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * If `true`, confirmation is required to delete videos. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_delete_confirm = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates a new video tag.
     *
     * Adds a new content tag to the business video library for use when categorizing videos.
     * Requires backend access and an active video subscription with at least the basic plan.
     *
     * @return array Parsed JSON response data.
     *   - string k_video_tag: The video tag key.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Video/Tag/Tag.json', $this->params(), 'POST');
    }

    /**
     * Updates the specified video tag.
     *
     * Renames an existing content tag in the business video library. Requires backend access
     * and an active video subscription with at least the basic plan.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Wl/Video/Tag/Tag.json', $this->params(), 'PUT');
    }

    /**
     * Deletes the specified video tag.
     *
     * Permanently removes the video tag from the business library. If any videos are currently
     * assigned to this tag, a confirmation flag must be set; otherwise the API throws a
     * confirmation-required error so the caller can prompt the user before proceeding.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): array
    {
        return $this->client->request('/Wl/Video/Tag/Tag.json', $this->params(), 'DELETE');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_video_tag' => $this->k_video_tag,
            'text_title' => $this->text_title,
            'is_delete_confirm' => $this->is_delete_confirm,
            ],
            static fn($v) => $v !== null
        );
    }
}
