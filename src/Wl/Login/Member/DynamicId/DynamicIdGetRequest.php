<?php
namespace WlSdk\Wl\Login\Member\DynamicId;

class DynamicIdGetRequest
{
    /**
     * `true` if a new dynamic ID should be generated.
     * `false` if the existing dynamic ID can be used, if it has not expired.
     *   If expired, a new dynamic ID will be generated anyway.
     *
     * @var bool|null
     */
    public ?bool $is_refresh = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User unique identifier.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_refresh' => $this->is_refresh,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
