<?php

namespace WlSdk\Wl\Quiz;

class QuizListGetRequest
{
    /**
     * Whether to show active or inactive quizzes.
     *
     * Each element should be one of {@link \WlSdk\Core\Sid\YesNoSid} constants.
     *
     * @var int[]|null
     */
    public ?array $a_active_id = null;

    /**
     * Whether the requested filter of activity is stored as the default view of the list of the forms of the user.
     * `true` for the list of the forms itself; `false` for a list of the forms in another place (a picker of the
     * forms),
     * which must not change that view.
     *
     * @var bool|null
     */
    public ?bool $is_filter_save = true;

    /**
     * Shows which register quizzes must be returned.
     * `true` if return quizzes before registration, `false` otherwise.
     * `null` if return all quizzes for registration.
     *
     * @var bool|null
     */
    public ?bool $is_register_before = null;

    /**
     * Business key within which quiz is managed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Quiz login key.
     *
     * @var string|null
     */
    public ?string $k_quiz_login = null;

    /**
     * Filter phrase to filter quizzes by name.
     *
     * @var string|null
     */
    public ?string $text_search = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_active_id' => $this->a_active_id,
            'is_filter_save' => $this->is_filter_save,
            'is_register_before' => $this->is_register_before,
            'k_business' => $this->k_business,
            'k_quiz_login' => $this->k_quiz_login,
            'text_search' => $this->text_search,
            ],
            static fn ($v) => $v !== null
        );
    }
}
