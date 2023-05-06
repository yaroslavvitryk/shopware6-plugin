<?php declare(strict_types=1);

namespace My\Plugin\Storefront\Controller;

use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\Routing\Annotation\Route;
use Shopware\Storefront\Page\GenericPageLoaderInterface;
use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Core\System\SystemConfig\SystemConfigService;
/**
 * @RouteScope(scopes={"storefront"})
 */
class ColorController extends StorefrontController
{
    private SystemConfigService $systemConfigService;
    public function __construct(GenericPageLoaderInterface $genericPageLoader, SystemConfigService $systemConfigService)
    {
        $this->systemConfigService = $systemConfigService;
    }
    /**
     * @Route("/color", name="frontend.example.example", methods={"GET"})
     */
    public function showExample()
    {
        return $this->json(['color' => $this->systemConfigService->get('MyPlugin.config.color')]);
    }
}