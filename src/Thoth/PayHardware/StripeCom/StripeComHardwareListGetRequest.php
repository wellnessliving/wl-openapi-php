<?php

namespace WlSdk\Thoth\PayHardware\StripeCom;

class StripeComHardwareListGetRequest
{
    /**
     * Reader status ID for filter.
     *
     * @var int|null
     * @see \WlSdk\Thoth\PayHardware\ReaderStatusFilterSid
     */
    public ?int $id_status = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Text filter.
     *
     * @var string|null
     */
    public ?string $text_search = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_status' => $this->id_status,
            'k_business' => $this->k_business,
            'text_search' => $this->text_search,
            ],
            static fn ($v) => $v !== null
        );
    }
}
