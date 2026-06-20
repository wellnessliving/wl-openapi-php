<?php

namespace WlSdk\Wl\Skin\Widget;

class SkinWidgetListGetResponseWidgetSkin
{
    /**
     * Skin key.
     *
     * @var string|null
     */
    public ?string $k_skin = null;

    /**
     * Widget name.
     *
     * @var string|null
     */
    public ?string $text_widget_name = null;

    public function __construct(array $data)
    {
        $this->k_skin = isset($data['k_skin']) ? (string)$data['k_skin'] : null;
        $this->text_widget_name = isset($data['text_widget_name']) ? (string)$data['text_widget_name'] : null;
    }
}
