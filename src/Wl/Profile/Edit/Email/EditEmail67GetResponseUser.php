<?php

namespace WlSdk\Wl\Profile\Edit\Email;

class EditEmail67GetResponseUser
{
    /**
     * First name.
     *
     * @var string|null
     */
    public ?string $text_firstname = null;

    /**
     * Last name.
     *
     * @var string|null
     */
    public ?string $text_lastname = null;

    /**
     * Phone.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * URL to photo.
     *
     * @var string|null
     */
    public ?string $url_photo = null;

    public function __construct(array $data)
    {
        $this->text_firstname = isset($data['text_firstname']) ? (string)$data['text_firstname'] : null;
        $this->text_lastname = isset($data['text_lastname']) ? (string)$data['text_lastname'] : null;
        $this->text_phone = isset($data['text_phone']) ? (string)$data['text_phone'] : null;
        $this->url_photo = isset($data['url_photo']) ? (string)$data['url_photo'] : null;
    }
}
