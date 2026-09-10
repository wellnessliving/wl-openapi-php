<?php

namespace WlSdk\Wl\Calendar\Cordova;

class CordovaCalendarStaffPostResponseVisitActual
{
    /**
     * Date/time of end. Set if event is not cancelled.
     *
     * @var string|null
     */
    public ?string $dtl_end = null;

    /**
     * Date/time of start. Set if event is not cancelled.
     *
     * @var string|null
     */
    public ?string $dtl_start = null;

    /**
     * `true` - event is cancelled; `false` - event still actual.
     *
     * @var bool|null
     */
    public ?bool $is_cancel = null;

    /**
     * Check sum. Set if event is not cancelled.
     *
     * @var string|null
     */
    public ?string $s_hash = null;

    /**
     * Event unique ID.
     *
     * @var string|null
     */
    public ?string $s_key = null;

    /**
     * Location address. Set if event is not cancelled.
     *
     * @var string|null
     */
    public ?string $text_location = null;

    /**
     * Additional description. Set if event is not cancelled.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    /**
     * Title. Set if event is not cancelled.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * URL to join virtual service. Set if event is not cancelled. Empty string if service is not virtual.
     *
     * @var string|null
     */
    public ?string $url = null;

    public function __construct(array $data)
    {
        $this->dtl_end = isset($data['dtl_end']) ? (string)$data['dtl_end'] : null;
        $this->dtl_start = isset($data['dtl_start']) ? (string)$data['dtl_start'] : null;
        $this->is_cancel = isset($data['is_cancel']) ? (bool)$data['is_cancel'] : null;
        $this->s_hash = isset($data['s_hash']) ? (string)$data['s_hash'] : null;
        $this->s_key = isset($data['s_key']) ? (string)$data['s_key'] : null;
        $this->text_location = isset($data['text_location']) ? (string)$data['text_location'] : null;
        $this->text_note = isset($data['text_note']) ? (string)$data['text_note'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->url = isset($data['url']) ? (string)$data['url'] : null;
    }
}
