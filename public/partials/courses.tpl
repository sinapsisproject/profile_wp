<div class="row mb-5 mt-3">


<div class="name-text-user col-12 text-center">
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
        {$c=0}
        {foreach $cursos as $item}
        <p style="display : none;">{$c++}</p>
        <div class="content-course-data-item shadow">
                <div class="accordion " id="accordion_{$c}">
                
                        <div class="col-12 ">
                            <div class="row pb-2">

                                <div class="accordion-header col-10">
                                   <a href="/cursos-sinapsis/?curso={$item->curso->id}"><p class="text-title-header-accordeon">{$item->curso->nombre}</p></a>
                                </div>
                                <div class="col-2 text-center">
                                    <i data-bs-toggle="collapse" data-bs-target="#collapseOne_{$c}" aria-expanded="true" aria-controls="collapseOne" class="fa-solid fa-plus button-show-accordeon-course"></i>
                                </div>

                            </div>
                        </div>
                    
                        
                        <div id="collapseOne_{$c}" class="accordion-collapse collapse col-12" data-bs-parent="#accordion_{$c}">
                            <div class="accordion-body">
                                {foreach $item->curso->modulos as $modulo}
                                <p class="text-accordeon-body"><i style="margin-right: 10px; color: #445AFF;" class="fa-solid fa-circle-arrow-right"></i> {$modulo->nombre}</p>
                                {/foreach}
                            </div>
                        </div>
                       
                </div>
            </div>
        {/foreach}
        
    </div>
</div>






<!-- {foreach $cursos as $curso}
    <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img src="{$curso->curso->imagen}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{$curso->curso->nombre}</h5>
              <p class="card-text">{$curso->curso->descripcion}</p>
              <a href="/cursos-sinapsis?curso={$curso->curso->id}" class="btn btn-primary">Ver curso</a>
            </div>
        </div>
    </div>
{/foreach} -->

</div>





