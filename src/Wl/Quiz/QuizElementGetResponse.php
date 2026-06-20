<?php
namespace WlSdk\Wl\Quiz;

/**
 * Response from GET
 */
class QuizElementGetResponse
{
    /**
     * Access log data.
     *
     * @var QuizElementGetResponseAccessLog[]|null
     */
    public ?array $a_access_log = null;

    /**
     * List of quiz elements.
     * 
     * Each element responsible for one quiz element and structure of each value depend
     * on type of element and contains public arguments of responsible class element.
     * 
     * Order of the elements in array corresponds to order of elements on the form.
     *
     * @var QuizElementGetResponseElementA[]|QuizElementGetResponseElementB[]|QuizElementGetResponseElementC[]|QuizElementGetResponseElementD[]|QuizElementGetResponseElementE[]|QuizElementGetResponseElementF[]|QuizElementGetResponseElementG[]|QuizElementGetResponseElementH[]|QuizElementGetResponseElementI[]|QuizElementGetResponseElementJ[]|QuizElementGetResponseElementK[]|QuizElementGetResponseElementL[]|QuizElementGetResponseElementM[]|QuizElementGetResponseElementN[]|null
     */
    public ?array $a_element = null;

    /**
     * Quiz settings.
     *
     * @var QuizElementGetResponseSetting|null
     */
    public ?QuizElementGetResponseSetting $a_setting = null;

    /**
     * Whether user has privileges to amend form.
     *
     * @var bool|null
     */
    public ?bool $can_amend = null;

    /**
     * Number of responses for specific quiz.
     *
     * @var int|null
     */
    public ?int $i_responses = null;

    /**
     * Quiz active status.
     * 
     * `true` if quiz is active.
     * `false` if quiz is not active.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * `true` if quiz is imported, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_imported = null;

    /**
     * Whether form can be edited by franchisee.
     * `true` prevent franchisees from editing this form, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_prevent_franchisee = null;

    /**
     * Business type key. Used only for forms in the system business.
     * 
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $k_business_type = null;

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
     * Quiz form title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Direct URL to quiz.
     *
     * @var string|null
     */
    public ?string $url_quiz = null;

    /**
     * Kiosk direct URL to quiz.
     *
     * @var string|null
     */
    public ?string $url_quiz_kiosk = null;

    public function __construct(array $data)
    {
        $this->a_access_log = isset($data['a_access_log']) ? array_map(static fn($item) => new QuizElementGetResponseAccessLog((array)$item), (array)$data['a_access_log']) : null;
        $this->a_element = $data['a_element'] ?? null;
        $this->a_setting = isset($data['a_setting']) ? new QuizElementGetResponseSetting((array)$data['a_setting']) : null;
        $this->can_amend = isset($data['can_amend']) ? (bool)$data['can_amend'] : null;
        $this->i_responses = isset($data['i_responses']) ? (int)$data['i_responses'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_imported = isset($data['is_imported']) ? (bool)$data['is_imported'] : null;
        $this->is_prevent_franchisee = isset($data['is_prevent_franchisee']) ? (bool)$data['is_prevent_franchisee'] : null;
        $this->k_business_type = isset($data['k_business_type']) ? (string)$data['k_business_type'] : null;
        $this->show_numbering = isset($data['show_numbering']) ? (bool)$data['show_numbering'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->url_quiz = isset($data['url_quiz']) ? (string)$data['url_quiz'] : null;
        $this->url_quiz_kiosk = isset($data['url_quiz_kiosk']) ? (string)$data['url_quiz_kiosk'] : null;
    }
}
