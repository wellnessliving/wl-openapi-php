<?php
namespace WlSdk\Wl\Video\Level;

use WlSdk\WlSdkClient;

/**
 * Creates a new video level.
 */
class LevelApi
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
     * The video level key.
     *
     * @var string|null
     */
    public ?string $k_video_level = null;

    /**
     * The video level title.
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
     * Creates a new video level.
     *
     * Creates a difficulty level entry for the business video library. The new level is appended
     * at the end of the current sort order and can be reordered afterwards using
     * `put()`. Requires backend access with the video library management privilege.
     *
     * @return array Parsed JSON response data.
     *   - string k_video_level: The video level key.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Video/Level/Level.json', $this->params(), 'POST');
    }

    /**
     * Updates the specified video level.
     *
     * Renames an existing difficulty level in the business video library. Requires backend access
     * with the video library management privilege.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Wl/Video/Level/Level.json', $this->params(), 'PUT');
    }

    /**
     * Deletes the specified video level.
     *
     * Permanently removes the video level and unassigns it from all videos. If any videos are
     * currently assigned to this level, a confirmation flag must be set; otherwise the API throws
     * a confirmation-required error so the caller can prompt the user before proceeding.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): array
    {
        return $this->client->request('/Wl/Video/Level/Level.json', $this->params(), 'DELETE');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_video_level' => $this->k_video_level,
            'text_title' => $this->text_title,
            'is_delete_confirm' => $this->is_delete_confirm,
            ],
            static fn($v) => $v !== null
        );
    }
}
