<?php
/* Smarty version 4.4.1, created on 2024-03-19 05:26:41
  from 'C:\wamp64\www\sinapsis\wp-content\plugins\profile_wp\public\partials\courses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f92211388c11_14930134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5e4a8262a2eb243013d3b0b68fdb64337fe4b85' => 
    array (
      0 => 'C:\\wamp64\\www\\sinapsis\\wp-content\\plugins\\profile_wp\\public\\partials\\courses.tpl',
      1 => 1710825996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f92211388c11_14930134 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row mb-5 mt-5">


<div class="name-text-user col-12 text-end">
    <h3>Diego Baeza</h3>
</div>


<div class="row mt-4">
    <div class="col-4 text-center">
        <div class="box-info-user-course shadow"><i style="font-size: 30px; color: #445AFF; margin-bottom: 7px;" class="fa-solid fa-user-graduate"></i><p>1 Cursos</p></div>
    </div>
    <div class="col-4 text-center">
        <div class="box-info-user-course shadow"><i style="font-size: 30px; color: #445AFF; margin-bottom: 7px;" class="fa-solid fa-circle-check"></i><p>0 Completado</p></div>
    </div>
    <div class="col-4 text-center">
        <div class="box-info-user-course shadow"><i style="font-size: 30px; color: #445AFF; margin-bottom: 7px;" class="fa-solid fa-medal"></i><p>0 Certificado</p></div>
    </div>
</div>



<div class="row justify-content-center mt-5">
    <div style="height: 420px;" class="blue-box-content-course col-10">
        <h3>Mis cursos</h3>
        <p>Revisa los cursos activos que tienes en Sinapsis Clínica:</p>
    </div>

    <div class="content-course-data col-9 mb-3 pb-3 shadow">
        <?php $_smarty_tpl->_assignInScope('c', 0);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cursos']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <p style="display : none;"><?php echo $_smarty_tpl->tpl_vars['c']->value++;?>
</p>
        <div class="content-course-data-item shadow">
                <div class="accordion " id="accordion_<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
">
                
                        <div class="col-12 ">
                            <div class="row pb-2">

                                <div class="accordion-header col-10">
                                    <p class="text-title-header-accordeon"><?php echo $_smarty_tpl->tpl_vars['item']->value->curso->nombre;?>
</p>
                                </div>
                                <div class="col-2 text-center">
                                    <i data-bs-toggle="collapse" data-bs-target="#collapseOne_<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
" aria-expanded="true" aria-controls="collapseOne" class="fa-solid fa-plus button-show-accordeon-course"></i>
                                </div>

                            </div>
                        </div>
                    
                        
                        <div id="collapseOne_<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
" class="accordion-collapse collapse col-12" data-bs-parent="#accordion_<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
">
                            <div class="accordion-body">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value->curso->modulos, 'modulo');
$_smarty_tpl->tpl_vars['modulo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['modulo']->value) {
$_smarty_tpl->tpl_vars['modulo']->do_else = false;
?>
                                <p class="text-accordeon-body"><i style="margin-right: 10px; color: #445AFF;" class="fa-solid fa-circle-arrow-right"></i> <?php echo $_smarty_tpl->tpl_vars['modulo']->value->nombre;?>
</p>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                       
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </div>
</div>






<!-- <?php
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
              <a href="/cursos-sinapsis?curso=<?php echo $_smarty_tpl->tpl_vars['curso']->value->curso->id;?>
" class="btn btn-primary">Ver curso</a>
            </div>
        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> -->

</div>





<?php }
}
