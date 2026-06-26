<?php

namespace WlSdk\Wl\Member\Group\Edit;

class EditConversionTypePutRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key. Primary key in PassportLoginSql table.
     *
     * Used to set lead conversion type for the user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Lead conversion type.
     * `null` if this is the request to reset conversion date.
     *
     * @var int|null
     * @see \WlSdk\Wl\Lead\Conversion\LeadConversionTypeSid
     */
    public ?int $id_conversion_type = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'id_conversion_type' => $this->id_conversion_type,
            ],
            static fn ($v) => $v !== null
        );
    }
}
