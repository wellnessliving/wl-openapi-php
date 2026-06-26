<?php

namespace WlSdk\Core\Tool\Combobox;

/**
 * Response from POST
 */
class ToolComboboxServicePostResponse
{
    /**
     * Title for input field.
     *
     * @var string|null
     */
    public ?string $s_comment = null;

    /**
     * CSS class for the comment.
     *
     * @var string|null
     */
    public ?string $s_comment_class = null;

    /**
     * Key of the combobox.
     *
     * @var string|null
     */
    public ?string $s_key = null;

    /**
     * Value of combobox.
     *
     * @var string|null
     */
    public ?string $s_value = null;

    public function __construct(array $data)
    {
        $this->s_comment = isset($data['s_comment']) ? (string)$data['s_comment'] : null;
        $this->s_comment_class = isset($data['s_comment_class']) ? (string)$data['s_comment_class'] : null;
        $this->s_key = isset($data['s_key']) ? (string)$data['s_key'] : null;
        $this->s_value = isset($data['s_value']) ? (string)$data['s_value'] : null;
    }
}
