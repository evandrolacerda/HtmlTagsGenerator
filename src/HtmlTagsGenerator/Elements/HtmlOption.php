<?php
namespace HtmlTagsGenerator\Elements;


/**
 * Description of HtmlOption
 *
 * @author Evandro Lacerda <evandroplacerda@@gmail.com>
 */
class HtmlOption extends \HtmlTagsGenerator\Elements\HtmlObject implements \HtmlTagsGenerator\Interfaces\Renderizavel
{
        
    protected $label;
    protected $isSelected;
    protected $allowMultipleSelection;


    public function __construct( $label, $value, $selected = false )
    {
        parent::__construct('option');
        $this->isContainer = false;
        $this->label = $label;
        $this->isSelected = (bool) $selected;
        $this->addAttribute('value', htmlspecialchars($value, ENT_QUOTES, 'UTF-8') );
    }

    public function render()
    {
        $html = sprintf("<%s ", $this->tagName );
        
        if ($this->hasAttributes()) {
            foreach ($this->attributes as $chave => $valor) {
                $html .= sprintf("%s=\"%s\" ", $chave, $valor);
            }
        }
        if( $this->isSelected ){
            $html .= 'selected';
        }
        
        
        $html = trim($html);
        $html .= '>';
        $html .= htmlspecialchars($this->label, ENT_QUOTES, 'UTF-8');
        $html .= sprintf("</%s>", $this->tagName );
         
        return $html;
    }

}
