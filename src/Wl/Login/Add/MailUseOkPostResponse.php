<?php
namespace WlSdk\Wl\Login\Add;

/**
 * Response from POST
 */
class MailUseOkPostResponse
{
    /**
     * No description.
     *
     * @var MailUseOkPostResponseErrorList[]|null
     */
    public ?array $a_error_list = null;

    /**
     * The result code of the request.
     *
     * @var string|null
     */
    public ?string $s_code = null;

    /**
     * The result message of the request.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    public function __construct(array $data)
    {
        $this->a_error_list = isset($data['a_error_list']) ? array_map(static fn($item) => new MailUseOkPostResponseErrorList((array)$item), (array)$data['a_error_list']) : null;
        $this->s_code = isset($data['s_code']) ? (string)$data['s_code'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
