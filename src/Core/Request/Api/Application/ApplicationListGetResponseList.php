<?php

namespace WlSdk\Core\Request\Api\Application;

class ApplicationListGetResponseList
{
    /**
     * Application key. Primary key in Sql table.
     *
     * @var string|null
     */
    public ?string $k_api_application = null;

    /**
     * A bot user which is a deemed actor in all API requests made by this application.
     *
     * @var string|null
     */
    public ?string $s_bot = null;

    /**
     * Which groups this user belongs to.
     *
     * @var string|null
     */
    public ?string $s_group = null;

    /**
     * Application identifier to authenticate application.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    /**
     * Description.
     *
     * @var string|null
     */
    public ?string $text_application = null;

    /**
     * Application groups concatenated names.
     *
     * @var string|null
     */
    public ?string $text_application_group = null;

    public function __construct(array $data)
    {
        $this->k_api_application = isset($data['k_api_application']) ? (string)$data['k_api_application'] : null;
        $this->s_bot = isset($data['s_bot']) ? (string)$data['s_bot'] : null;
        $this->s_group = isset($data['s_group']) ? (string)$data['s_group'] : null;
        $this->s_id = isset($data['s_id']) ? (string)$data['s_id'] : null;
        $this->text_application = isset($data['text_application']) ? (string)$data['text_application'] : null;
        $this->text_application_group = isset($data['text_application_group']) ? (string)$data['text_application_group'] : null;
    }
}
