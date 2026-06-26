<?php

namespace WlSdk\Wl\Skin;

/**
 * Response from GET
 */
class WidgetLeadSkinGetResponse
{
    /**
     * Lead skin list with the next structure:
     *
     * @var WidgetLeadSkinGetResponseLeadSkin|null
     */
    public ?WidgetLeadSkinGetResponseLeadSkin $a_lead_skin = null;

    public function __construct(array $data)
    {
        $this->a_lead_skin = isset($data['a_lead_skin']) ? new WidgetLeadSkinGetResponseLeadSkin((array)$data['a_lead_skin']) : null;
    }
}
