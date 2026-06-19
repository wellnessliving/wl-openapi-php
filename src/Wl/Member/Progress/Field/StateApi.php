<?php
namespace WlSdk\Wl\Member\Progress\Field;

use WlSdk\WlSdkClient;

/**
 * Changes states of field.
 */
class StateApi
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Changes states of field.
     *
     * Updates one or more state flags (`is_active`, `is_public`, `is_require`, `is_require_staff`) for the
     * specified
     * progress field and returns the new values. At least one flag must be provided; the field must be active to
     * change its required state.
     *
     * @return StateApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): StateApiPutResponse
    {
        return new StateApiPutResponse($this->client->request('/Wl/Member/Progress/Field/State.json', $this->params(), 'PUT'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_field' => $this->k_field,
            'is_active' => $this->is_active,
            'is_public' => $this->is_public,
            'is_require' => $this->is_require,
            'is_require_staff' => $this->is_require_staff,
            ],
            static fn($v) => $v !== null
        );
    }
}
