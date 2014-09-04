<?php
/**
 * @author Candido Souza
 * Date: 26/08/14
 * 02 - Projeto | Módulo 04 - Design Patterns | Estudos Potal Code Education
 * Linguagem: php
 */

namespace CandidoSouza\Classes\Forms\Types;
use CandidoSouza\Classes\Forms\Utils\Element;


class Label
{
    public $nome;

    function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function render(Element $elementos)
    {
        $tag = $elementos;
        $tag->tag = $this->nome;
        $tag->class = "col-sm-2 control-label";
        $tag->render();
        $tag->close();

    }

} 