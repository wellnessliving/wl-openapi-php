<?php
namespace WlSdk\Wl\Member\Progress\Field;

class StatePutRequest
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

    public function params(): array
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
