<?php
namespace HtmlTagsGenerator\Traits;


trait TraitCloseSimpleTag
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
        $html .= '>';
        $html .= htmlspecialchars($this->label, ENT_QUOTES, 'UTF-8');
        $html .= sprintf("</%s>", $this->tagName );
         
        return $html;
    }

}
