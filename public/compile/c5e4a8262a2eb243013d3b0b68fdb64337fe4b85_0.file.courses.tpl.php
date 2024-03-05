<?php
/* Smarty version 4.4.1, created on 2024-03-05 22:32:32
  from 'C:\wamp64\www\sinapsis\wp-content\plugins\profile_wp\public\partials\courses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65e79d80c63631_96705816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5e4a8262a2eb243013d3b0b68fdb64337fe4b85' => 
    array (
      0 => 'C:\\wamp64\\www\\sinapsis\\wp-content\\plugins\\profile_wp\\public\\partials\\courses.tpl',
      1 => 1709676133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e79d80c63631_96705816 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="margin-top : 100px"></div>


<div class="row mb-5 mt-5">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cursos']->value, 'curso');
$_smarty_tpl->tpl_vars['curso']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['curso']->value) {
$_smarty_tpl->tpl_vars['curso']->do_else = false;
?>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $_smarty_tpl->tpl_vars['curso']->value->curso->imagen;?>
" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['curso']->value->curso->nombre;?>
</h5>
              <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['curso']->value->curso->descripcion;?>
</p>
              <a href="#" class="btn btn-primary">Ver curso</a>
            </div>
        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>





<?php }
}
