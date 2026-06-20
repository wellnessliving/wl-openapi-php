<?php

namespace WlSdk\Wl\Business\Design;

class BusinessDesignGetResponseData
{
    /**
     * Clients only see today's and upcoming sessions.
     *
     * @var bool|null
     */
    public ?bool $hide_past_days = null;

    /**
     * Layout ID. For more details, see {@link \WlSdk\RsPageFrontendHeaderLayoutSid}.
     *
     * @var int|null
     * @see \WlSdk\RsPageFrontendHeaderLayoutSid
     */
    public ?int $id_layout = null;

    /**
     * Logo position ID. For more details, see {@link \WlSdk\RsBusinessDesignLogoPositionSid}.
     *
     * @var int|null
     * @see \WlSdk\RsBusinessDesignLogoPositionSid
     */
    public ?int $id_logo_position = null;

    /**
     * Logo style ID. For more details, see {@link \WlSdk\RsBusinessDesignLogoStyleSid}.
     *
     * @var int|null
     * @see \WlSdk\RsBusinessDesignLogoStyleSid
     */
    public ?int $id_logo_style = null;

    /**
     * If `true` clients can check-in using the Client Web App and Achieve Web App.
     *
     * @var bool|null
     */
    public ?bool $is_attend_self = null;

    /**
     * If `true` the capacity and number of clients signed up to the appointment will be shown.
     *
     * @var bool|null
     */
    public ?bool $is_appointment_capacity = null;

    /**
     * If `true` the capacity and number of clients signed up to the class will be shown.
     *
     * @var bool|null
     */
    public ?bool $is_class_capacity = null;

    /**
     * If `true`, the quick class filter will be shown.
     *
     * @var bool|null
     */
    public ?bool $is_class_quick = null;

    /**
     * `true` to display only available spots (e.g., "3 spots left");
     *  `false` to display both available spots and total capacity (e.g., "3 spots left of 10").
     *
     * @var bool|null
     */
    public ?bool $is_class_spot_only = null;

    /**
     * If `true`, the business name will be shown.
     *
     * @var bool|null
     */
    public ?bool $is_show_name = null;

    /**
     * Background color of frontend.
     *
     * @var string|null
     */
    public ?string $s_color_background = null;

    /**
     * Header color of frontend menu.
     *
     * @var string|null
     */
    public ?string $s_color_header = null;

    /**
     * Border color of frontend menu.
     *
     * @var string|null
     */
    public ?string $s_color_menu_border = null;

    /**
     * Menu element color
     *
     * @var string|null
     */
    public ?string $s_color_menu_element = null;

    /**
     * Hover colour of front end menu.
     *
     * @var string|null
     */
    public ?string $s_color_menu_hover = null;

    /**
     * Background hover color of front end menu.
     *
     * @var string|null
     */
    public ?string $s_color_menu_hover_background = null;

    /**
     * Press colour of front end menu.
     *
     * @var string|null
     */
    public ?string $s_color_menu_press = null;

    /**
     * Submenu colour of front end menu.
     *
     * @var string|null
     */
    public ?string $s_color_submenu = null;

    /**
     * Submenu element color of front end menu.
     *
     * @var string|null
     */
    public ?string $s_color_submenu_element = null;

    /**
     * Hover color of submenu of front end menu
     *
     * @var string|null
     */
    public ?string $s_color_submenu_hover = null;

    /**
     * Press color of submenu in front end menu.
     *
     * @var string|null
     */
    public ?string $s_color_submenu_press = null;

    /**
     * Facebook Pixel ID. Used for Facebook analytics tracking. Empty string if tracking is disabled.
     *
     * @var string|null
     */
    public ?string $s_fb_pixel_id = null;

    /**
     * Google Analytics Tracking ID. Used for Google Analytics tracking. Empty string if tracking is disabled.
     *
     * @var string|null
     */
    public ?string $s_ga_tracking_id = null;

    /**
     * Google Tag Manager Container ID. Used for Google Analytics tracking. Empty string if tracking is disabled.
     *
     * @var string|null
     */
    public ?string $s_gtm_container_id = null;

    /**
     * Path to the background image.
     *
     * @var string|null
     */
    public ?string $s_url_background = null;

    public function __construct(array $data)
    {
        $this->hide_past_days = isset($data['hide_past_days']) ? (bool)$data['hide_past_days'] : null;
        $this->id_layout = isset($data['id_layout']) ? (int)$data['id_layout'] : null;
        $this->id_logo_position = isset($data['id_logo_position']) ? (int)$data['id_logo_position'] : null;
        $this->id_logo_style = isset($data['id_logo_style']) ? (int)$data['id_logo_style'] : null;
        $this->is_attend_self = isset($data['is_attend_self']) ? (bool)$data['is_attend_self'] : null;
        $this->is_appointment_capacity = isset($data['is_appointment_capacity']) ? (bool)$data['is_appointment_capacity'] : null;
        $this->is_class_capacity = isset($data['is_class_capacity']) ? (bool)$data['is_class_capacity'] : null;
        $this->is_class_quick = isset($data['is_class_quick']) ? (bool)$data['is_class_quick'] : null;
        $this->is_class_spot_only = isset($data['is_class_spot_only']) ? (bool)$data['is_class_spot_only'] : null;
        $this->is_show_name = isset($data['is_show_name']) ? (bool)$data['is_show_name'] : null;
        $this->s_color_background = isset($data['s_color_background']) ? (string)$data['s_color_background'] : null;
        $this->s_color_header = isset($data['s_color_header']) ? (string)$data['s_color_header'] : null;
        $this->s_color_menu_border = isset($data['s_color_menu_border']) ? (string)$data['s_color_menu_border'] : null;
        $this->s_color_menu_element = isset($data['s_color_menu_element']) ? (string)$data['s_color_menu_element'] : null;
        $this->s_color_menu_hover = isset($data['s_color_menu_hover']) ? (string)$data['s_color_menu_hover'] : null;
        $this->s_color_menu_hover_background = isset($data['s_color_menu_hover_background']) ? (string)$data['s_color_menu_hover_background'] : null;
        $this->s_color_menu_press = isset($data['s_color_menu_press']) ? (string)$data['s_color_menu_press'] : null;
        $this->s_color_submenu = isset($data['s_color_submenu']) ? (string)$data['s_color_submenu'] : null;
        $this->s_color_submenu_element = isset($data['s_color_submenu_element']) ? (string)$data['s_color_submenu_element'] : null;
        $this->s_color_submenu_hover = isset($data['s_color_submenu_hover']) ? (string)$data['s_color_submenu_hover'] : null;
        $this->s_color_submenu_press = isset($data['s_color_submenu_press']) ? (string)$data['s_color_submenu_press'] : null;
        $this->s_fb_pixel_id = isset($data['s_fb_pixel_id']) ? (string)$data['s_fb_pixel_id'] : null;
        $this->s_ga_tracking_id = isset($data['s_ga_tracking_id']) ? (string)$data['s_ga_tracking_id'] : null;
        $this->s_gtm_container_id = isset($data['s_gtm_container_id']) ? (string)$data['s_gtm_container_id'] : null;
        $this->s_url_background = isset($data['s_url_background']) ? (string)$data['s_url_background'] : null;
    }
}
