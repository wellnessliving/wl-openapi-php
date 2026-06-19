<?php
namespace WlSdk\Wl\Insurance\Catalog;

/**
 * Response from GET
 */
class ProgramListApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_wellness_program = null;

    public function __construct(array $data)
    {
        $this->a_wellness_program = isset($data['a_wellness_program']) ? (array)$data['a_wellness_program'] : null;
    }
}
