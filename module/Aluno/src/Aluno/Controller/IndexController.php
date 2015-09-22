<?php
namespace Aluno\Controller;

use Base\Controller\AbstractController;

class IndexController extends AbstractController
{

    function __construct()
    {
        $this->form = 'Aluno\Form\AlunoForm';
        $this->controller = 'aluno';
        $this->route = 'aluno/default';
        $this->service = 'Aluno\Service\AlunoService';
        $this->entity = 'Aluno\Entity\Aluno';
    }

}