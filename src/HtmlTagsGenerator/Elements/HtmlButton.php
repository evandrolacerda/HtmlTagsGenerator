<?php
namespace HtmlTagsGenerator\Elements;

use HtmlTagsGenerator\Elements\HtmlObject;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HtmlButton
 *
 * @author Evandro Lacerda <evandroplacerda@@gmail.com>
 */
class HtmlButton extends HtmlObject implements \HtmlTagsGenerator\Interfaces\Renderizavel
{
    use \HtmlTagsGenerator\Traits\TraitCloseSimpleTag;
    private $label;
    public function __construct( $type, $label, $id = null )
    {
        parent::__construct('button');
        $this->addAttribute('type', $type );
        $this->addAttribute('name', $id );      
        $this->isContainer = true;
        $this->label = $label;
        
        if( !is_null($id)){
            $this->addAttribute('id', $id );
        }
        
    }

    

}
