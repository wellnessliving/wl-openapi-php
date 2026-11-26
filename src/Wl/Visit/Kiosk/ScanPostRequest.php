<?php

namespace WlSdk\Wl\Visit\Kiosk;

class ScanPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the location of the kiosk.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The scanned value: a member ID or a dynamic barcode, for example `100245`.
     *
     * When the business uses QR codes, also the QR code of the client, `text_barcode|tu_qr_issued|30`, for example
     * `100245|1795000000|30`. The symbols that are not letters or digits are cut from both ends.
     *
     * @var string|null
     */
    public ?string $text_scan = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'text_scan' => $this->text_scan,
            ],
            static fn ($v) => $v !== null
        );
    }
}
