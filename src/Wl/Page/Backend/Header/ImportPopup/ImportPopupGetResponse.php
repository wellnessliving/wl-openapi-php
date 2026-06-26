<?php

namespace WlSdk\Wl\Page\Backend\Header\ImportPopup;

/**
 * Response from GET
 */
class ImportPopupGetResponse
{
    /**
     * Should a popup be shown? `true` - show, `false` - do not show.
     *
     * @var array|null
     */
    public ?array $show_import_popup = null;

    /**
     * Should full content be shown? `true` - show, `false` - do not show.
     *
     * @var bool|null
     */
    public ?bool $show_import_popup_full = null;

    public function __construct(array $data)
    {
        $this->show_import_popup = isset($data['show_import_popup']) ? (array)$data['show_import_popup'] : null;
        $this->show_import_popup_full = isset($data['show_import_popup_full']) ? (bool)$data['show_import_popup_full'] : null;
    }
}
