<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-02 14:43:24
         compiled from "D:\webserver\root\blauw\templates\begangster\clan\join.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3046754a6a07c343f99-70136938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7c44a97b44b77069da1682a7d4555e96abfeca7' => 
    array (
      0 => 'D:\\webserver\\root\\blauw\\templates\\begangster\\clan\\join.tpl',
      1 => 1420205486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3046754a6a07c343f99-70136938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TEMPLATE_URL' => 0,
    'form_error' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54a6a07c386385_87588173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6a07c386385_87588173')) {function content_54a6a07c386385_87588173($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../ingame/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div id="centercontent" style="margin-top: 7px;">
			
	<div class="titel">
            <div class="titelicoon"> <img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
images/icons/title-icon.png" alt="icoon" title="icoon"/> </div>
            <div class="titeltekst">Clan joinen</div>
        </div>
        
        <?php if (isset($_smarty_tpl->tpl_vars['form_error']->value)) {?>
        <div class="melding bad small icon">
            <?php echo $_smarty_tpl->tpl_vars['form_error']->value;?>

        </div>
        <?php } elseif (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
        <div class="melding good small icon">
            <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

        </div>
        <?php }?>
        
        <div class="tekstvak">
            <p>Geef de naam in van de clan die je wilt joinen, en ze zullen het wellicht overwegen je op te nemen!</p>
            <form method="post">
                <fieldset>
                    <label>Clan naam:</label>
                    <input class="normal" name="name" type="text" maxlength="20">
                </fieldset>
                
                <input class="button small good" name="submit" type="submit" value="Clan joinen!">
            </form> 
        </div>		
        <div class="titelfooter"></div>      
    </div>
<?php echo $_smarty_tpl->getSubTemplate ('../ingame/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
