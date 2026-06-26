<?php

namespace WlSdk\Wl\Profile\Page\Overview;

class OverviewCustomizePanelGetResponseWidget
{
    /**
     * Order of a widget on client's overview page.
     *
     * @var int|null
     */
    public ?int $i_order = null;

    /**
     * ID of a profile overview widget. One of {@link \WlSdk\Wl\Profile\Page\Overview\ProfileWidgetSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Profile\Page\Overview\ProfileWidgetSid
     */
    public ?int $id_widget = null;

    /**
     * Whether profile overview widget is collapsed. `true` - collapsed,
     *  `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_collapsed = null;

    /**
     * Whether profile overview widget is hidden. `true` - hidden, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_hide = null;

    public function __construct(array $data)
    {
        $this->i_order = isset($data['i_order']) ? (int)$data['i_order'] : null;
        $this->id_widget = isset($data['id_widget']) ? (int)$data['id_widget'] : null;
        $this->is_collapsed = isset($data['is_collapsed']) ? (bool)$data['is_collapsed'] : null;
        $this->is_hide = isset($data['is_hide']) ? (bool)$data['is_hide'] : null;
    }
}
