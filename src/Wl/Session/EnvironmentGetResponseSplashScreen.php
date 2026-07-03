<?php

namespace WlSdk\Wl\Session;

class EnvironmentGetResponseSplashScreen
{
    /**
     * Background image.
     *
     * @var EnvironmentGetResponseSplashScreenBackground|null
     */
    public ?EnvironmentGetResponseSplashScreenBackground $a_background = null;

    /**
     * Background color.
     *
     * @var EnvironmentGetResponseSplashScreenGradient|null
     */
    public ?EnvironmentGetResponseSplashScreenGradient $a_gradient = null;

    /**
     * Logo image.
     *
     * @var EnvironmentGetResponseSplashScreenImage|null
     */
    public ?EnvironmentGetResponseSplashScreenImage $a_image = null;

    public function __construct(array $data)
    {
        $this->a_background = isset($data['a_background']) ? new EnvironmentGetResponseSplashScreenBackground((array)$data['a_background']) : null;
        $this->a_gradient = isset($data['a_gradient']) ? new EnvironmentGetResponseSplashScreenGradient((array)$data['a_gradient']) : null;
        $this->a_image = isset($data['a_image']) ? new EnvironmentGetResponseSplashScreenImage((array)$data['a_image']) : null;
    }
}
