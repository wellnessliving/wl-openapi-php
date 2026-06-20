<?php
namespace WlSdk\Wl\Quiz\Response;

/**
 * Response from GET
 */
class Response65GetResponse
{
    /**
     * Access log data.
     *
     * @var Response65GetResponseAccessLog[]|null
     */
    public ?array $a_access_log = null;

    /**
     * List of quiz questions with responses.
     *
     * @var Response65GetResponseElementA[]|Response65GetResponseElementB[]|Response65GetResponseElementC[]|Response65GetResponseElementD[]|Response65GetResponseElementE[]|Response65GetResponseElementF[]|Response65GetResponseElementG[]|Response65GetResponseElementH[]|Response65GetResponseElementI[]|Response65GetResponseElementJ[]|Response65GetResponseElementK[]|Response65GetResponseElementL[]|Response65GetResponseElementM[]|Response65GetResponseElementN[]|null
     */
    public ?array $a_element = null;

    /**
     * Information about service if response connected to visit.
     * Empty array if the response is not connected to a visit:
     *
     * @var Response65GetResponseServiceInfo|null
     */
    public ?Response65GetResponseServiceInfo $a_service_info = null;

    /**
     * Whether response can be amended by current user.
     *
     * @var bool|null
     */
    public ?bool $can_amend = null;

    /**
     * Date when response was submitted.
     *
     * @var string|null
     */
    public ?string $dtu_response = null;

    /**
     * Response source. One of {@link \WlSdk\Wl\Quiz\Response\SourceSid} constants.
     *
     * @var int|null
     */
    public ?int $id_source = null;

    /**
     * Response status ID.
     *
     * @var int|null
     */
    public ?int $id_status = null;

    /**
     * Whether to show numbering of the form elements that supports numbering.
     * 
     * `true` to show numbering on the form for elements that supports numbering.
     * `false` to not show numbering.
     *
     * @var bool|null
     */
    public ?bool $show_numbering = null;

    /**
     * Date when response added.
     *
     * @var string|null
     */
    public ?string $text_add_date = null;

    /**
     * Date when response amended.
     *
     * @var string|null
     */
    public ?string $text_amend_date = null;

    /**
     * Name of the user who amend the response.
     *
     * @var string|null
     */
    public ?string $text_amend_user = null;

    /**
     * Date when response completed.
     *
     * @var string|null
     */
    public ?string $text_complete_date = null;

    /**
     * Name of the user who complete the response.
     *
     * @var string|null
     */
    public ?string $text_complete_user = null;

    /**
     * Name of the user who owned the response.
     *
     * @var string|null
     */
    public ?string $text_response_by = null;

    /**
     * Title of the filled form.
     * 
     * `null` in case when not filled yet.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_access_log = isset($data['a_access_log']) ? array_map(static fn($item) => new Response65GetResponseAccessLog((array)$item), (array)$data['a_access_log']) : null;
        $this->a_element = $data['a_element'] ?? null;
        $this->a_service_info = isset($data['a_service_info']) ? new Response65GetResponseServiceInfo((array)$data['a_service_info']) : null;
        $this->can_amend = isset($data['can_amend']) ? (bool)$data['can_amend'] : null;
        $this->dtu_response = isset($data['dtu_response']) ? (string)$data['dtu_response'] : null;
        $this->id_source = isset($data['id_source']) ? (int)$data['id_source'] : null;
        $this->id_status = isset($data['id_status']) ? (int)$data['id_status'] : null;
        $this->show_numbering = isset($data['show_numbering']) ? (bool)$data['show_numbering'] : null;
        $this->text_add_date = isset($data['text_add_date']) ? (string)$data['text_add_date'] : null;
        $this->text_amend_date = isset($data['text_amend_date']) ? (string)$data['text_amend_date'] : null;
        $this->text_amend_user = isset($data['text_amend_user']) ? (string)$data['text_amend_user'] : null;
        $this->text_complete_date = isset($data['text_complete_date']) ? (string)$data['text_complete_date'] : null;
        $this->text_complete_user = isset($data['text_complete_user']) ? (string)$data['text_complete_user'] : null;
        $this->text_response_by = isset($data['text_response_by']) ? (string)$data['text_response_by'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
