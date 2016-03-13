<?php
namespace HtmlTagsGenerator\Elements;

use HtmlTagsGenerator\Elements\HtmlObject;
use HtmlTagsGenerator\Interfaces\Renderizavel;
/**
 * Description of HtmlDiv
 *
 * @author Evandro Lacerda <evandroplacerda@@gmail.com>
 */
class HtmlDiv extends HtmlObject implements Renderizavel
{
    use \HtmlTagsGenerator\Traits\TraitCloseContainerTag;
    
    public function __construct( $id = null )
    {
        parent::__construct('div');
        
        if( null !== $id ){
            $this->addAttribute('id', $id );
        }
        
        $this->isContainer = true;
    }
}
