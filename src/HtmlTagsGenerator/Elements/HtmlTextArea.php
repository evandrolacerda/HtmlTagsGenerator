<?php
namespace HtmlTagsGenerator\Elements;

use HtmlTagsGenerator\Elements\HtmlObject;
use HtmlTagsGenerator\Interfaces\Renderizavel;


/**
 * Description of HtmlTextArea
 *
 * @author Evandro Lacerda <evandroplacerda@@gmail.com>
 */
class HtmlTextArea extends HtmlObject implements Renderizavel
{
    use \HtmlTagsGenerator\Traits\TraitCloseSimpleTag;
    
    protected  $label;
    
    public function __construct( $id , $cols, $rows )
    {
        parent::__construct('textarea');
        $this->isContainer = false;
        $this->addAttribute('cols', $cols );
        $this->addAttribute('rows', $rows );
        $this->addAttribute('id', $id );
        $this->addAttribute('name', $id );
    }

}
