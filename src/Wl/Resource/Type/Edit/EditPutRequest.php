<?php

namespace WlSdk\Wl\Resource\Type\Edit;

class EditPutRequest
{
    /**
     * ID of asset category. Primary key in RsResourceTypeSql table.
     *
     * @var string|null
     */
    public ?string $k_resource_type = null;

    /**
     * Title for asset category. For put.
     *
     * @var string|null
     */
    public ?string $s_title_put = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_resource_type' => $this->k_resource_type,
            's_title_put' => $this->s_title_put,
            ],
            static fn ($v) => $v !== null
        );
    }
}
