<?php

namespace WlSdk\Core\Quiz;

class QuizElementPostRequest
{
    /**
     * Quiz key.
     *
     * @var string|null
     */
    public ?string $k_quiz = null;

    /**
     * List of quiz elements.
     *
     * Each element responsible for one quiz element and structure of each value depend
     * on type of element and contains public arguments of responsible class element.
     *
     * Order of the elements in array corresponds to order of elements on the form.
     *
     * @var array[]|null
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
     * List of quiz elements in json format.
     *
     * Order of the element in array corresponds to order of elements on the form.
     *
     * @var string|null
     */
    public ?string $json_element = null;

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

    public function params(): array
    {
        return array_filter(
            [
            'k_quiz' => $this->k_quiz,
            'a_element' => $this->a_element,
            'is_active' => $this->is_active,
            'json_element' => $this->json_element,
            'show_numbering' => $this->show_numbering,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
