<?php
namespace HtmlTagsGenerator\Elements;

use HtmlTagsGenerator\Elements\HtmlObject as HtmlObject;
use HtmlTagsGenerator\Traits\TraitCloseSelfCloseTag;


class HtmlLink extends HtmlObject implements \HtmlTagsGenerator\Interfaces\Renderizavel
{
    use TraitCloseSelfCloseTag;
    
    protected $rel;
    protected $type;
    protected $href;
    
    public function __construct( $href, $type, $rel = 'stylesheet'  )
    {
        parent::__construct('link');
        $this->addAttribute('href', $href );        
        $this->setType($type);
        $this->setRel($rel);
    }
    
    public function setType( $type )
    {
        $this->addAttribute('type', $type );
    }
    
    
    public function setRel( $rel )
    {
        $this->rel = $rel;
        $this->addAttribute('rel', $rel );
    }
    
    public function setHref( $href )
    {
        $this->href = $href;
        $this->addAttribute('href', $href );
    }

}


