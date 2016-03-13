<?php
namespace HtmlTagsGenerator\Elements;

use HtmlTagsGenerator\Traits\TraitCloseContainerTag;
use HtmlTagsGenerator\Interfaces\Renderizavel;
use HtmlTagsGenerator\Elements\HtmlObject;

/**
 * Description of HtmlForm
 *
 * @author Evandro Lacerda <evandroplacerda@@gmail.com>
 */
class HtmlForm extends HtmlObject implements Renderizavel {

    use TraitCloseContainerTag;
    
    public function __construct($id) {
        parent::__construct('form');
        $this->isContainer = true;

        parent::addAttribute('id', $id);
    }

    public function setMethod($metodo) {
        $metodos = array('GET', 'POST');

        if (!in_array($metodo, $metodos)) {
            throw new Exception('Método inexistente');
        }

        $this->addAttribute('method', $metodo);
        
        return $this;
    }

    public function setAction($action) {
        $this->addAttribute('action', $action);
        return $this;
    }

}