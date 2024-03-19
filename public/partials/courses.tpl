<div style="margin-top : 100px"></div>


<div class="row mb-5 mt-5">

{foreach $cursos as $curso}
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
{/foreach}

</div>





