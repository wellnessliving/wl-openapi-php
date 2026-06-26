<?php

namespace WlSdk\Wl\Eml;

class EmlEditPutRequest
{
    /**
     * Eml system ID.
     * One of the {@link \WlSdk\RsEmlSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsEmlSid
     */
    public ?int $id_eml = null;

    /**
     * Business key for which eml settings are edited.
     * Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Eml list ID to be set as active.
     *
     * @var string|null
     */
    public ?string $s_list_id = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_eml' => $this->id_eml,
            'k_business' => $this->k_business,
            's_list_id' => $this->s_list_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
