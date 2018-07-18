<?php

namespace Kunstmaan\PagePartBundle\Factory;

use Kunstmaan\PagePartBundle\Event\Events;
use Kunstmaan\PagePartBundle\Event\PagePartEvent;
use Kunstmaan\PagePartBundle\Helper\HasPagePartsInterface;
use Kunstmaan\PagePartBundle\Helper\PagePartInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class PagePartFactory
{

    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    /**
     * @param EventDispatcherInterface $eventDispatcher
     */
    public function __construct(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * @param string $pagePartClassName
     * @param HasPagePartsInterface $page
     * @param string $context
     * @return PagePartInterface
     */
    public function create($pagePartClassName, HasPagePartsInterface $page, $context)
    {
        $pagePart = new $pagePartClassName;
        $this->eventDispatcher->dispatch(
            Events::POST_CREATED,
            new PagePartEvent($pagePart, $page, $context)
        );

        return $pagePart;
    }

}
