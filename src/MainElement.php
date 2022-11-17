<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Genshin\Element;

enum MainElement: string
{
    // 金元素
    case GOLD = 'Gold';

    // 木元素
    case DENDRO = 'Dendro';

    // 水元素
    case HYDRO = 'Hydro';

    // 火元素
    case PYRO = 'Pyro';

    // 土元素
    case GEO = 'Geo';
}