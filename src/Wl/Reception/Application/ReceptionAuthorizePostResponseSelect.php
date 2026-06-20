<?php
namespace WlSdk\Wl\Reception\Application;

class ReceptionAuthorizePostResponseSelect
{
    /**
     * First name of the user.
     *
     * @var string|null
     */
    public ?string $text_name_first = null;

    /**
     * Last name of the user.
     *
     * @var string|null
     */
    public ?string $text_name_last = null;

    /**
     * Key of the user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Link to the profile image.
     *
     * @var string|null
     */
    public ?string $url_image = null;

    public function __construct(array $data)
    {
        $this->text_name_first = isset($data['text_name_first']) ? (string)$data['text_name_first'] : null;
        $this->text_name_last = isset($data['text_name_last']) ? (string)$data['text_name_last'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_image = isset($data['url_image']) ? (string)$data['url_image'] : null;
    }
}
