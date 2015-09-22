<?php
namespace Aluno\Form;



use Zend\Form\Element\Button;
use Zend\Form\Element\Text;
use Zend\Form\Form;
use Post\Form\PostFilter;

class AlunoForm extends Form
{
    protected $objectManager;

    public function __construct()
    {
        parent::__construct(null);
        $this->setAttribute('method', 'POST');
        $this->setAttribute('class', 'form-horizontal');
        $this->setInputFilter(new AlunoFilter());

        //Input nome
        $nome = new Text('nome');
        $nome->setLabel('Nome:')
            ->setAttributes(array(
                    'maxlength' => 45,
                    'class' => 'form-control'
                ));
        $this->add($nome);

        //Input endereco
        $endereco = new Text('endereco');
        $endereco->setLabel('Endereço:')
            ->setAttributes(array(
                    'maxlength' => 60   ,
                    'class' => 'form-control'
                ));
        $this->add($endereco);

        //Botao submit
        $button = new Button('submit');
        $button->setLabel('Salvar')
            ->setAttributes(array(
                    'type' => 'submit',
                    'name' => 'btnEnviar',
                    'class' => 'btn btn-success center'
                ));
        $this->add($button);
     }
}