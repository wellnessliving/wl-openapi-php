<?php
namespace WlSdk\Wl\Skin\Application\Resource;

/**
 * Response from GET
 */
class ApplicationResourceApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_application = null;

    public function __construct(array $data)
    {
        $this->a_application = isset($data['a_application']) ? (array)$data['a_application'] : null;
    }
}
