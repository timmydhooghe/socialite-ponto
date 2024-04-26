<?php

namespace SocialiteProviders\Ponto;

use SocialiteProviders\Manager\SocialiteWasCalled;

class PontoExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param  \SocialiteProviders\Manager\SocialiteWasCalled  $socialiteWasCalled
     * @return void
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('ponto', Provider::class);
    }
}
