<?php
require 'vendor/autoload.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="container">
        
    <h1>Hello, world!</h1>
            <div class="panel panel-primary">
                <div class="panel-heading">Contato</div>
                <div class="panel-body">
                    <?php
                    $form = new HtmlTagsGenerator\Elements\HtmlForm('contato');
                    $form->addCssClass('form-horizontal');
                    
                    $divFormGroup = new HtmlTagsGenerator\Elements\HtmlDiv();
                    $divFormGroup->addCssClass('form-group');

                    $labelNome = new \HtmlTagsGenerator\Elements\HtmlLabel('Nome', 'nome');
                    $labelNome->addCssClass('col-sm-2');
                    $labelNome->addCssClass('control-label');

                    $divFormGroup->addChild($labelNome);

                    $divInput = new \HtmlTagsGenerator\Elements\HtmlDiv();
                    $divInput->addCssClass('col-sm-4');

                    $inputNome = new \HtmlTagsGenerator\Elements\HtmlInput('text', 'nome');
                    $inputNome->addCssClass('form-control');

                    $inputNome->addAttribute('value', 'Evandro Pereira de Lacerda');

                    $divInput->addChild($inputNome);
                    $divFormGroup->addChild($divInput);

                    $form->addChild($divFormGroup);

                    $form->setMethod('POST')->setAction('/');

                    $divSelect = new \HtmlTagsGenerator\Elements\HtmlDiv();
                    $divSelect->addCssClass('form-group');
                    
                    $labelSelect = new HtmlTagsGenerator\Elements\HtmlLabel('Sexo', 'sexo');
                    $labelSelect->addCssClass('col-sm-2 control-label');
                    
                    $divSelect->addChild( $labelSelect );
                    $divSelectInner = new HtmlTagsGenerator\Elements\HtmlDiv();
                    
                    $divSelectInner->addCssClass('col-sm-4');
                    $divSelect->addChild( $divSelectInner );

                    $select = new \HtmlTagsGenerator\Elements\Select('carros_s');

                    $select->addCssClass('select_carros');
                    $select->addCssClass('sel_main');

                    $option = new \HtmlTagsGenerator\Elements\HtmlOption('Monza', 'monza', true);
                    $option2 = new \HtmlTagsGenerator\Elements\HtmlOption('Fiesta', 'Fiesta');
                    $option3 = new \HtmlTagsGenerator\Elements\HtmlOption('Cobalt', 'Cobalt');

                    $hiperlink = new \HtmlTagsGenerator\Elements\HtmlAnchor('http://www.uol.com.br', 'UOL');


                    $select->addChild($option);
                    $select->addChild($option2);
                    $select->addChild($option3);
                    
                    $select->addCssClass('form-control');
                    $divSelectInner->addChild( $select );
                    
                    
                    $divText = new \HtmlTagsGenerator\Elements\HtmlDiv();
                    $divText->addCssClass('form-group');
                    $label = new \HtmlTagsGenerator\Elements\HtmlLabel('Mensagem', 'mensagem');
                    $label->addCssClass('control-label col-sm-2');
                    
                    $divText->addChild( $label );
                    
                    $divTextInner = new \HtmlTagsGenerator\Elements\HtmlDiv();
                    $divTextInner->addCssClass('col-sm-4');
                    
                    $textarea = new \HtmlTagsGenerator\Elements\HtmlTextArea('mensagem', 5, 5 );
                    $textarea->addCssClass('form-control');
                    
                    $divTextInner->addChild($textarea);
                    $divText->addChild( $divTextInner );
                    
                    $divButton = new HtmlTagsGenerator\Elements\HtmlDiv();
                    $divButton->addCssClass('form-group');
                    $divButtonInner = new HtmlTagsGenerator\Elements\HtmlDiv();
                    $divButtonInner->addCssClass('col-sm-offset-2 col-sm-4');
                    
                    
                    
                    $button = new \HtmlTagsGenerator\Elements\HtmlButton('button', 'Enviar');
                    $button->addCssClass('btn btn-success');
                    
                    $divButtonInner->addChild( $button );
                    $divButton->addChild( $divButtonInner);
                    $form->addChild( $divSelect );
                    $form->addChild( $divText );
                    $form->addChild( $divButton);
                    //$form->addChild( $hiperlink );
                    //$form->addChild( $select );
                    echo $form->render();
                    ?>
                </div>

            </div>
        </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
