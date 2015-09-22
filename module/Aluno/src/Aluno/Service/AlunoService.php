<?php
namespace Aluno\Service;

use Base\Service\AbstractService;
use Doctrine\ORM\EntityManager;

class AlunoService extends AbstractService
{
    public function __construct(EntityManager $em)
    {
        $this->entity = 'Aluno\Entity\Aluno';
        parent::__construct($em);
    }
}