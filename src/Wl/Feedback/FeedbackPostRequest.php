<?php

namespace WlSdk\Wl\Feedback;

class FeedbackPostRequest
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
     * `true` to send feedback email to location email; `false` to send the email to support team.
     *
     * @var bool|null
     */
    public ?bool $is_mail_location = null;

    /**
     * `true` of a user initiated the feedback; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_user_initialized = null;

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
     * Application ID.
     *
     * @var string|null
     */
    public ?string $text_app_id = null;

    /**
     * App page where feedback was submitted.
     *
     * @var string|null
     */
    public ?string $text_app_page = null;

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
     * Feedback text.
     *
     * @var string|null
     */
    public ?string $text_feedback = null;

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
            'is_mail_location' => $this->is_mail_location,
            'is_user_initialized' => $this->is_user_initialized,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'text_app_id' => $this->text_app_id,
            'text_app_page' => $this->text_app_page,
            'text_device_model' => $this->text_device_model,
            'text_device_os' => $this->text_device_os,
            'text_feedback' => $this->text_feedback,
            'text_prompt_shown' => $this->text_prompt_shown,
            'text_version' => $this->text_version,
            ],
            static fn ($v) => $v !== null
        );
    }
}
