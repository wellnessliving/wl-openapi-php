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
     * Title of the class.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_logo = isset($data['a_logo']) ? new InfoGetResponseLogo((array)$data['a_logo']) : null;
        $this->is_event = isset($data['is_event']) ? (bool)$data['is_event'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
