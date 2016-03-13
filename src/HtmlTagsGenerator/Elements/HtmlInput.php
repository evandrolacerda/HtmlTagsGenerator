<?php
namespace HtmlTagsGenerator\Elements;

use HtmlTagsGenerator\Elements\HtmlObject;

/**
 * Description of HtmlInput
 *
 * @author Evandro Lacerda <evandroplacerda@@gmail.com>
 */
class HtmlInput extends HtmlObject implements \HtmlTagsGenerator\Interfaces\Renderizavel
{
    use \HtmlTagsGenerator\Traits\TraitCloseSelfCloseTag;
    
    function __construct( $type, $id )
    {
        parent::__construct('input');
        $this->addAttribute('type', $type );
        $this->addAttribute('id', $id );
        $this->addAttribute('name', $id );
        $this->isContainer = false;
    }

}
