<?php
namespace HtmlTagsGenerator\Elements;

use HtmlTagsGenerator\Elements\HtmlObject;
use HtmlTagsGenerator\Interfaces\Renderizavel;
/**
 * Description of HtmlLabel
 *
 * @author Evandro Lacerda <evandroplacerda@@gmail.com>
 */
class HtmlLabel extends HtmlObject implements Renderizavel
{
    use \HtmlTagsGenerator\Traits\TraitCloseSimpleTag;
    
    protected $label;
    
    public function __construct( $text, $for )
    {
        parent::__construct('label');
        $this->isContainer = false;
        $this->addAttribute('for', $for );
        $this->label = $text;
    }
}
