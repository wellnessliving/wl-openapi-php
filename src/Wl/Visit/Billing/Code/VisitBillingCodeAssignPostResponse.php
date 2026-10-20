<?php

namespace WlSdk\Wl\Visit\Billing\Code;

/**
 * Response from POST
 */
class VisitBillingCodeAssignPostResponse
{
    /**
     * Version of the billing codes of the visit: a value that changes every time the codes of the visit change.
     *
     * The version comes with the codes and must be posted back together with them. A post that carries an outdated
     * version is rejected with the error `code-version-outdated`, so that the codes another staff member has
     * changed
     * in the meantime are not overwritten without being seen. The answer of a successful post carries the new
     * version,
     * so the codes can be changed again without reading them anew.
     *
     * Empty string if the codes of the visit have never been changed.
     *
     * @var string|null
     */
    public ?string $s_version = null;

    public function __construct(array $data)
    {
        $this->s_version = isset($data['s_version']) ? (string)$data['s_version'] : null;
    }
}
