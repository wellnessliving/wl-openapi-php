<?php

namespace WlSdk\Wl\Book\Repeat\Panel;

/**
 * Response from GET
 */
class PanelGetResponse
{
    /**
     * Output HTML content.
     *
     * @var string|null
     */
    public ?string $html_content = null;

    public function __construct(array $data)
    {
        $this->html_content = isset($data['html_content']) ? (string)$data['html_content'] : null;
    }
}
