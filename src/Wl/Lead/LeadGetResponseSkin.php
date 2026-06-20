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
     * @var LeadGetResponseSkinField-font|null
     */
    public ?LeadGetResponseSkinField-font $field-font = null;

    /**
     * Header section settings:
     *
     * @var LeadGetResponseSkinHeader-text|null
     */
    public ?LeadGetResponseSkinHeader-text $header-text = null;

    /**
     * Visibility settings for information elements:
     *
     * @var LeadGetResponseSkinInfo-show|null
     */
    public ?LeadGetResponseSkinInfo-show $info-show = null;

    /**
     * Background styling for the submit button:
     *
     * @var LeadGetResponseSkinSubmit-background|null
     */
    public ?LeadGetResponseSkinSubmit-background $submit-background = null;

    /**
     * Font styling for the submit button:
     *
     * @var LeadGetResponseSkinSubmit-font|null
     */
    public ?LeadGetResponseSkinSubmit-font $submit-font = null;

    /**
     * Text settings for the submit button:
     *
     * @var LeadGetResponseSkinSubmit-text|null
     */
    public ?LeadGetResponseSkinSubmit-text $submit-text = null;

    public function __construct(array $data)
    {
        $this->a_style = isset($data['a_style']) ? new LeadGetResponseSkinStyle((array)$data['a_style']) : null;
        $this->background = isset($data['background']) ? new LeadGetResponseSkinBackground((array)$data['background']) : null;
        $this->field-font = isset($data['field-font']) ? new LeadGetResponseSkinField-font((array)$data['field-font']) : null;
        $this->header-text = isset($data['header-text']) ? new LeadGetResponseSkinHeader-text((array)$data['header-text']) : null;
        $this->info-show = isset($data['info-show']) ? new LeadGetResponseSkinInfo-show((array)$data['info-show']) : null;
        $this->submit-background = isset($data['submit-background']) ? new LeadGetResponseSkinSubmit-background((array)$data['submit-background']) : null;
        $this->submit-font = isset($data['submit-font']) ? new LeadGetResponseSkinSubmit-font((array)$data['submit-font']) : null;
        $this->submit-text = isset($data['submit-text']) ? new LeadGetResponseSkinSubmit-text((array)$data['submit-text']) : null;
    }
}
