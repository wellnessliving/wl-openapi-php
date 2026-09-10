<?php

namespace WlSdk\Wl\Login\Rank;

class LoginRankListGetResponseUserListRankCategoryAvailable
{
    /**
     * Time and class belt conditions.
     *
     * @var string|null
     */
    public ?string $html_condition = null;

    /**
     * Whether this is the next rank for the user.
     *
     * @var bool|null
     */
    public ?bool $is_next = null;

    /**
     * Whether the user is ready for promotion to this rank.
     *
     * @var bool|null
     */
    public ?bool $is_ready = null;

    /**
     * Time and class belt conditions in JSON format.
     *
     * @var string|null
     */
    public ?string $json_condition = null;

    /**
     * Rank key. Primary key from  table.
     *
     * @var string|null
     */
    public ?string $k_rank = null;

    /**
     * Rank title.
     *
     * @var string|null
     */
    public ?string $text_rank = null;

    public function __construct(array $data)
    {
        $this->html_condition = isset($data['html_condition']) ? (string)$data['html_condition'] : null;
        $this->is_next = isset($data['is_next']) ? (bool)$data['is_next'] : null;
        $this->is_ready = isset($data['is_ready']) ? (bool)$data['is_ready'] : null;
        $this->json_condition = isset($data['json_condition']) ? (string)$data['json_condition'] : null;
        $this->k_rank = isset($data['k_rank']) ? (string)$data['k_rank'] : null;
        $this->text_rank = isset($data['text_rank']) ? (string)$data['text_rank'] : null;
    }
}
