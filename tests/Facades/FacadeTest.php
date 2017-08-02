<?php

/*
 * This file is part of Laravel Omnipay.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Omnipay\Facades;

use BrianFaust\Omnipay\GatewayManager;
use BrianFaust\Omnipay\Facades\Omnipay;
use GrahamCampbell\TestBenchCore\FacadeTrait;
use BrianFaust\Tests\Omnipay\AbstractTestCase;

class FacadeTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'omnipay';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Omnipay::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return GatewayManager::class;
    }
}
