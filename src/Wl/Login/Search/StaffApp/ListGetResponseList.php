<?php
namespace WlSdk\Wl\Login\Search\StaffApp;

class ListGetResponseList
{
    /**
     * Client's email.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * Client's first name.
     *
     * @var string|null
     */
    public ?string $text_name_first = null;

    /**
     * Client's last name.
     *
     * @var string|null
     */
    public ?string $text_name_last = null;

    /**
     * Client's phone.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * The client name.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * The client key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->text_mail = isset($data['text_mail']) ? (string)$data['text_mail'] : null;
        $this->text_name_first = isset($data['text_name_first']) ? (string)$data['text_name_first'] : null;
        $this->text_name_last = isset($data['text_name_last']) ? (string)$data['text_name_last'] : null;
        $this->text_phone = isset($data['text_phone']) ? (string)$data['text_phone'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
