<?php
/* Smarty version 3.1.30, created on 2019-09-01 13:49:59
  from "C:\xampp\htdocs\myMoney\system\templates\modify.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d6bb067b46469_72407885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c33f092b609451b746930d72a4d1be7ab563f03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myMoney\\system\\templates\\modify.tpl',
      1 => 1509365844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6bb067b46469_72407885 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pénzügyek</title>
    <link rel="shortcut icon" href="img/title.ico" />
  	<link rel="stylesheet" type="text/css" href="include/style_mobile.css">
  	<link rel="stylesheet" type="text/css" href="include/bootstrap.min.css">
  	<?php echo '<script'; ?>
 src="include/jquery.min.js"><?php echo '</script'; ?>
>
  	<?php echo '<script'; ?>
 src="include/bootstrap.min.js"><?php echo '</script'; ?>
>
    <meta name="theme-color" content="#007bff" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
    <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=UA-108346239-1"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      window.dataLayer = window.dataLayer || [];
      function gtag(){
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-108346239-1');
    <?php echo '</script'; ?>
>
  </head>
  <body>
    <div id="container">
      <div class="center" id="content">
        <a href="index.php"><button type="button" class="btn btn-primary button" style="width:100%;margin-top:25px">Vissza</button></a>
		<table class="last_moves" style='width:100%;border: solid 1px black;'>
			<?php echo $_smarty_tpl->tpl_vars['last_move']->value;?>

			<tr>
				<td>
					Össz.:
				</td>
				<td colspan="4">
					<?php echo $_smarty_tpl->tpl_vars['sum']->value;?>

				</td>
			</tr>
		</table>
      </div>
    </div>
	<?php echo '<script'; ?>
>
		function checkBeforeDelete(){
			var x = confirm("Biztosan törölni szeretnéd a tételt?");
			if(x == true){
				return true;
			}else{
				return false;
			}
		}
	<?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
