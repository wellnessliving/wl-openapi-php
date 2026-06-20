<?php

namespace WlSdk\Wl\Lead;

class LeadGetResponseSkin
{
    /**
     * List of compiled CSS style blocks. Each element:
     *
     * @var LeadGetResponseSkinStyle|null
     */
    public ?LeadGetResponseSkinStyle $a_style = null;

    /**
     * Background styling for the widget container:
     *
     * @var LeadGetResponseSkinBackground|null
     */
    public ?LeadGetResponseSkinBackground $background = null;

    /**
     * Font styling for form fields:
     *
     * @var LeadGetResponseSkinFieldFont|null
     */
    public ?LeadGetResponseSkinFieldFont $field_font = null;

    /**
     * Header section settings:
     *
     * @var LeadGetResponseSkinHeaderText|null
     */
    public ?LeadGetResponseSkinHeaderText $header_text = null;

    /**
     * Visibility settings for information elements:
     *
     * @var LeadGetResponseSkinInfoShow|null
     */
    public ?LeadGetResponseSkinInfoShow $info_show = null;

    /**
     * Background styling for the submit button:
     *
     * @var LeadGetResponseSkinSubmitBackground|null
     */
    public ?LeadGetResponseSkinSubmitBackground $submit_background = null;

    /**
     * Font styling for the submit button:
     *
     * @var LeadGetResponseSkinSubmitFont|null
     */
    public ?LeadGetResponseSkinSubmitFont $submit_font = null;

    /**
     * Text settings for the submit button:
     *
     * @var LeadGetResponseSkinSubmitText|null
     */
    public ?LeadGetResponseSkinSubmitText $submit_text = null;

    public function __construct(array $data)
    {
        $this->a_style = isset($data['a_style']) ? new LeadGetResponseSkinStyle((array)$data['a_style']) : null;
        $this->background = isset($data['background']) ? new LeadGetResponseSkinBackground((array)$data['background']) : null;
        $this->field_font = isset($data['field-font']) ? new LeadGetResponseSkinFieldFont((array)$data['field-font']) : null;
        $this->header_text = isset($data['header-text']) ? new LeadGetResponseSkinHeaderText((array)$data['header-text']) : null;
        $this->info_show = isset($data['info-show']) ? new LeadGetResponseSkinInfoShow((array)$data['info-show']) : null;
        $this->submit_background = isset($data['submit-background']) ? new LeadGetResponseSkinSubmitBackground((array)$data['submit-background']) : null;
        $this->submit_font = isset($data['submit-font']) ? new LeadGetResponseSkinSubmitFont((array)$data['submit-font']) : null;
        $this->submit_text = isset($data['submit-text']) ? new LeadGetResponseSkinSubmitText((array)$data['submit-text']) : null;
    }
}
