<?php

namespace WlSdk\Wl\Classes\Info;

/**
 * Response from GET
 */
class InfoGetResponse
{
    /**
     * Service logo information:
     *
     * @var InfoGetResponseLogo|null
     */
    public ?InfoGetResponseLogo $a_logo = null;

    /**
     * `true` means event, `false` means class.
     *
     * @var bool|null
     */
    public ?bool $is_event = null;

    /**
     * Key of the group of events, which are different instances of the same event.
     *
     * Is always `0` for classes.
     *
     * @var string|null
     */
    public ?string $k_enrollment_block = null;

    /**
     * Title of the class.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_logo = isset($data['a_logo']) ? new InfoGetResponseLogo((array)$data['a_logo']) : null;
        $this->is_event = isset($data['is_event']) ? (bool)$data['is_event'] : null;
        $this->k_enrollment_block = isset($data['k_enrollment_block']) ? (string)$data['k_enrollment_block'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
