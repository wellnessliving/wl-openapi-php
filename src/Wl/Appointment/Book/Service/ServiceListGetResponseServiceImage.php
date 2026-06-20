<?php

namespace WlSdk\Wl\Appointment\Book\Service;

class ServiceListGetResponseServiceImage
{
    /**
     * The height of the image.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * The width of the image.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * This will be `true` if the image is not set.
     *
     * @var bool|null
     */
    public ?bool $is_empty = null;

    /**
     * The service key.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * The name of the service.
     *
     * @var string|null
     */
    public ?string $s_service = null;

    /**
     * The URL to the image.
     *
     * @var string|null
     */
    public ?string $s_url = null;

    public function __construct(array $data)
    {
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->is_empty = isset($data['is_empty']) ? (bool)$data['is_empty'] : null;
        $this->k_service = isset($data['k_service']) ? (string)$data['k_service'] : null;
        $this->s_service = isset($data['s_service']) ? (string)$data['s_service'] : null;
        $this->s_url = isset($data['s_url']) ? (string)$data['s_url'] : null;
    }
}
