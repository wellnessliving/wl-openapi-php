<?php
namespace WlSdk\Wl\Member\Progress\Log\Image;

use WlSdk\WlSdkClient;

/**
 * Returns progress picture data.
 */
class ImageApi
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
     * Local date of the progress picture.

`null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Business key.

`null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key.

`null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Save image command.

`null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $s_command = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns progress picture data.
     *
     * Loads the progress picture for the specified user and date, returning image storage data, thumbnail
     * dimensions, the upload URL, and a direct link to the image.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_image: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Member/Progress/Log/Image/Image.json', $this->params(), 'GET');
    }

    /**
     * Saves progress picture.
     *
     * Applies the image command from `$s_command` to the progress picture for the specified user and date,
     * persists the result in storage, and writes or updates the corresponding progress log record in the database.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Member/Progress/Log/Image/Image.json', $this->params(), 'POST');
    }

    /**
     * Deletes progress image.
     *
     * Removes the progress picture for the specified user and date from storage and deletes the corresponding
     * progress log record from the database, then logs the change.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): array
    {
        return $this->client->request('/Wl/Member/Progress/Log/Image/Image.json', $this->params(), 'DELETE');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'dt_date' => $this->dt_date,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            's_command' => $this->s_command,
            ],
            static fn($v) => $v !== null
        );
    }
}
