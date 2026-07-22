<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom\Terminal;

/**
 * List of {@link \WlSdk\Thoth\PayProcessor\PayProcessorSid} supported terminal types.
 *
 * Values:
 * - 2 (`JS_SDK`): Terminals that work via Stripe javascript SDK.
 *   Requires registration on Hardware page.
 * - 1 (`MAGTEK_USB`): Magtek USB.
 *   This type of terminal does not require registration on Hardware page.
 */
class StripeTerminalTypeSid
{
    /** Terminals that work via Stripe javascript SDK. */
    public const JS_SDK = 2;

    /** Magtek USB. */
    public const MAGTEK_USB = 1;
}
