<?php
namespace WlSdk\Wl\Book\Process\Info;

class InfoPostResponseVisitPayment
{
    /**
     * `true` if the visit is free; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_free = null;

    /**
     * Applied user's purchase option.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Purchase option.
     *
     * @var string|null
     */
    public ?string $k_promotion = null;

    /**
     * Applied session pass.
     *
     * @var string|null
     */
    public ?string $k_session_pass = null;

    /**
     * Purchase option title.
     *
     * @var string|null
     */
    public ?string $text_promotion = null;

    public function __construct(array $data)
    {
        $this->is_free = isset($data['is_free']) ? (bool)$data['is_free'] : null;
        $this->k_login_promotion = isset($data['k_login_promotion']) ? (string)$data['k_login_promotion'] : null;
        $this->k_promotion = isset($data['k_promotion']) ? (string)$data['k_promotion'] : null;
        $this->k_session_pass = isset($data['k_session_pass']) ? (string)$data['k_session_pass'] : null;
        $this->text_promotion = isset($data['text_promotion']) ? (string)$data['text_promotion'] : null;
    }
}
