<?php
namespace WlSdk\Wl\Skin;

use WlSdk\WlSdkClient;

/**
 * Creates a new widget.
 */
class SkinForeignApi
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
     * Skin type, one of [RsSkinSid](#/components/schemas/RsSkinSid) constants.
     *
     * @var int|null
     */
    public ?int $id_skin = null;

    /**
     * Key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Foreign skin key.
     *
     * @var string|null
     */
    public ?string $s_foreign_id = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_data_specific = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_fields = null;

    /**
     * Name of the widget.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates a new widget.
     *
     * Creates a new widget skin for the business and links it to an external identifier provided
     * by the integrator. The foreign ID must be unique within the business; attempting to create
     * a duplicate triggers an error directing the caller to use PUT instead.
     *
     * @return array Parsed JSON response data.
     *   - string k_skin: Skin key.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Skin/SkinForeign.json', $this->params(), 'POST');
    }

    /**
     * Updates the existing widget.
     *
     * Updates the configuration of an existing widget skin identified by the business and
     * external foreign ID. Throws an error if no matching foreign ID is found, directing
     * the caller to use POST instead.
     *
     * @return array Parsed JSON response data.
     *   - string k_skin: Skin key.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Wl/Skin/SkinForeign.json', $this->params(), 'PUT');
    }

    /**
     * Deletes the existing widget.
     *
     * Permanently removes a widget skin and its foreign ID mapping from the business. Used
     * by external integrators to clean up a widget that is no longer needed.
     *
     * @return array Parsed JSON response data.
     *   - string k_skin: Skin key.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): array
    {
        return $this->client->request('/Wl/Skin/SkinForeign.json', $this->params(), 'DELETE');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'id_skin' => $this->id_skin,
            'k_business' => $this->k_business,
            's_foreign_id' => $this->s_foreign_id,
            'a_data_specific' => $this->a_data_specific,
            'a_fields' => $this->a_fields,
            'text_name' => $this->text_name,
            ],
            static fn($v) => $v !== null
        );
    }
}
