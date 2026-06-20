<?php
namespace WlSdk\Wl\Skin\Application\Resource;

/**
 * Response from GET
 */
class ApplicationResourceGetResponse
{
    /**
     * The application data. Key is the business key.
     * Value is application resource data for that business.
     * Each element:
     *
     * @var ApplicationResourceGetResponseApplication[]|null
     */
    public ?array $a_application = null;

    public function __construct(array $data)
    {
        $this->a_application = isset($data['a_application']) ? array_map(static fn($item) => new ApplicationResourceGetResponseApplication((array)$item), (array)$data['a_application']) : null;
    }
}
