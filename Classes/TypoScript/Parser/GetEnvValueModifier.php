<?php
namespace Undkonsorten\GetenvModifier\TypoScript\Parser;

/**
 * This file is part of the TYPO3 CMS extension getenv_modifier.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */


/**
 * This class adds a new TypoScript value modifier to TS syntax:
 *
 * Example (in TS constants):
 * <code>
 * myConstant = defaultValue
 * # myConstant will be overridden if env var is defined at all.
 * # Empty env vars will override, too!
 * myConstant := getEnv(TYPO3_MY_CONSTANT)
 * </code>
 *
 * Class GetEnvValueModifier
 * @package Undkonsorten\GetenvModifier\TypoScript\Parser
 */
class GetEnvValueModifier
{

    /**
     * Name of the modifier in TS syntax
     *
     * @var string
     */
    const MODIFIER_KEY = 'getEnv';

    /**
     * Evaluates the modifier
     *
     * @param array $params
     *      'currentValue' = value before evaluation,
     *      'functionArgument' = env var to read
     * @return string|null
     */
    public function evaluate(array $params)
    {
        $newValue = $params['currentValue'];
        $environmentValue = getenv(trim($params['functionArgument']));
        if ($environmentValue !== false) {
            $newValue = $environmentValue;
        }
        return $newValue;
    }

}
