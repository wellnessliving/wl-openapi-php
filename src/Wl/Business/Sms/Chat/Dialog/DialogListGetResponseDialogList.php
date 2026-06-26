<?php

namespace WlSdk\Wl\Business\Sms\Chat\Dialog;

class DialogListGetResponseDialogList
{
    /**
     * A count of unread messages from the client.
     *
     * @var int|null
     */
    public ?int $i_unread_sms = null;

    /**
     * The name of the client.
     *
     * @var string|null
     */
    public ?string $text_client = null;

    /**
     * Date when was received the last SMS from the client.
     *
     * @var string|null
     */
    public ?string $text_date_last_sms = null;

    /**
     * The text of the last SMS from the client.
     *
     * @var string|null
     */
    public ?string $text_last_sms = null;

    /**
     * UID of the client. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * The link to logo the client.
     *
     * @var string|null
     */
    public ?string $url_profile_logo = null;

    /**
     * The link to profile the client.
     *
     * @var string|null
     */
    public ?string $url_profile = null;

    public function __construct(array $data)
    {
        $this->i_unread_sms = isset($data['i_unread_sms']) ? (int)$data['i_unread_sms'] : null;
        $this->text_client = isset($data['text_client']) ? (string)$data['text_client'] : null;
        $this->text_date_last_sms = isset($data['text_date_last_sms']) ? (string)$data['text_date_last_sms'] : null;
        $this->text_last_sms = isset($data['text_last_sms']) ? (string)$data['text_last_sms'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_profile_logo = isset($data['url_profile_logo']) ? (string)$data['url_profile_logo'] : null;
        $this->url_profile = isset($data['url_profile']) ? (string)$data['url_profile'] : null;
    }
}
