<?php
/**
 * @author Candido Souza
 * Date: 04/09/14
 * 03 - Projeto | Módulo 04 - Design Patterns | Estudos Potal Code Education
 * Linguagem: php
 */

namespace CandidoSouza\Classes\Forms\Utils;
use CandidoSouza\Classes\Forms\Interfaces\ElementInterfaces;


class Element implements ElementInterfaces
{
    public $tag;
    public  $properties;
    protected $elementsFilho;


    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function open()
    {
        echo "\n<{$this->tag}";
        if ($this->properties){
            foreach ($this->properties as $name=>$value){
                echo " {$name}=\"{$value}\"";
            }
        }
        echo ">\n";

    }

    public function close()
    {
        echo "</{$this->tag}>\n";
    }

    public function render()
    {
        $this->open();
    }
    
} 