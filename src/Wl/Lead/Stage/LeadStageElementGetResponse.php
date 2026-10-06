<?php

namespace WlSdk\Wl\Lead\Stage;

/**
 * Response from GET
 */
class LeadStageElementGetResponse
{
    /**
     * Shape of the stage icon. One of {@link \WlSdk\Wl\Lead\Stage\LeadStageShapeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Lead\Stage\LeadStageShapeSid
     */
    public ?int $id_lead_stage_shape = null;

    /**
     * Type of the stage. One of {@link \WlSdk\Wl\Lead\Stage\LeadStageTypeSid} constants.
     *
     * Only used to create a stage. Type of an existing stage can not be changed.
     *
     * @var int|null
     * @see \WlSdk\Wl\Lead\Stage\LeadStageTypeSid
     */
    public ?int $id_lead_stage_type = null;

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
     * Allowed length depends on {@link \WlSdk\Wl\Lead\Stage\LeadStageElementGetResponse::$id_lead_stage_shape},
     * see {@link \WlSdk\Wl\Lead\Stage\LeadStageShapeSid}.
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
        $this->id_lead_stage_shape = isset($data['id_lead_stage_shape']) ? (int)$data['id_lead_stage_shape'] : null;
        $this->id_lead_stage_type = isset($data['id_lead_stage_type']) ? (int)$data['id_lead_stage_type'] : null;
        $this->s_color_background = isset($data['s_color_background']) ? (string)$data['s_color_background'] : null;
        $this->s_color_foreground = isset($data['s_color_foreground']) ? (string)$data['s_color_foreground'] : null;
        $this->s_icon = isset($data['s_icon']) ? (string)$data['s_icon'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
