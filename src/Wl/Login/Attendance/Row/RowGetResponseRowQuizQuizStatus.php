<?php

namespace WlSdk\Wl\Login\Attendance\Row;

class RowGetResponseRowQuizQuizStatus
{
    /**
     * `true` if the current staff member may amend the completed form.
     *
     * @var bool|null
     */
    public ?bool $can_amend = null;

    /**
     * `true` if the current staff member may complete the form.
     *
     * @var bool|null
     */
    public ?bool $can_complete = null;

    /**
     * `true` if the current staff member may view the form response.
     *
     * @var bool|null
     */
    public ?bool $can_view = null;

    /**
     * Render mode for the form. One of {@link \WlSdk\Core\Quiz\RenderModeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Core\Quiz\RenderModeSid
     */
    public ?int $id_render = null;

    /**
     * Response status. One of {@link \WlSdk\Core\Quiz\Response\ResponseStatusSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Core\Quiz\Response\ResponseStatusSid
     */
    public ?int $id_status = null;

    /**
     * `true` if the form is private.
     *
     * @var bool|null
     */
    public ?bool $is_private = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Quiz key.
     *
     * @var string|null
     */
    public ?string $k_quiz = null;

    /**
     * Quiz login key.
     *
     * @var string|null
     */
    public ?string $k_quiz_login = null;

    /**
     * Quiz response key.
     *
     * @var string|null
     */
    public ?string $k_quiz_response = null;

    /**
     * Form title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * URL to export the completed form as CSV. Empty string if not available.
     *
     * @var string|null
     */
    public ?string $url_csv = null;

    /**
     * Direct URL to fill in the outstanding form. Empty string if not available.
     *
     * @var string|null
     */
    public ?string $url_direct = null;

    /**
     * URL to export the completed form as PDF. Empty string if not available.
     *
     * @var string|null
     */
    public ?string $url_pdf = null;

    /**
     * URL to print the form. Empty string if not available.
     *
     * @var string|null
     */
    public ?string $url_print = null;

    public function __construct(array $data)
    {
        $this->can_amend = isset($data['can_amend']) ? (bool)$data['can_amend'] : null;
        $this->can_complete = isset($data['can_complete']) ? (bool)$data['can_complete'] : null;
        $this->can_view = isset($data['can_view']) ? (bool)$data['can_view'] : null;
        $this->id_render = isset($data['id_render']) ? (int)$data['id_render'] : null;
        $this->id_status = isset($data['id_status']) ? (int)$data['id_status'] : null;
        $this->is_private = isset($data['is_private']) ? (bool)$data['is_private'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_quiz = isset($data['k_quiz']) ? (string)$data['k_quiz'] : null;
        $this->k_quiz_login = isset($data['k_quiz_login']) ? (string)$data['k_quiz_login'] : null;
        $this->k_quiz_response = isset($data['k_quiz_response']) ? (string)$data['k_quiz_response'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->url_csv = isset($data['url_csv']) ? (string)$data['url_csv'] : null;
        $this->url_direct = isset($data['url_direct']) ? (string)$data['url_direct'] : null;
        $this->url_pdf = isset($data['url_pdf']) ? (string)$data['url_pdf'] : null;
        $this->url_print = isset($data['url_print']) ? (string)$data['url_print'] : null;
    }
}
