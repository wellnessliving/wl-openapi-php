<?php

namespace WlSdk;

/**
 * A list of types of mail copies.
 *
 * Values:
 * - 2 (`BCC`): Blind carbon copy.
 * - 1 (`CC`): Carbon copy.
 */
class RsMailCopySid
{
    /** Blind carbon copy. */
    public const BCC = 2;

    /** Carbon copy. */
    public const CC = 1;
}
