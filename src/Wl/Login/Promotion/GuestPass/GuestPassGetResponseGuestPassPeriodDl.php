<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass;

class GuestPassGetResponseGuestPassPeriodDl
{
    /**
     * Period end date in MySQL date format.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Period start date in MySQL date format.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    public function __construct(array $data)
    {
        $this->dl_end = isset($data['dl_end']) ? (string)$data['dl_end'] : null;
        $this->dl_start = isset($data['dl_start']) ? (string)$data['dl_start'] : null;
    }
}
