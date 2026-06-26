<?php

namespace WlSdk\Wl\Profile\Relation;

class InheritanceGetRequest
{
    /**
     * Type of the field. One of {@link \WlSdk\RsFieldGeneralSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsFieldGeneralSid
     */
    public ?int $id_field_general = null;

    /**
     * `true` if API is being used from backend, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User's key. `null` if not specified.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Relative's User key.
     *
     * @var string|null
     */
    public ?string $uid_relative = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_field_general' => $this->id_field_general,
            'is_backend' => $this->is_backend,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'uid_relative' => $this->uid_relative,
            ],
            static fn ($v) => $v !== null
        );
    }
}
