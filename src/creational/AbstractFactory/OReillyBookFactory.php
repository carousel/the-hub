<?php

namespace Creational\AbstractFactory;


class OReillyBookFactory extends AbstractBookFactory
{
    private $context = "OReilly";

    /**
     * @return OReillyMySQLBook
     */
    public function makeMySQLBook()
    {
        return new OReillyMySQLBook();
    }

    /**
     * @return OReillyPHPBook
     */
    public function makePHPBook()
    {
        return new OReillyPHPBook;
    }
}
