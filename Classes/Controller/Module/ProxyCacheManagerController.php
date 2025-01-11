<?php
namespace NeosRulez\Neos\Cloudflare\Controller\Module;

/*
 * This file is part of the NeosRulez.Neos.Cloudflare package.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Mvc\Controller\ActionController;
use Neos\Fusion\View\FusionView;
use NeosRulez\Neos\Cloudflare\Domain\Service\ProxyCacheService;

class ProxyCacheManagerController extends ActionController
{

    protected $defaultViewObjectName = FusionView::class;

    #[Flow\InjectConfiguration(path: 'proxyCache', package: 'NeosRulez.Neos.Cloudflare')]
    protected array $proxyCacheApiConfiguration;

    #[Flow\Inject]
    protected ProxyCacheService $proxyCacheService;

    /**
     * @return void
     */
    public function indexAction(): void
    {
        $this->view->assign('zones', $this->proxyCacheApiConfiguration);
    }

    /**
     * @param string $zoneName
     * @return void
     */
    public function flushAction(string $zoneName): void
    {
        $this->proxyCacheService->flushOne($zoneName);
        $this->redirect('index');
    }

}
