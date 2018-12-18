<?php

/*
 * This file is part of SЁCU.
 *
 * (c) CyberCog <open@cybercog.su>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Services;

class Hasher
{
    /**
     * String from which the hash will be generated.
     */
    private $allowedChars = 'abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ123456789';

    /**
     * Generates a string with random characters.
     * @param int $length
     * @return string
     */
    public function generate($length = 32)
    {
        $shuffled = str_shuffle($this->allowedChars);
        $hash = substr($shuffled, 0, $length);

        return $hash;
    }
}
