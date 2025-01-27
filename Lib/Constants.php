<?php
/**
 * This file is part of workerman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 *
 * @link      http://www.workerman.net/
 */

// Pcre.jit is not stable, temporarily disabled.
ini_set('pcre.jit', 0);

// For onError callback.
const WORKERMAN_CONNECT_FAIL = 1;
// For onError callback.
const WORKERMAN_SEND_FAIL = 2;
