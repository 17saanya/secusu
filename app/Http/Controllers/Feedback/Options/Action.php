<?php

declare(strict_types=1);

/*
 * This file is part of SЁCU.
 *
 * (c) CyberCog <open@cybercog.su>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Http\Controllers\Feedback\Options;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Responsable as ResponsableContract;
use Illuminate\Http\Request;

class Action extends Controller
{
    public function __invoke(Request $request): ResponsableContract
    {
        $data = [
            'POST' => [
                'description' => 'Post a feedback',
                'parameters' => [
                    'email' => [
                        'type' => 'string',
                        'description' => 'Sender e-mail',
                        'required' => 'false',
                    ],
                    'body' => [
                        'type' => 'string',
                        'description' => 'Message body',
                        'required' => 'true',
                    ],
                ],
                'example' => [
                    'email' => 'example@mail.com',
                    'body' => 'Hello guys! Your project is very SЁCUred!',
                ],
            ],
        ];

        return new Response($data);
    }
}
