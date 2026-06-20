<?php
namespace WlSdk\Wl\Lead;

class LeadGetResponseSkinField-font
{
    /**
     * CSS class names to apply to the element.
     *
     * @var string|null
     */
    public ?string $class = null;

    /**
     * Inline CSS style string to apply to the element.
     *
     * @var string|null
     */
    public ?string $css = null;

    public function __construct(array $data)
    {
        $this->class = isset($data['class']) ? (string)$data['class'] : null;
        $this->css = isset($data['css']) ? (string)$data['css'] : null;
    }
}
