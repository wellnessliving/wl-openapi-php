<?php

namespace WlSdk\Wl\Lead;

class LeadGetResponseFieldList
{
    /**
     * A list of possible options for an HTML select field. This value is only used if this field is an HTML
     * select.
     * Every element has the following keys:
     *
     * @var LeadGetResponseFieldListItem|null
     */
    public ?LeadGetResponseFieldListItem $a_item = null;

    /**
     * The type of the general field. This is one of the {@link \WlSdk\RsFieldGeneralSid}.
     * This value is only set if the field is one of the general fields.
     *
     * @var int|null
     */
    public ?int $id_field_general = null;

    /**
     * The field type. This is one of the {@link \WlSdk\RsFieldTypeSid} constants.
     *
     * @var int|null
     */
    public ?int $id_field_type = null;

    /**
     * If `true`, then the field is mandatory. If `false`, then the field isn't mandatory.
     *
     * @var bool|null
     */
    public ?bool $is_require = null;

    /**
     * The field key.
     *
     * @var string|null
     */
    public ?string $k_field = null;

    /**
     * The field title.
     *
     * @var string|null
     */
    public ?string $text_field = null;

    public function __construct(array $data)
    {
        $this->a_item = isset($data['a_item']) ? new LeadGetResponseFieldListItem((array)$data['a_item']) : null;
        $this->id_field_general = isset($data['id_field_general']) ? (int)$data['id_field_general'] : null;
        $this->id_field_type = isset($data['id_field_type']) ? (int)$data['id_field_type'] : null;
        $this->is_require = isset($data['is_require']) ? (bool)$data['is_require'] : null;
        $this->k_field = isset($data['k_field']) ? (string)$data['k_field'] : null;
        $this->text_field = isset($data['text_field']) ? (string)$data['text_field'] : null;
    }
}
