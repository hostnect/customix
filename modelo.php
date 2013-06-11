<?php
$modelo = $_GET['modelo'];

if (empty($modelo) || $modelo != 'iphone5' && $modelo != 'iphone4' && $modelo != 'galaxys3' && $modelo != 'gnote2')  {
	
	echo("<script language = 'javascript'> alert('por gentileza, selecione os modelos pelos links do site!'); </script>");
	
	echo("<script language = 'javascript'> location.href = 'index.html'; </script>");
	} else 

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Customize a sua Case</title>


    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.html">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.html">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.html">
                                   <link rel="shortcut icon" href="assets/ico/favicon.html">


<style type="text/css">


body { background-image:url(img/bg.png);}

#tudo {width: 100%; margin: 0 auto; overflow:hidden;}

#topo {width: 102%; height:80px; background-color:#E9E9E9; margin-top: -10px; padding: 10px; margin-left: -20px;  overflow:hidden;}

.logo {width: 300px; margin: 0 auto;}

#etapas{width: 1000px; margin: 0 auto; overflow: hidden;}

#etapas ul{width: 1000px; padding: 10px; font-family:Arial, Helvetica, sans-serif; color: #E9E9E9;}

#etapas li{display: inline; padding: 10px; padding: 12px 40px 12px 40px; background-color: #373435; margin: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px; }

#etapas li a{font-family:Arial, Helvetica, sans-serif; color: #E9E9E9; text-decoration: none;}

#etapas li a:hover{color:#6CC;}

.selected {color: #6CC;}

#modelos {width: 100%; max-width: 940px; margin: 0 auto; padding: 50px;   height: 350px;  overflow:hidden;}

#modelos .img1, .img2, .img3, .img4{padding: 20px; padding-top: 0; border: none; float: left; margin: 10px; -webkit-transition: margin 0.5s ease-out; -moz-transition: margin 0.5s ease-out; -o-transition: margin 0.5s ease-out;}

/*#modelos .img2{padding: 50px; border: none; float: left; margin: 15px; -webkit-transition: margin 0.5s ease-out; -moz-transition: margin 0.5s ease-out; -o-transition: margin 0.5s ease-out;}

#modelos .img3{padding: 50px; border: none; float: left; margin: 15px; -webkit-transition: margin 0.5s ease-out; -moz-transition: margin 0.5s ease-out; -o-transition: margin 0.5s ease-out;}*/

#modelos .img1:hover, .img2:hover, .img3:hover, .img4:hover { margin-top:-30px; } 

#rodape {width: 102%; height: 176px; margin: 0 auto; padding: 0;  background-color: #373435; position: absolute;  left: -2%; overflow: hidden;}

.imagem {width: 1000px; margin: 0 auto;}

.linha {width: 100%; margin-top: 14px;}
#formulario input {width: 20px;}


</style>

 <script src="http://www.google.com/jsapi" type="text/javascript"></script>
        <script type="text/javascript" >
           google.load("jquery", "1.6.3");
           google.load("jqueryui", "1.8.16");
        </script>
        
        <link rel="stylesheet" type="text/css"
    href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css"/>
<script type="text/javascript" src="jquery.form.js"></script>
<style>
<!--
.drag{position:relative;cursor:point}
-->
</style>
<script language="JavaScript" type="text/javascript" src="drag/source/org/tool-man/core.js"></script>
<script language="JavaScript" type="text/javascript" src="drag/source/org/tool-man/events.js"></script>
<script language="JavaScript" type="text/javascript" src="drag/source/org/tool-man/css.js"></script>
<script language="JavaScript" type="text/javascript" src="drag/source/org/tool-man/coordinates.js"></script>
<script language="JavaScript" type="text/javascript" src="drag/source/org/tool-man/drag.js"></script>



        <script src="dragndrop.html" type="text/javascript"></script>
        <style type="text/css">
            .col{
				z-index: 1;
				width: 200px;
    float:left;
	cursor:point;
}

#col1{
	
    width:200px;
    height:420px;
   border: 1px solid #CCC;
	margin-left: 10px;
	 -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px;

}

