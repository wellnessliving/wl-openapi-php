<?php

namespace WlSdk\Wl\Business;

/**
 * Response from GET
 */
class DateLocalGetResponse
{
    /**
     * Business local date in mysql format.
     *
     * @var string|null
     */
    public ?string $dtl_date = null;

    public function __construct(array $data)
    {
        $this->dtl_date = isset($data['dtl_date']) ? (string)$data['dtl_date'] : null;
    }
}
