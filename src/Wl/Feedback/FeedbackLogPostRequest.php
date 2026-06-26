<?php

namespace WlSdk\Wl\Feedback;

class FeedbackLogPostRequest
{
    /**
     * Screen height in pixels.
     *
     * @var int|null
     */
    public ?int $i_screen_height = null;

    /**
     * Screen width in pixels.
     *
     * @var int|null
     */
    public ?int $i_screen_width = null;

    /**
     * The source of the action. A constant of {@link \WlSdk\Wl\Mode\ModeSid}.
     *
     * Is optional. The default value is the current mode.
     *
     * @var int|null
     * @see \WlSdk\Wl\Mode\ModeSid
     */
    public ?int $id_mode = null;

    /**
     * `true` of a user is satisfied by application; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_satisfied = null;

    /**
     * Business key.
     * Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location key.
     * Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Device model.
     *
     * @var string|null
     */
    public ?string $text_device_model = null;

    /**
     * Device operating system.
     *
     * @var string|null
     */
    public ?string $text_device_os = null;

    /**
     * The text that shows up when the user submits feedback.
     *
     * @var string|null
     */
    public ?string $text_prompt_shown = null;

    /**
     * Application version.
     *
     * @var string|null
     */
    public ?string $text_version = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_screen_height' => $this->i_screen_height,
            'i_screen_width' => $this->i_screen_width,
            'id_mode' => $this->id_mode,
            'is_satisfied' => $this->is_satisfied,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'text_device_model' => $this->text_device_model,
            'text_device_os' => $this->text_device_os,
            'text_prompt_shown' => $this->text_prompt_shown,
            'text_version' => $this->text_version,
            ],
            static fn ($v) => $v !== null
        );
    }
}
