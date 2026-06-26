<?php

namespace WlSdk\Core\Tool\Combobox;

/**
 * Response from POST
 */
class ToolComboboxPostResponse
{
    /**
     * Search result.
     * The structure of the result depends on the specific combobox.
     *
     * @var array|null
     */
    public ?array $a_list = null;

    /**
     * Count of non-service items in the list.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * CSS class for the comment.
     *
     * @var string|null
     */
    public ?string $s_comment_class = null;

    /**
     * ID of the combobox.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? (array)$data['a_list'] : null;
        $this->i_count = isset($data['i_count']) ? (int)$data['i_count'] : null;
        $this->s_comment_class = isset($data['s_comment_class']) ? (string)$data['s_comment_class'] : null;
        $this->s_id = isset($data['s_id']) ? (string)$data['s_id'] : null;
    }
}