#col3{
	float: left;
	margin-right: -7px;
	margin-top: 35px;
    width:200px;
    height:420px;
   border: 1px solid #CCC;
	margin-left: 10px;
	 -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px;

}
.drag{
    width:100px;
   
    height:40px;
    position:relative;
    
}

.drag3{
    width:100px;
   
    height:40px;
    position:relative;
    
}
#droppable{
    width:234px;
    height :400px;
    border:1px solid black;
    }

.redi {border: 1px solid #000;}

.troca_modelo a{color: #CCC; font-family:Arial, Helvetica, sans-serif; font-size: 13px; padding: 5px; text-decoration: none; border: 1px dashed #CCC;}
.troca_modelo a:hover {background-color:#333; }
        </style>


<script type="text/javascript">
$(document).ready(function(){
     /* #imagem � o id do input, ao alterar o conteudo do input execurar� a fun��o baixo */
     $('#imagem').live('change',function(){
         $('#drag1').html('<img src="ajax-loader.gif" alt="Enviando..."/> Enviando...');
        /* Efetua o Upload sem dar refresh na pagina */           $('#formulario').ajaxForm({
            target:'#drag1' // o callback ser� no elemento com o id #visualizar
         }).submit();
	
     });
	
 })
</script>


<script language="javascript">
function carregarContextoCanvas(idCanvas){
   var elemento = document.getElementById(idCanvas);
   if(elemento && elemento.getContext){
      var contexto = elemento.getContext('2d');
      if(contexto){
         return contexto;
      }
   }
   return FALSE;
}



	
	window.onload = function(){
   //Recebemos o elemento canvas
   var ctx = carregarContextoCanvas('design');
   if(ctx){
      //Crio uma imagem com um objeto Image de Javascript
      var img = new Image();
      //indico a URL da imagem
      	 
	   <?php if ($modelo == 'iphone5') {echo 'img.src = "img/iphone5.png"';}?>
	   <?php if ($modelo == 'iphone4') {echo 'img.src = "img/iphone4.png"';}?>
	   <?php if ($modelo == 'galaxys3') {echo 'img.src = "img/galaxys3.png"';}?>
	   <?php if ($modelo == 'gnote2') {echo 'img.src = "img/note2_back.png"';}?>
	   <?php { //else verify $modelo?>
	   	   	            //defino o evento onload do objeto imagen
      img.onload = function(){
         //incluo a imagen no canvas
         ctx.drawImage(img, 10, 10);
      }
   }
   
   /*var group
	var coordinates = ToolMan.coordinates()
	var drag = ToolMan.drag()
   
 var boxRegionConstraint = document.getElementById("drag1")
	group = drag.createSimpleGroup(boxRegionConstraint)
	var origin = coordinates.create(0, 10)
	group.addTransform(function(coordinate, dragEvent) {
		var originalTopLeftOffset = 
				dragEvent.topLeftOffset.minus(dragEvent.topLeftPosition)
		return coordinate.constrainTo(origin, originalTopLeftOffset)
	})*/
}

	
	


	

</script>


<link rel="stylesheet" type="text/css" href="drag/common/common.html"/>
<style type="text/css">
	/*div {
		margin: 0px;
		padding: 0px;
	}
	.verticalgridline {
		padding-top: 27px;
	}
	.box, .handle {
		font-size: 14px;
		font-family: Arial, sans-serif;
		border: 1px solid #aaa;
	}
	.box {
		float: left;
		padding: 0px;
		width: 123px;
		height: 123px;
		margin: 5px;
		
		z-index: 1;
		max-width: 200px;
	}
	.handle {
		cursor: move;
		height: 14px;
		border-width: 0px 0px 1px 0px;
		background: #666;
		color: #eee;
		padding: 2px 6px;
		margin: 0px;
	}
	.box p {
		font-size: 12px;
		margin: 5px 5px 10px 5px;
		text-align: left;
		white-space: normal;
	}
	#boxDrag, #boxVerticalOnly, #boxHorizontalOnly, #drag1, 
	#boxThreshold, #boxAbsolute {
		cursor: move;
	}
	#boxAbsolute {
		position: absolute;
		bottom: 0px;
		right: 0px;
	}*/
</style>

<script type="text/javascript">


$(document).ready(function () {

    var x = null;

    //Make element draggable
    $(".drag").draggable({
        helper: 'clone',
        cursor: 'move',
     
    });
	
	$("#drag").draggable({
		
		revert : function(event, ui) {
            // on older version of jQuery use "draggable"
            // $(this).data("draggable")
            $(this).data(".drag").originalPosition = {
                top : 0,
                left : 0
            };
            // return boolean
            return !event;
            // that evaluate like this:
            // return event !== false ? false : true;
        }
		
    });
	
	

            $("#droppable").droppable({

                drop: function (e, ui) {

                    if ($(ui.draggable)[0].id != "") {
                        x = ui.helper.clone();
                    ui.helper.remove();
                    x.draggable({
                    containment: '#droppable',
					
				cursor: 'move',

	

                      
                    });


                    x.appendTo('#droppable');
			$('.redi').resizable();
			
			
			
			
                }

                }
            });
			
		

	
});






</script>







<script type="text/javascript" language="javascript">// <![CDATA[
function showHide() {
    var ele = document.getElementById("showHideDiv");
	var ele1 = document.getElementById("showHideDiv2");
	var ele2 = document.getElementById("showHideDiv3");
   ele.style.display = "block";
    ele1.style.display = "none";
	 ele2.style.display = "none";
  
}


function showHide1() {
    var ele = document.getElementById("showHideDiv");
	var ele1 = document.getElementById("showHideDiv2");
	var ele2 = document.getElementById("showHideDiv3");
   ele.style.display = "none";
    ele1.style.display = "block";
	 ele2.style.display = "none";
}
function showHide2() {
	var ele = document.getElementById("showHideDiv");
	var ele1 = document.getElementById("showHideDiv2");
	var ele2 = document.getElementById("showHideDiv3");
	 ele.style.display = "none";
	  ele1.style.display = "none";
		ele2.style.display = "block";
	
}

function showHide3() {
	var ele = document.getElementById("showHideDiv");
	var ele1 = document.getElementById("showHideDiv2");
	var ele2 = document.getElementById("showHideDiv3");
	  ele1.style.display = "none";
		ele.style.display = "none";
		ele2.style.display = "none";
	
}

// ]]></script>

<style type="text/css">
#resizable {
width: 160px;
height: 90px;
padding: 0.5em;
border:1px solid #888;
background-color: red;
}
</style>





</head>

<body>

<div id="topo"> 

<div class="logo"><a href="index.html"><img src="img/logo.png" border="0"/></a> </div>

<div class="login"> </div>

<div class="linha"><img src="img/linha.png" /></div>

</div>

<div id="tudo">


<div id="etapas">

<ul>

<li><a href="index.html">1. SELECIONE SEU APARELHO</a></li>
<li class="selected">2. DESIGN DA CASE</li>
<li>3. APROVAÇÃO E COMPRA</li>


</ul>


<div class = "col2" id="col3" style="background-image:url(img/main_bg.png); ">
                <div id="drag2" class="drag3">
     
              <br />

  <form method="post" action="#">
                <div class="cor" style="width: 200px; margin: 0 auto; text-align:center; font-family:Arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; color: #CCC;" >Alterar cor da Case</div>
<p style="width: 200px; margin-left: 5px;">

<input type="button" onclick="return showHide();" style="width:32px; height:32px; background-color: #413f3f; border: 1px dashed #CCC; margin: 5px;"    />
<input type="button"  onclick="return showHide1();" style="width:32px; height:32px; background-color: #df3d3d; border: 1px dashed #CCC; margin: 5px;" />
<input type="button" onclick="return showHide2();" style="width:32px; height:32px; background-color: #FFFFFF; border: 1px dashed #CCC; margin: 5px;" />
<input type="button" value="X" onclick="return showHide3();" style="width:32px; height:32px; background-color: #413f3f; border: 1px dashed #CCC; color:#FFF; margin: 5px;" />

</p>
</form>

   <p class="troca_modelo" style="width: 200px; text-align:center; margin-left: -5px;"><a href="index.html">Escolher outro modelo</a></p>
   
   
   
   
   <!-- funções novas -->
  Estilo1<br />
Estilo2<br />
<!-- fim funções novas -->
   
                </div>
             
            </div>
<div class = "col" id="col1" style="background-image:url(img/main_bg.png); float: right; margin-right: 165px; margin-top: 35px; ">
     <form id="formulario" method="post" enctype="multipart/form-data" action="upload.php" style=" padding-left: 30px;">
<br />


<span class="btn btn-file">Enviar imagem
<input type="file" id="imagem" name="imagem" />
</span>

</form>
                <div id="drag1" class="drag" style="padding-left: 30px;">
                </div>
            </div>

<div id="wrapper">
       
            <div id="centro" style="height: 434px; float:left; width:274px; margin: 0 auto; border: 1px solid #fff; padding: 30px 80px 30px 80px;  -moz-border-radius: 20px; -webkit-border-radius: 20px; border-radius: 20px; background-image:url(img/main_bg.png); background-position: center; 
   -moz-box-shadow:    0 0 10px #000000;
   -webkit-box-shadow:  0 0 10px #000000;
   box-shadow:          0 0 10px #000000; margin-right: -50px;
">  

<?php if ($modelo == 'iphone5') {
	$div = '<img id="showHideDiv" style="display: none; background-image:url(img/i5_cor_grafite.png); width: 274px; height: 434px; position: absolute; top: 188px; left: 35.5%;">
          <img id="showHideDiv2" style="display: none; background-image:url(img/i5_cor_vermelho.png); width: 274px; height: 434px; position: absolute; top: 188px; left: 35.5%; left: 35.5%; min-width: 274px;">
          <img id="showHideDiv3" style="display: none; background-image:url(img/i5_cor_branco.png); width: 274px; height: 434px; position: absolute; top: 188px; left: 35.5%;">
	';
	echo $div;
}?>
<?php if ($modelo == 'iphone4') {
	$div = '<img id="showHideDiv" style="display: none; background-image:url(img/i4_cor_grafite.png); width: 274px; height: 434px; position: absolute; top: 187px; left: 35.5%;">
          <img id="showHideDiv2" style="display: none; background-image:url(img/i4_cor_vermelho.png); width: 274px; height: 434px; position: absolute; top: 187px; left: 35.5%;">
          <img id="showHideDiv3" style="display: none; background-image:url(img/i4_cor_branco.png); width: 274px; height: 434px; position: absolute; top: 187px; left: 35.5%;">
	';
	echo $div;
}?>
<?php if ($modelo == 'galaxys3') {
	$div = '<img id="showHideDiv" style="display: none; background-image:url(img/gs3_grafite.png); width: 274px; height: 434px; position: absolute; top: 187px; left: 483px;">
          <img id="showHideDiv2" style="display: none; background-image:url(img/gs3_vermelho.png); width: 274px; height: 434px; position: absolute; top: 187px; left: 483px;">
          <img id="showHideDiv3" style="display: none; background-image:url(img/gs3_branco.png); width: 274px; height: 434px; position: absolute; top: 187px; left: 483px;">
	';
	echo $div;
}?>
<?php if ($modelo == 'gnote2') {
	$div = '<img id="showHideDiv" style="display: none; background-image:url(img/gn2_grafite.png); width: 274px; height: 434px; position: absolute; top: 187px; left: 35.5%;">
          <img id="showHideDiv2" style="display: none; background-image:url(img/gn2_vermelho.png); width: 274px; height: 434px; position: absolute; top: 187px; left: 35.5%;">
          <img id="showHideDiv3" style="display: none; background-image:url(img/gn2_branco.png); width: 274px; height: 434px; position: absolute; top: 187px; left: 35.5%;">
	';
	echo $div;
}?>

    <div id="droppable" class="col" style="height: 434px; width:274px; margin: 0 auto; border: 2px dashed #CCC; padding: 5px;  -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px;">
            
            <canvas id="design" height="434" width="274" style=" width: 274px; height: 434px;  -moz-user-select: none; cursor: default;   margin: 0 auto; background-color: #CCC;  -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px;"  class="upper-canvas"></canvas>
                  
</div>
</div>
       
        </div>

 </div>


<script type="text/javascript">
$(function(){
$('.redi').resizable();
});
</script>

<div id="rodape">
	<div class="imagem"><img src="img/rodape.png" /></div>
</div>

</div>
</body>
</html>

<?php }?>