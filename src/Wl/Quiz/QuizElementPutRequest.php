<?php
namespace WlSdk\Wl\Quiz;

class QuizElementPutRequest
{
    /**
     * Business key within which quiz is managed.
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
     * Quiz active status.
     * 
     * `true` if quiz is active.
     * `false` if quiz is not active.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_quiz' => $this->k_quiz,
            'k_quiz_login' => $this->k_quiz_login,
            'is_active' => $this->is_active,
            ],
            static fn($v) => $v !== null
        );
    }
}
