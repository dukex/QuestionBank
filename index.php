<?php
    $perguntas = array();
    $perguntas["99"] = array("pergunta"=>"Quantos são 20 + 58?",
                         "repostas"=>array("62","38","78","86"),
                         "corretae"=>"3",
                         "serie"=>"2",
                         "ensino"=>"fundamental",
                         "materia"=>"2",
                         );
    $perguntas["100"] = array("pergunta"=>"Qual Raiz Quadrada de  9?",
                         "repostas"=>array("3","81","4,5","6"),
                         "corretae"=>"1",
                         "serie"=>"5",
                         "ensino"=>"fundamental",
                         "materia"=>"2",
                         );
    $perguntas["101"] = array("pergunta"=>"Na figura um quadrado foi dividido ao meio, pela diagonal.Depois, a metade superior foi dividida ao meio, e assim sucessivamente.Imagine que seja sempre possivel continuar dividindo a figura<br />
                         Pode-se afirmar que a décima segunda partição da figura encontra-se a representação do número",
                         "repostas"=>array("1/2^10","1/2^12","1/2^13","1/2^15"),
                         "corretae"=>"2",
                         "serie"=>"1",
                         "ensino"=>"medio",
                         "materia"=>"2",
                         );
    
    $perguntas["91"] = array("pergunta"=>"Nesta figura, quantos cubos pequenos foram colocados juntos para formar o cubo grande?",
                         "repostas"=>array("7","8","12","24"),
                         "corretae"=>"2",
                         "serie"=>"1",
                         "ensino"=>"medio",
                         "materia"=>"2",
                        );

    function pr($data){
        echo '<pre>'.print_r($data,true).'</pre>';
    }
    function buscapormateria($materia = null, $perguntas = array()){
        if(!empty($materia)):
            foreach($perguntas as $k=>$pergunta):
                $pergunta['materia'] = !empty($pergunta['materia'])? $pergunta['materia'] : null;
                if($pergunta['materia'] == $materia):
                    $return[] = $pergunta;
                endif;
            endforeach;
            if(!empty($return)):
                return $return;
            else:
                return null;
            endif;
        else:
            return null;
        endif;  
    }
   function filtraperguntas($grade = array(), $perguntas = array(), $materia = null){
        //pr($perguntas);
        #pr($grade);
        foreach($grade as $k=>$i):
            foreach($perguntas as $key=>$pergunta):
                $pergunta['ensino'] =!empty($pergunta['ensino'])?$pergunta['ensino']:null;
                if($pergunta['ensino'] == $k):
                    foreach($i as $serie):
                        $pergunta['serie'] =!empty($pergunta['serie'])?$pergunta['serie']:null;
                        if($pergunta['serie'] == $serie):
                           $perguntafiltradas[$key] = $pergunta;
                        endif;
                    endforeach;
                endif;
            endforeach;
        endforeach;
        if(!empty($perguntafiltradas)):
            return $perguntafiltradas;
        else:
            return null;
        endif;
    }
    echo '<?xml version="1.0" encoding="utf-8"?>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
    <head profile="http://gmpg.org/xfn/11">
        <title> Questions Bank</title>
        <meta http-equiv="content-language" content="pt-BR" />
        <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
        <meta name="author" content="Emerson Vinicius" />
        <meta name="robots" content="index,follow" />
        <link href="" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <?php if(!empty($_GET["step"])): 
        if($_GET["step"] == "filter"): ?>
            <form name="filter" action="?step=choice" method="POST">
                <select name="materia">
                    <option value=""></option>
                    <option value="1">Português</option>
                    <option value="2">Matemática</option>
                </select>
                <br style="clear:both" />
                <fieldset style="width:250px;float:left">
                     <legend>Ensino Fundamental I</legend>
                    <div style="display:block"><input type="checkbox" name="grade[fundamental][]" value="1" id="f1" /><label for="f1">1º Série</label></div>
                    <div style="display:block"><input type="checkbox" name="grade[fundamental][]" value="2" id="f2" /><label for="f2">2º Série</label></div>
                    <div style="display:block"><input type="checkbox" name="grade[fundamental][]" value="3" id="f3" /><label for="f3">3º Série</label></div>
                    <div style="display:block"><input type="checkbox" name="grade[fundamental][]" value="4" id="f4" /><label for="f4">4º Série</label></div>
                </fieldset>
                <fieldset style="width:250px;float:left">
                    <legend>Ensino Fundamental II</legend>
                    <div style="display:block"><input type="checkbox" name="grade[fundamental][]" value="5" id="f5" /><label for="f5">5º Série</label></div>
                    <div style="display:block"><input type="checkbox" name="grade[fundamental][]" value="6" id="f6" /><label for="f6">6º Série</label></div>
                    <div style="display:block"><input type="checkbox" name="grade[fundamental][]" value="7" id="f7" /><label for="f7">7º Série</label></div>
                    <div style="display:block"><input type="checkbox" name="grade[fundamental][]" value="8" id="f8" /><label for="f8">8º Série</label></div>
                </fieldset>
                <fieldset style="width:250px;float:left">
                    <legend>Ensino Médio</legend>
                    <div style="display:block"> <input type="checkbox" name="grade[medio][]" value="1" id="m1" /><label for="m1">1º Ano</label></div>
                    <div style="display:block"> <input type="checkbox" name="grade[medio][]" value="2" id="m2" /><label for="m2">2º Ano</label></div>
                    <div style="display:block"> <input type="checkbox" name="grade[medio][]" value="3" id="m3" /><label for="m3">3º Ano</label></div>
                </fieldset> 
                <br style="clear:both" />
                <input value="Filtrar" type="submit"/>
            </form>
        
    <?php elseif($_GET["step"] == "choice"):
        if(!empty($_POST['materia'])):
       
            $pormateria = buscapormateria($_POST['materia'], $perguntas);
            if(!empty($pormateria)):
                if(!empty($_POST['grade'])):
                     $_perguntas = filtraperguntas($_POST['grade'], $pormateria);
                    if(is_null($_perguntas)):
                    
                        echo "Nenhuma questões com os criterios escolhidos [Error]";
                    endif;
                else:
                    $_perguntas = $pormateria;
                endif;
            else:
                echo "Nenhuma questões com essa materia [Error]";
            endif;
        else:
            if(!empty($_POST['grade'])):
                $_perguntas = filtraperguntas($_POST['grade'], $perguntas);
                if(is_null($_perguntas)):
                        echo "Nenhuma questões com os criterios escolhidos [Error]";
                endif;
            else:
                echo "Nenhum criterio selecionado [Notice]";
            endif;
        endif;
   
         if(!empty($_perguntas)):?>  
            <form>
            <?php
            foreach($_perguntas as $_pergunta):
                echo "<p>{$_pergunta['pergunta']}</p>";
            endforeach;
            ?>
                <input value="Criar Prova" type="submit"/>
            </form>
        <?php endif;
    elseif($_GET["step"] == "finalize"): ?>
        
        
        <?php endif;
    else:?>
            <a href="?step=filter">Iniciar</a>
            
    <?php endif; ?>
    </body>
</html>