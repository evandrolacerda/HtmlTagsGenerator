<?php
namespace HtmlTagsGenerator\Traits;


trait TraitCloseContainerTag
{

    protected function render()
    {
        $html = sprintf("<%s ", $this->tagName);

        if ($this->hasAttributes()) {
            foreach ($this->attributes as $chave => $valor) {
                $html .= sprintf("%s=\"%s\" ", $chave, $valor);
            }
        }       
        
        
        $html = trim($html);
        $html .= ">\n";
        if ($this->hasChild()) {
            foreach ($this->children as $item) {
                $html .= $item . "\n";
            }
        }
        
         $html .= sprintf("</%s>\n", $this->tagName );
         
         return $html;
    }

}
