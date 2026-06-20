<?php
namespace WlSdk\Wl\Schedule\ClassView;

class ClassViewPostResponseSessionResultLocation
{
    /**
     * Location latitude.
     *
     * @var float|null
     */
    public ?float $f_latitude = null;

    /**
     * Location longitude.
     *
     * @var float|null
     */
    public ?float $f_longitude = null;

    /**
     * Location rating. From 1 to 5.
     *
     * @var float|null
     */
    public ?float $f_rate = null;

    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Location address.
     *
     * @var string|null
     */
    public ?string $s_address = null;

    /**
     * Query to search location on "Google maps".
     *
     * @var string|null
     */
    public ?string $s_map = null;

    /**
     * Location phone.
     *
     * @var string|null
     */
    public ?string $s_phone = null;

    /**
     * Location name.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->f_latitude = isset($data['f_latitude']) ? (float)$data['f_latitude'] : null;
        $this->f_longitude = isset($data['f_longitude']) ? (float)$data['f_longitude'] : null;
        $this->f_rate = isset($data['f_rate']) ? (float)$data['f_rate'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->s_address = isset($data['s_address']) ? (string)$data['s_address'] : null;
        $this->s_map = isset($data['s_map']) ? (string)$data['s_map'] : null;
        $this->s_phone = isset($data['s_phone']) ? (string)$data['s_phone'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
