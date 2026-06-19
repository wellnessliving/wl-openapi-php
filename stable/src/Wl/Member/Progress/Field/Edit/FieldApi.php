<?php
namespace WlSdk\Wl\Member\Progress\Field\Edit;

use WlSdk\WlSdkClient;

/**
 * Returns field data.
 */
class FieldApi
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
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Field key.
     *
     * @var string|null
     */
    public ?string $k_field = null;

    /**
     * Field measurement unit ID.

One of the [MeasurementSid](#/components/schemas/Wl.Member.Progress.Field.MeasurementSid) constants.
     *
     * @var int|null
     */
    public ?int $id_measurement_unit = null;

    /**
     * Field type ID.

One of the [TypeSid](#/components/schemas/Wl.Member.Progress.Field.TypeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_type = null;

    /**
     * Whether field is active and should be displayed on page.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Whether this field is public. If this field is set to `false`, this field is not visible to clients.
     *
     * @var bool|null
     */
    public ?bool $is_public = null;

    /**
     * Whether field value is required for clients.
     *
     * @var bool|null
     */
    public ?bool $is_require = null;

    /**
     * Whether field value is required for staffs.
     *
     * @var bool|null
     */
    public ?bool $is_require_staff = null;

    /**
     * Field title.
Only titles of the custom progress fields can be changed.

`null` If default title should be used.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns field data.
     *
     * Loads the configuration of the specified progress field for the given business, including its type,
     * measurement unit, visibility settings, and title, and populates the result properties accordingly.
     *
     * @return array Parsed JSON response data.
     *   - int[] a_measurement: A list of field measurement. See [MeasurementSid](#/components/schemas/Wl.Member.Progress.Field.MeasurementSid).
     *   - int[] a_type: A list of field type. See [TypeSid](#/components/schemas/Wl.Member.Progress.Field.TypeSid).
     *   - int id_field: Field ID. One of the [ProgressFieldSid](#/components/schemas/Wl.Member.Progress.Field.ProgressFieldSid) constant.
     *   - int id_measurement_unit: Field measurement unit ID.

One of the [MeasurementSid](#/components/schemas/Wl.Member.Progress.Field.MeasurementSid) constants.
     *   - int id_type: Field type ID.

One of the [TypeSid](#/components/schemas/Wl.Member.Progress.Field.TypeSid) constants.
     *   - bool is_active: Whether field is active and should be displayed on page.
     *   - bool is_public: Whether this field is public. If this field is set to `false`, this field is not visible to clients.
     *   - bool is_require: Whether field value is required for clients.
     *   - bool is_require_staff: Whether field value is required for staffs.
     *   - string text_title: Field title.
Only titles of the custom progress fields can be changed.

`null` If default title should be used.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Member/Progress/Field/Edit/Field.json', $this->params(), 'GET');
    }

    /**
     * Saves field data.
     *
     * Updates the configuration of the specified progress field, validating measurement unit, type, and title
     * constraints before persisting the changes. Logs the change when the field data is modified.
     *
     * @return array Parsed JSON response data.
     *   - string text_title: Field title.
Only titles of the custom progress fields can be changed.

`null` If default title should be used.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Member/Progress/Field/Edit/Field.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_field' => $this->k_field,
            'id_measurement_unit' => $this->id_measurement_unit,
            'id_type' => $this->id_type,
            'is_active' => $this->is_active,
            'is_public' => $this->is_public,
            'is_require' => $this->is_require,
            'is_require_staff' => $this->is_require_staff,
            'text_title' => $this->text_title,
            ],
            static fn($v) => $v !== null
        );
    }
}
