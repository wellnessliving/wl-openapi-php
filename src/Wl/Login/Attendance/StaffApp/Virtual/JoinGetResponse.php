<?php

namespace WlSdk\Wl\Login\Attendance\StaffApp\Virtual;

/**
 * Response from GET
 */
class JoinGetResponse
{
    /**
     * Local date with time of start virtual service.
     *
     * @var string|null
     */
    public ?string $dtl_service = null;

    /**
     * Date with time in UTC of start virtual service.
     *
     * @var string|null
     */
    public ?string $dtu_service = null;

    /**
     * `true` if business use FitLIVE, `false` otherwise.
     *
     * @var string|null
     */
    public ?string $is_fitlive = null;

    /**
     * Name of the virtual service.
     *
     * @var string|null
     */
    public ?string $text_service = null;

    /**
     * The redirect to zoom meeting.
     *
     * @var string|null
     */
    public ?string $url_virtual_redirect = null;

    public function __construct(array $data)
    {
        $this->dtl_service = isset($data['dtl_service']) ? (string)$data['dtl_service'] : null;
        $this->dtu_service = isset($data['dtu_service']) ? (string)$data['dtu_service'] : null;
        $this->is_fitlive = isset($data['is_fitlive']) ? (string)$data['is_fitlive'] : null;
        $this->text_service = isset($data['text_service']) ? (string)$data['text_service'] : null;
        $this->url_virtual_redirect = isset($data['url_virtual_redirect']) ? (string)$data['url_virtual_redirect'] : null;
    }
}
