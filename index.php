<?php
   $decision="";
   $message="";
   @$moyenne=$_POST["moyenne"];
   @$envoyer=$_POST["envoyer"];

 
   if(isset($envoyer)){
      if(empty($moyenne))
         $message='<div class="erreur">Veuiller remplir le champ.</div>';
      else{
          if ($moyenne>=17) {
            $message='<p class="rappel"><b>Decision:admis</b><br />';
            $decision=' <span style="color:green;font-size:20px;background-color:#EEEEEE;border-radius:10px";>'.'mention exellent'.'</span>';
            echo $decision;
}
  elseif ($moyenne>=16) {
    $message='<p class="rappel"><b>Decision:admis</b><br />';
    $decision=' <span style="color:lightgreen;font-size:20px;background-color:#EEEEEE;border-radius:10px">'.'mention tres bien'.'</span>';
    echo $decision;
  }
  elseif ($moyenne>=14) {
    $message='<p class="rappel"><b>Decision:admis</b><br />';
    $decision=' <span style="color:yellow;font-size:20px;background-color:#EEEEEE;border-radius:10px">'.'mention bien'.'</span>';
    echo $decision;  }
  elseif ($moyenne>=12) {
    $message='<p class="rappel"><b>Decision:admis</b><br />';
    $decision=' <span style="color:darkblue;font-size:20px;background-color:#EEEEEE;border-radius:10px">'.'mention assez bien'.'</span>';
    echo $decision;  }
    elseif ($moyenne>=10) {
    $message='<p class="rappel"><b>Decision:admis</b><br />';
    $decision=' <span style="color:darkred;font-size:20px;background-color:#EEEEEE;border-radius:10px">'.'mention passable'.'</span>';
    echo $decision;  }
else{
    $message='<p class="rappel"><b>Decision:Eliminer</b><br />';
    $decision= '<span style="color:red;font-size:20px;background-color:#EEEEEE;border-radius:10px">'.'Eliminer'.'</span>';
    echo $decision;
}
         /*$message='<div class="rappel"><b>Decision:</b><br />';
         $message.=ucfirst(strtolower($decision)) .'<br />';
         $message.='</div>';*/
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>determine_mention</title>
      <style>
         body{
            padding:10px;
         }
         fieldset{
            border:solid 1px #EE6600;
            border-radius:10px;
            padding:20px;
         }
         legend{
            font:bold 16pt arial;
            color:#EE6600;
         }
         input{
            border:solid 1px #AAAAAA;
            padding:10px;
            font:10pt verdana;
            color:#EE6600;
            outline:none;
            border-radius:6px;
         }
         input[type="submit"]{
            border:none;
            background-color:#EE6600;
            color:#FFFFFF;
            width:200px;
            cursor:pointer;
         }
         .label{
            margin-bottom:4px;
            font:10pt arial;
            color:#AAAAAA;
         }
         .champ{
            margin-bottom:20px;
         }
         .erreur{
            font:10pt arial;
            color:#DD0000;
            background-color:#EEEEEE;
            padding:10px;
            border-radius:10px;
            margin-bottom:10px;
         }
         .rappel{
            font:10pt arial;
            color:#888888;
            background-color:#EEEEEE;
            padding:10px;
            border-radius:10px;
            margin-bottom:10px;
         }
      </style>
</head>
<body>
<div>
      <?php echo $message ?>
      <form name="fo" method="post" action="">
         <fieldset>
            <legend>Resultat</legend>

            <div class="label">Moyenne</div>
            <div class="champ">
               <input type="number" name="moyenne" value="<?php echo $moyenne?>" />
            </div>

            <div class="champ">
               <input type="submit" name="envoyer" value="envoyer" />
            </div>
         </fieldset>
      </form>
</div>
</body>
</html>