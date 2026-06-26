<?php

namespace WlSdk\Wl\Session;

class EnvironmentGetResponseSplashScreen
{
    /**
     * Background image.
     *
     * @var array|null
     */
    public ?array $a_background = null;

    /**
     * Background color.
     *
     * @var array|null
     */
    public ?array $a_gradient = null;

    /**
     * Logo image.
     *
     * @var array|null
     */
    public ?array $a_image = null;

    public function __construct(array $data)
    {
        $this->a_background = isset($data['a_background']) ? (array)$data['a_background'] : null;
        $this->a_gradient = isset($data['a_gradient']) ? (array)$data['a_gradient'] : null;
        $this->a_image = isset($data['a_image']) ? (array)$data['a_image'] : null;
    }
}
