<?php

namespace WlSdk\Wl\Lead\Stage;

class LeadStageElementPostRequest
{
    /**
     * Shape of the stage icon. One of {@link \WlSdk\Wl\Lead\Stage\LeadStageShapeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Lead\Stage\LeadStageShapeSid
     */
    public ?int $id_lead_stage_shape = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the lead stage.
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
     * Allowed length depends on {@link \WlSdk\Wl\Lead\Stage\LeadStageElement},
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

    public function params(): array
    {
        return array_filter(
            [
            'id_lead_stage_shape' => $this->id_lead_stage_shape,
            'k_business' => $this->k_business,
            'k_lead_stage' => $this->k_lead_stage,
            's_color_background' => $this->s_color_background,
            's_color_foreground' => $this->s_color_foreground,
            's_icon' => $this->s_icon,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
