<?php

namespace WlSdk\Wl\Business\Skin;

/**
 * Response from GET
 */
class BusinessSkinGetResponse
{
    /**
     * Full business skin data.
     *
     * See result of the rs_business_skin() function.
     *
     * @var array|null
     */
    public ?array $a_skin = null;

    /**
     * Period without any actions from owner after which we move focus on Client Search Field.
     *
     * @var int|null
     */
    public ?int $i_focus_delay = null;

    /**
     * Measurement unit of `i_focus_delay`. Member of {@link \WlSdk\ADurationSid}.
     *
     * @var int|null
     * @see \WlSdk\ADurationSid
     */
    public ?int $id_focus_duration = null;

    /**
     * Navigation menu background colors.
     *
     * @var string|null
     */
    public ?string $s_background_skin = null;

    /**
     * Left panel theme.
     *
     * @var string|null
     */
    public ?string $s_left_theme = null;

    /**
     * Navigation menu theme.
     *
     * @var string|null
     */
    public ?string $s_navmenu_theme = null;

    /**
     * Size of icons in the top header panel for quick access.
     *
     * @var string|null
     */
    public ?string $sid_header_button_size = null;

    /**
     * Type of icons in the top header panel for quick access.
     *
     * @var string|null
     */
    public ?string $sid_header_button_type = null;

    public function __construct(array $data)
    {
        $this->a_skin = isset($data['a_skin']) ? (array)$data['a_skin'] : null;
        $this->i_focus_delay = isset($data['i_focus_delay']) ? (int)$data['i_focus_delay'] : null;
        $this->id_focus_duration = isset($data['id_focus_duration']) ? (int)$data['id_focus_duration'] : null;
        $this->s_background_skin = isset($data['s_background_skin']) ? (string)$data['s_background_skin'] : null;
        $this->s_left_theme = isset($data['s_left_theme']) ? (string)$data['s_left_theme'] : null;
        $this->s_navmenu_theme = isset($data['s_navmenu_theme']) ? (string)$data['s_navmenu_theme'] : null;
        $this->sid_header_button_size = isset($data['sid_header_button_size']) ? (string)$data['sid_header_button_size'] : null;
        $this->sid_header_button_type = isset($data['sid_header_button_type']) ? (string)$data['sid_header_button_type'] : null;
    }
}
