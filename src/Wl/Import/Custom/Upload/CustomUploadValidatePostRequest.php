<?php

namespace WlSdk\Wl\Import\Custom\Upload;

class CustomUploadValidatePostRequest
{
    /**
     * Type of custom import. One of {@link \WlSdk\Wl\Import\Custom\CustomSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Import\Custom\CustomSid
     */
    public ?int $id_import_custom = null;

    /**
     * Key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Same as `a_field_mapping`.
     *
     * @var array|null
     */
    public ?array $a_field_mapping = null;

    /**
     * Same as `id_date`.
     *
     * @var int|null
     */
    public ?int $id_date = null;

    /**
     * Same as `s_file_mapping`.
     *
     * @var string|null
     */
    public ?string $s_file_mapping = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_import_custom' => $this->id_import_custom,
            'k_business' => $this->k_business,
            'a_field_mapping' => $this->a_field_mapping,
            'id_date' => $this->id_date,
            's_file_mapping' => $this->s_file_mapping,
            ],
            static fn ($v) => $v !== null
        );
    }
}
