<?php
namespace WlSdk\Wl\Skin\Widget;

/**
 * Response from GET
 */
class SkinWidgetListGetResponse
{
    /**
     * List of Widget skins grouped by widget type.
     * 
     * Skin type, one of [RsSkinSid](#/components/schemas/RsSkinSid) constants.
     * 
     * The array structure:
     * Keys - Skin type, one of [RsSkinSid](#/components/schemas/RsSkinSid) constants.
     * Values - arrays with next keys:
     *
     * @var SkinWidgetListGetResponseWidgetSkin[]|null
     */
    public ?array $a_widget_skin = null;

    public function __construct(array $data)
    {
        $this->a_widget_skin = isset($data['a_widget_skin']) ? array_map(static fn($item) => new SkinWidgetListGetResponseWidgetSkin((array)$item), (array)$data['a_widget_skin']) : null;
    }
}
