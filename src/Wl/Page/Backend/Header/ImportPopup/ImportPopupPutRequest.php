<?php

namespace WlSdk\Wl\Page\Backend\Header\ImportPopup;

class ImportPopupPutRequest
{
    /**
     * Business key from RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Content visibility flag.
     * `true` if the popup should be visible or `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_visible = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'is_visible' => $this->is_visible,
            ],
            static fn ($v) => $v !== null
        );
    }
}
