<?php

namespace Kunstmaan\PagePartBundle\Event;

/**
 * Events
 */
class Events
{

    /**
     * The postCreated event occurs for a given pagePart, after the pagePart is created by factory.
     *
     * This event allows you to set defaults pagePart data depend on page or context
     *
     * @var string
     */
    const POST_CREATED = 'kunstmaan_pagepart.postCreated';

    /**
     * The postPersist event occurs for a given pagePart, after the pagePart is persisted.
     *
     * @var string
     */
    const POST_PERSIST = 'kunstmaan_pagepart.postPersist';
}
