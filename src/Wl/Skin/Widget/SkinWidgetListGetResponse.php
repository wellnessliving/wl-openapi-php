<?php

namespace WlSdk\Wl\Skin\Widget;

/**
 * Response from GET
 */
class SkinWidgetListGetResponse
{
    /**
     * No description.
     *
     * @var SkinWidgetListGetResponseWidgetSkin[]|null
     */
    public ?array $a_widget_skin = null;

    public function __construct(array $data)
    {
        $this->a_widget_skin = isset($data['a_widget_skin']) ? array_map(static fn ($item) => new SkinWidgetListGetResponseWidgetSkin((array)$item), (array)$data['a_widget_skin']) : null;
    }
}
