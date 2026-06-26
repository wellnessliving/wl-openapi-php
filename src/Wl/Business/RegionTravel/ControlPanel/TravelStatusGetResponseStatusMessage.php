<?php

namespace WlSdk\Wl\Business\RegionTravel\ControlPanel;

class TravelStatusGetResponseStatusMessage
{
    /**
     * HTML class to use for the message element.
     *
     * @var string|null
     */
    public ?string $html_class = null;

    /**
     * Message to be displayed. Describes the state of the travel process.
     * Describes quick check result if travel hasn't started.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    public function __construct(array $data)
    {
        $this->html_class = isset($data['html_class']) ? (string)$data['html_class'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
