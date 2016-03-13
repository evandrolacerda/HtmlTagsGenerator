<?php
namespace HtmlTagsGenerator\Elements;

use HtmlTagsGenerator\Elements\HtmlObject;

/**
 * Description of HtmlAnchor
 *
 * @author Evandro Lacerda <evandroplacerda@@gmail.com>
 */

class HtmlAnchor extends HtmlObject implements \HtmlTagsGenerator\Interfaces\Renderizavel
{
    use \HtmlTagsGenerator\Traits\TraitCloseSimpleTag;
    protected $label;
    
    public function __construct( $url, $label ) {
        parent::__construct('a');
        $this->isContainer = false;
        $this->label = $label;
        
        $this->addAttribute('href', $url );
    }
}

