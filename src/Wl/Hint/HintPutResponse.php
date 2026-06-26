<?php

namespace WlSdk\Wl\Hint;

/**
 * Response from PUT
 */
class HintPutResponse
{
    /**
     * Name of the hint`s xml to be shown. An empty string if none of the hints should be shown.
     *
     * @var bool|null
     */
    public ?bool $text_template_show = null;

    public function __construct(array $data)
    {
        $this->text_template_show = isset($data['text_template_show']) ? (bool)$data['text_template_show'] : null;
    }
}
