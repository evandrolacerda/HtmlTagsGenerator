<?php
namespace HtmlTagsGenerator\Traits;


trait TraitCloseSelfCloseTag
{

    public function render()
    {
        
        $html = sprintf("<%s ", $this->tagName );
        
        if ($this->hasAttributes()) {
            foreach ($this->attributes as $chave => $valor) {
                $html .= sprintf("%s=\"%s\" ", $chave, $valor);
            }
        }       
        
        $html = trim($html);
        $html .= ' />';       
         
        return $html;
    }

}


