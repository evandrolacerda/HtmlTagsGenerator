<?php
namespace HtmlTagsGenerator\Traits;


trait TraitCloseContainerTag
{

    public function render()
    {
        $html = sprintf("<%s ", $this->tagName);

        if ($this->hasAttributes()) {
            foreach ($this->attributes as $chave => $valor) {
                $html .= sprintf("%s=\"%s\" ", $chave, $valor);
            }
        }       
        
        
        $html = trim($html);
        $html .= ">" . PHP_EOL;
        if ($this->hasChild()) {
            foreach ($this->children as $item) {
                $html .= (string) $item . "\n";
            }
        }
        
         $html .= sprintf("</%s>%s", $this->tagName, PHP_EOL );
         
         return $html;
    }

}
