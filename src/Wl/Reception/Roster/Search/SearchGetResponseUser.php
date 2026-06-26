<?php

namespace WlSdk\Wl\Reception\Roster\Search;

class SearchGetResponseUser
{
    /**
     * First name of a client.
     *
     * @var string|null
     */
    public ?string $s_firstname = null;

    /**
     * Last name of a client.
     *
     * @var string|null
     */
    public ?string $s_lastname = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Url link to a photo of a client.
     *
     * @var string|null
     */
    public ?string $url_photo = null;

    public function __construct(array $data)
    {
        $this->s_firstname = isset($data['s_firstname']) ? (string)$data['s_firstname'] : null;
        $this->s_lastname = isset($data['s_lastname']) ? (string)$data['s_lastname'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_photo = isset($data['url_photo']) ? (string)$data['url_photo'] : null;
    }
}
