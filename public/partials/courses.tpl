<div class="mb-5 ">

    <div class="name-text-user col-12 text-center">
        <h3>{$curso->nombre}</h3>
    </div>

    <div class="row mt-4">
        <div class="col-12 col-md-4 text-center">
            <div class="box-info-user-course shadow"><i style="font-size: 30px; color: #445AFF; margin-bottom: 7px;" class="fa-solid fa-user-graduate"></i>
                <p>
                     {$curso->cantidad_cursos}  
                     {if $curso->cantidad_cursos == 1}Curso{else}Cursos{/if}
                </p> 
            </div>
        </div>
        <div class="col-12 col-md-4 text-center">
            <div class="box-info-user-course shadow"><i style="font-size: 30px; color: #445AFF; margin-bottom: 7px;" class="fa-solid fa-circle-check"></i><p>{$curso->cursos_terminados} Completados</p></div>
        </div>
        <div class="col-12 col-md-4 text-center">
            <div class="box-info-user-course shadow"><i style="font-size: 30px; color: #445AFF; margin-bottom: 7px;" class="fa-solid fa-medal"></i><p>0 Certificados</p></div>
        </div>
    </div>


    <div class="row justify-content-center mt-5">
        <div style="height: 480px;" class="blue-box-content-course col-11 col-md-10">
            <h3>Mis cursos</h3>
            <p>Revisa los cursos activos que tienes en Sinapsis Clínica:</p>
        </div>

        <div class="content-course-data col-9 mb-3 pb-3 shadow">
            {$c=0}
            {foreach $curso->cursos as $item}
            <p style="display : none;">{$c++}</p>
            <div class="content-course-data-item_2 shadow">
                    <div class="accordion " id="accordion_{$c}">
                    
                            <div class="col-12 align-self-center">
                                <div class="row">

                                    <div class="accordion-header col-10 col-md-8">
                                    <a href="/cursos-sinapsis/?curso={$item->id}"><p class="text-title-header-accordeon">{$item->nombre}</p></a>
                                    </div>
                                    {if $item->porcentaje_progreso >= 100}
                                    <div class="d-none d-md-block col-md-3 align-self-center text-center">
                                        <div class="box-status-course-complete"><strong>COMPLETADO</strong></div>
                                    </div>
                                    {/if}
                                    {if $item->porcentaje_progreso < 100}
                                    <div class="d-none d-md-block col-md-3 align-self-center text-center">
                                        <div class="box-status-course-progress"><strong>EN PROGRESO</strong></div>
                                    </div>
                                    {/if}
                                    <div class="col-1 col-md-1 button-collapse-course align-self-center">
                                        <i data-bs-toggle="collapse" data-bs-target="#collapseOne_{$c}" aria-expanded="true" aria-controls="collapseOne" class="fa-solid fa-plus button-show-accordeon-course"></i>
                                    </div>

                                </div>
                            </div>
                        
                            
                            <div id="collapseOne_{$c}" class="accordion-collapse collapse col-12" data-bs-parent="#accordion_{$c}">
                                <div class="accordion-body">
                                    {foreach $item->modulos as $modulo}
                                    <p class="text-accordeon-body"><i style="margin-right: 10px; color: #445AFF;" class="fa-solid fa-circle-arrow-right"></i> {$modulo}</p>
                                    {/foreach}
                                </div>
                            </div>
                        
                    </div>
                </div>
            {/foreach}
            
        </div>
    </div>

</div>





