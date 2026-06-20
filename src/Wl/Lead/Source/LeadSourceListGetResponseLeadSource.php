<?php

namespace WlSdk\Wl\Lead\Source;

class LeadSourceListGetResponseLeadSource
{
    /**
     * Sorting order. Only used in the Lead Source widget option. `null` is a temporary value that exists for
     * a short time during the process of inserting of a new row.
     *
     * @var int|null
     */
    public ?int $i_sort = null;

    /**
     * System-defined Lead Source ID. One of the {@link \WlSdk\Wl\Mode\ModeSid} constants.
     * `null` if it is a custom Lead Source.
     *
     * @var int|null
     */
    public ?int $id_lead_source = null;

    /**
     * `true` if this skin will be used for "Add Lead" form or `false` otherwise.
     * Only one skin in the business can be used for "Add Lead" form.
     *  Not available if current user is not a staff member or admin.
     *
     * @var bool|null
     */
    public ?bool $is_add_lead = null;

    /**
     * Determines whether Lead Source is being used.
     * `true` if Lead Source is being used. `false` - otherwise.
     *  Not available if current user is not a staff member or admin.
     *
     * @var bool|null
     */
    public ?bool $is_use = null;

    /**
     * Key of the lead source.
     *
     * @var string|null
     */
    public ?string $k_lead_source = null;

    /**
     * Key of the lead skin.
     * Not available if current user is not a staff member or admin.
     *
     * @var string|null
     */
    public ?string $k_skin = null;

    /**
     * Name of the Lead Source.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->i_sort = isset($data['i_sort']) ? (int)$data['i_sort'] : null;
        $this->id_lead_source = isset($data['id_lead_source']) ? (int)$data['id_lead_source'] : null;
        $this->is_add_lead = isset($data['is_add_lead']) ? (bool)$data['is_add_lead'] : null;
        $this->is_use = isset($data['is_use']) ? (bool)$data['is_use'] : null;
        $this->k_lead_source = isset($data['k_lead_source']) ? (string)$data['k_lead_source'] : null;
        $this->k_skin = isset($data['k_skin']) ? (string)$data['k_skin'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
