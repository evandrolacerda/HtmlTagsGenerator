<?php

namespace HtmlTagsGenerator\Elements;

use HtmlTagsGenerator\Elements\HtmlObject;
use HtmlTagsGenerator\Traits\TraitCloseContainerTag;

/**
 * Description of select
 *
 * @author Evandro Lacerda <evandroplacerda@@gmail.com>
 */
class Select extends HtmlObject implements \HtmlTagsGenerator\Interfaces\Renderizavel
{

    use TraitCloseContainerTag;

    protected $allowMultipleSelection;

    public function __construct( $id, $allowMultipleSelection = false )
    {
        parent::__construct('select');
        $this->addAttribute('id', $id);
        $this->addAttribute('name', $id);
        $this->isContainer = true;
        $this->allowMultipleSelection = (bool) $allowMultipleSelection;
        
        if( false !== $this->allowMultipleSelection ){
            $this->addAttribute('multiple', $allowMultipleSelection );
        }
        
        
    }

}
