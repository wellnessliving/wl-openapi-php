<?php

namespace WlSdk\Wl\Import\Custom\Upload;

class CustomUploadGetRequest
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

    public function params(): array
    {
        return array_filter(
            [
            'id_import_custom' => $this->id_import_custom,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
