<?php 
//since header view will not reciev cateogry there we have to pass agin
echo View::make("front/includes/header",['otherPages'=>$otherPages]);
?>
<?php 
echo View::make("$subView",['categories'=>isset($categories)?$categories:null])->render(); 
echo View::make("$subView",['categories'=>isset($categories)?$categories:null])->render(); 
// rendering is better coz it show error
?>
<?php //echo View::make("$subView"); ?>
<?php echo View::make('front/includes/footer');?>

