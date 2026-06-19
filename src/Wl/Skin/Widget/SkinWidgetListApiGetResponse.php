<?php
namespace WlSdk\Wl\Skin\Widget;

/**
 * Response from GET
 */
class SkinWidgetListApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_widget_skin = null;

    public function __construct(array $data)
    {
        $this->a_widget_skin = isset($data['a_widget_skin']) ? (array)$data['a_widget_skin'] : null;
    }
}
