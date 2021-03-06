<?php

namespace Rubix\ML
{
    /**
     * A small number used in substitution of 0.
     *
     * @var float
     */
    const EPSILON = 1e-8;

    /**
     * The natural logarithm of the epsilon constant.
     *
     * @var float
     */
    const LOG_EPSILON = -18.420680744;

    /**
     * The number of radians in a full circle.
     *
     * @var float
     */
    const TWO_PI = 2.0 * M_PI;

    /**
     * Half of pi.
     */
    const HALF_PI = 0.5 * M_PI;

    /**
     * Coefficient that determines floating point precision of random number generation.
     *
     * @var int
     */
    const PHI = 100000000;
}
