<?php

namespace WlSdk\Wl\Skin;

class WidgetLeadSkinGetResponseLeadSkin
{
    /**
     * Key of the skin. Primary key in RsSkinSql table.
     *
     * @var string|null
     */
    public ?string $k_skin = null;

    /**
     * Name of the skin.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_skin = isset($data['k_skin']) ? (string)$data['k_skin'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
