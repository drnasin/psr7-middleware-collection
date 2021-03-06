<?php
/*********************************************************************************
 * Created by Ante Drnasin - http://www.drnasin.com                              *
 * Copyright (c) 2017. All rights reserved.                                      *
 *                                                                               *
 * Project Name: Middleware Collection                                           *
 * Repository: https://github.com/drnasin/middleware-collection                  *
 *                                                                               *
 * File: RequestParameterUnknownException.php                                    *
 * Last Modified: 12.5.2017 23:43                                                *
 *                                                                               *
 * The MIT License                                                               *
 *                                                                               *
 * Permission is hereby granted, free of charge, to any person obtaining a copy  *
 * of this software and associated documentation files (the "Software"), to deal *
 * in the Software without restriction, including without limitation the rights  *
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell     *
 * copies of the Software, and to permit persons to whom the Software is         *
 * furnished to do so, subject to the following conditions:                      *
 *                                                                               *
 * The above copyright notice and this permission notice shall be included in    *
 * all copies or substantial portions of the Software.                           *
 *                                                                               *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR    *
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,      *
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE   *
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER        *
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, *
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN     *
 * THE SOFTWARE.                                                                 *
 *********************************************************************************/

namespace App\Exceptions;

use App\Utils\HttpStatusCodes;
use Throwable;

/**
 * Class RequestParameterUnknownException
 *
 * Exception carries Http Status code 400
 *
 * @package   App\Exceptions
 * @author    Ante Drnasin
 */
class RequestParameterUnknownException extends \Exception
{
    /**
     * RequestParameterUnknownException constructor.
     *
     * @param string    $message
     * @param int       $code
     * @param Throwable $previous
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $message = sprintf("unknown parameter(s) in request: %s", $message);
        parent::__construct($message, HttpStatusCodes::STATUS_BAD_REQUEST, $previous);
    }
}