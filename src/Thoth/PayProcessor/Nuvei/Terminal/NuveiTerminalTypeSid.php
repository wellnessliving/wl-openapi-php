<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei\Terminal;

/**
 * List of {@link \WlSdk\Thoth\PayProcessor\PayProcessorSid} supported terminal types.
 *
 * Values:
 * - 2 (`OMNICHANNEL`): Card terminals that work via OMNI Channel API.
 *   Requires registration on Hardware page.
 *
 *   See Nuvei/doc/OMNI_Channel_ISO20022_V2.38.pdf
 * - 1 (`MAGTEK_USB`): Magtek USB.
 *   This type of terminal does not require registration on Hardware page.
 */
class NuveiTerminalTypeSid
{
    /** Card terminals that work via OMNI Channel API. */
    public const OMNICHANNEL = 2;

    /** Magtek USB. */
    public const MAGTEK_USB = 1;
}
