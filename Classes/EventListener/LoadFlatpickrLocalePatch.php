<?php

declare(strict_types=1);

namespace Bmack\GenZ\EventListener;

use TYPO3\CMS\Backend\Controller\Event\BeforeBackendPageRenderEvent;
use TYPO3\CMS\Core\Attribute\AsEventListener;

#[AsEventListener('gen-z/flatpickr-locale-patch')]
final readonly class LoadFlatpickrLocalePatch
{
    public function __invoke(BeforeBackendPageRenderEvent $event): void
    {
        $event->pageRenderer->loadJavaScriptModule('@bmack/gen-z/flatpickr-locale-patch.js');
    }
}
