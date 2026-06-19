<?php
namespace WlSdk\Wl\Member\Progress\Field\Edit;

use WlSdk\WlSdkClient;

/**
 * Returns field data.
 */
class FieldApi
{
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
     * 
     * One of the [MeasurementSid](#/components/schemas/Wl.Member.Progress.Field.MeasurementSid) constants.
     *
     * @var int|null
     */
    public ?int $id_measurement_unit = null;

    /**
     * Field type ID.
     * 
     * One of the [TypeSid](#/components/schemas/Wl.Member.Progress.Field.TypeSid) constants.
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
     * Only titles of the custom progress fields can be changed.
     * 
     * `null` If default title should be used.
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
     * @return FieldApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): FieldApiGetResponse
    {
        return new FieldApiGetResponse($this->client->request('/Wl/Member/Progress/Field/Edit/Field.json', $this->params(), 'GET'));
    }

    /**
     * Saves field data.
     *
     * Updates the configuration of the specified progress field, validating measurement unit, type, and title
     * constraints before persisting the changes. Logs the change when the field data is modified.
     *
     * @return FieldApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): FieldApiPostResponse
    {
        return new FieldApiPostResponse($this->client->request('/Wl/Member/Progress/Field/Edit/Field.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
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
