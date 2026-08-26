<?php

namespace WlSdk\Wl\Lead\Stage;

class LeadStageListGetResponseLeadStage
{
    /**
     * Sequence number of the stage in the list.
     *
     * @var int|null
     */
    public ?int $i_order = null;

    /**
     * Number of clients who are in this stage.
     * Only set in a case {@link \WlSdk\Wl\Lead\Stage\LeadStageList} is `true`.
     *
     * @var int|null
     */
    public ?int $i_user = null;

    /**
     * Shape of the stage icon. One of {@link \WlSdk\Wl\Lead\Stage\LeadStageShapeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Lead\Stage\LeadStageShapeSid
     */
    public ?int $id_lead_stage_shape = null;

    /**
     * System-defined lead stage. One of {@link \WlSdk\Wl\Lead\Stage\LeadStageSystemSid} constants.
     * `null` for a custom stage created by the business.
     *
     * @var int|null
     * @see \WlSdk\Wl\Lead\Stage\LeadStageSystemSid
     */
    public ?int $id_lead_stage_system = null;

    /**
     * Type of the stage. One of {@link \WlSdk\Wl\Lead\Stage\LeadStageTypeSid} constants.
     * The type is set when the stage is created and can not be changed afterwards.
     *
     * @var int|null
     * @see \WlSdk\Wl\Lead\Stage\LeadStageTypeSid
     */
    public ?int $id_lead_stage_type = null;

    /**
     * Key of the stage.
     *
     * @var string|null
     */
    public ?string $k_lead_stage = null;

    /**
     * Background color of the icon. Hexadecimal color.
     *
     * @var string|null
     */
    public ?string $s_color_background = null;

    /**
     * Color of characters on the icon. Hexadecimal color.
     *
     * @var string|null
     */
    public ?string $s_color_foreground = null;

    /**
     * Characters on the icon.
     *
     * @var string|null
     */
    public ?string $s_icon = null;

    /**
     * Name of the stage.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->i_order = isset($data['i_order']) ? (int)$data['i_order'] : null;
        $this->i_user = isset($data['i_user']) ? (int)$data['i_user'] : null;
        $this->id_lead_stage_shape = isset($data['id_lead_stage_shape']) ? (int)$data['id_lead_stage_shape'] : null;
        $this->id_lead_stage_system = isset($data['id_lead_stage_system']) ? (int)$data['id_lead_stage_system'] : null;
        $this->id_lead_stage_type = isset($data['id_lead_stage_type']) ? (int)$data['id_lead_stage_type'] : null;
        $this->k_lead_stage = isset($data['k_lead_stage']) ? (string)$data['k_lead_stage'] : null;
        $this->s_color_background = isset($data['s_color_background']) ? (string)$data['s_color_background'] : null;
        $this->s_color_foreground = isset($data['s_color_foreground']) ? (string)$data['s_color_foreground'] : null;
        $this->s_icon = isset($data['s_icon']) ? (string)$data['s_icon'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
