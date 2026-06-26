<?php

namespace WlSdk\Wl\Page\Backend\Header\ImportPopup;

class ImportPopupGetRequest
{
    /**
     * Business key from RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
