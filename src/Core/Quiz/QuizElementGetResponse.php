<?php

namespace WlSdk\Core\Quiz;

/**
 * Response from GET
 */
class QuizElementGetResponse
{
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
     * Quiz active status.
     *
     * `true` if quiz is active.
     * `false` if quiz is not active.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

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

    public function __construct(array $data)
    {
        $this->a_element = $data['a_element'] ?? null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->show_numbering = isset($data['show_numbering']) ? (bool)$data['show_numbering'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
