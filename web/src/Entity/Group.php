<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Group
{
    public $tabela;


    public function __construct()
    {
        $this->tabela = new ArrayCollection();
    }

    public function getTabelas(): Collection
    {
        return $this->tabela;
    }
}
