<?php

namespace Kunstmaan\PagePartBundle\Event;

use Kunstmaan\PagePartBundle\Helper\HasPagePartsInterface;
use Kunstmaan\PagePartBundle\Helper\PagePartInterface;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Response;

/**
 * PagePartEvent
 */
class PagePartEvent extends Event
{
    /**
     * @var PagePartInterface
     */
    protected $pagePart;

    /**
     * @var Response
     */
    private $response;

    /**
     * @var string|null
     */
    private $context;

    /**
     * @var HasPagePartsInterface|null
     */
    private $page;

    /**
     * @param PagePartInterface $pagePart
     * @param HasPagePartsInterface|null $page
     * @param string|null $context
     */
    public function __construct(PagePartInterface $pagePart, HasPagePartsInterface $page = null, $context = null)
    {
        $this->pagePart = $pagePart;
        $this->context = $context;
        $this->page = $page;
    }

    /**
     * @return PagePartInterface
     */
    public function getPagePart()
    {
        return $this->pagePart;
    }

    /**
     * @param PagePartInterface $pagePart
     */
    public function setPagePart(PagePartInterface $pagePart)
    {
        $this->pagePart = $pagePart;
    }

    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param Response $response
     */
    public function setResponse(Response $response)
    {
        $this->response = $response;
    }

    /**
     * @return string|null
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param string|null $context
     */
    public function setContext($context)
    {
        $this->context = $context;
    }

}
