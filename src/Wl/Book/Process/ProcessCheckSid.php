<?php
namespace WlSdk\Wl\Book\Process;

/**
 * List of checks that are performed before session book.
 * 
 * Last used ID: 2.
 * 
 * Values:
 * - 1 (`CARD`): Check that a client has a credit card.
 * - 2 (`WAIVER`): Check a client has no unsigned waiver.
 */
enum ProcessCheckSid: int
{
    case CARD = 1;
    case WAIVER = 2;
}
