<?php

namespace WlSdk\Wl\Profile\Edit;

/**
 * Response from POST
 */
class EditPostResponse
{
    /**
     * List of validation errors. `null` if no error occurred.
     * Each element:
     *
     * @var EditPostResponseErrorList[]|null
     */
    public ?array $a_error_list = null;

    /**
     * Exception class name.
     * `null` if there was no mistake.
     *
     * @var string|null
     */
    public ?string $s_class = null;

    /**
     * Code of the error.
     * `null` if there was no mistake.
     *
     * @var string|null
     */
    public ?string $s_code = null;

    /**
     * Status of the request.
     * `null` if there was no mistake.
     *
     * @var string|null
     */
    public ?string $s_status = null;

    /**
     * Error message.
     * `null` if there was no mistake.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    /**
     * The key of the user to edit.
     *
     * If empty, an empty form will be displayed to add a new user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->a_error_list = isset($data['a_error_list']) ? array_map(static fn ($item) => new EditPostResponseErrorList((array)$item), (array)$data['a_error_list']) : null;
        $this->s_class = isset($data['s_class']) ? (string)$data['s_class'] : null;
        $this->s_code = isset($data['s_code']) ? (string)$data['s_code'] : null;
        $this->s_status = isset($data['s_status']) ? (string)$data['s_status'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
