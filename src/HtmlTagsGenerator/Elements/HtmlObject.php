<?php
namespace HtmlTagsGenerator\Elements;


/**
 * Description of HtmlObject
 *
 * @author Evandro Lacerda <evandroplacerda@@gmail.com>
 */
abstract class HtmlObject
{
    protected $isContainer;
    protected $tagName;
    protected $children;
    protected $attributes;
    protected $cssClass;


    public function __construct( $tagName )
    {
        $this->tagName      = (string) $tagName;
        $this->attributes   = array();
        $this->children     = array();
    }
    
    abstract function render();
    
    public function __toString()
    {              
        return $this->render();
    }
    
    public function addAttribute( $name, $value )
    {
        $this->attributes[(string)$name] = (string) $value;
        return $this;
    }
    
    public function addChild(\HtmlTagsGenerator\Interfaces\Renderizavel $child )
    {
        if( $child instanceof \HtmlTagsGenerator\Interfaces\Renderizavel ){
            $this->children[] = $child;
        }else{
            throw new \Exception('Child deve ser um objeto de uma classe filha de HtmlObject');
        }
        return $this;
    }
    
    public function hasChild()
    {
        return ( count( $this->children ) > 0 );
    }
    
    
    public function hasAttributes()
    {
        return ( count( $this->attributes ) > 0 );
    }
    
    
    public function __set($name, $value)
    {
        $this->attributes[(string)$name] = (string) $value;
        return $this;
    }
    
    public function __get($name)
    {
        if(array_key_exists($name, $this->attributes)){
            return $this->attributes[$name];
        }  else {
            return null;
        }
        
    }
    
    public function addCssClass( $className )
    {
        if(strlen($this->cssClass) === 0 ){
            $this->cssClass = $className;
        }else{
            $this->cssClass .= ' '. $className;
        }
        
        $this->addAttribute('class', $this->cssClass );
        return $this;
    }
    
    public function removeCssClass( $className )
    {
        $classes = explode(' ', $this->cssClass );
        
        $newClasses = '';
        foreach ( $classes as $class )
        {
            if( $class !== $className ){
                $newClasses .= ' ' . $class;
            }
        }
        
        $this->cssClass = $newClasses;
        $this->addAttribute('class', $this->cssClass );
        
        return $this;
    }
    
    
    public function cleanAttributes()
    {
        $this->attributes = array();
        return $this;
    }
    
    public function cleanChildren()
    {
        $this->children = array();
        return $this;
    }
    
    
    public function addElement(\HtmlTagsGenerator\Interfaces\Renderizavel $element )
    {
        return $this->addChild($element);
    }   
    
}
