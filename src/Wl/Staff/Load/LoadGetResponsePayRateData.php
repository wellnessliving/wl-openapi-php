<?php

namespace WlSdk\Wl\Staff\Load;

class LoadGetResponsePayRateData
{
    /**
     * Hourly rate.
     *
     * @var string|null
     */
    public ?string $f_rate = null;

    /**
     * Pay rate cap.
     *
     * @var string|null
     */
    public ?string $f_cap = null;

    /**
     * Pay rate cap per day.
     *
     * @var string|null
     */
    public ?string $f_cap_day = null;

    public function __construct(array $data)
    {
        $this->f_rate = isset($data['f_rate']) ? (string)$data['f_rate'] : null;
        $this->f_cap = isset($data['f_cap']) ? (string)$data['f_cap'] : null;
        $this->f_cap_day = isset($data['f_cap_day']) ? (string)$data['f_cap_day'] : null;
    }
}
