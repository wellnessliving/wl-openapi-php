<?php

namespace WlSdk\Wl\Timezone;

/**
 * Response from GET
 */
class TimezoneCurrentTimeGetResponse
{
    /**
     * Current date time in the timezone.
     *
     * @var string|null
     */
    public ?string $dtl_current = null;

    /**
     * Timezone abbreviation.
     *
     * @var string|null
     */
    public ?string $text_timezone = null;

    /**
     * Timezone title.
     *
     * @var string|null
     */
    public ?string $text_timezone_name = null;

    public function __construct(array $data)
    {
        $this->dtl_current = isset($data['dtl_current']) ? (string)$data['dtl_current'] : null;
        $this->text_timezone = isset($data['text_timezone']) ? (string)$data['text_timezone'] : null;
        $this->text_timezone_name = isset($data['text_timezone_name']) ? (string)$data['text_timezone_name'] : null;
    }
}
