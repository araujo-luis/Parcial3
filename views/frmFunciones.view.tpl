<h2>{{tituloFunciones}}</h2>
<a href="index.php?page=funciones">Listado de Funciones</a>
<form action="index.php?page=frmFunciones&acc={{modoFunciones}}" method="post">
  <div>
    <label class="col4" for="fnccod">Código</label>
    <input class="col8" type="text" {{if fnccod}}disabled="disabled"{{endif fnccod}} id="fnccod" name="fnccod" value="{{fnccod}}"/>
    {{if fnccod}}
    <input type="hidden" id="fnccod" name="fnccod" value="{{fnccod}}"/>
    {{endif fnccod}}
  </div>
  <div>
    <label class="col4" for="fncdsc">Función</label>
    <input class="col8" type="text" id="fncdsc" name="fncdsc" value="{{fncdsc}}" {{disabled}}/>
  </div>
  <div>
    <label class="col4" for="fncest">Estado</label>
    <select class="col8" id="fncest" name="fncest" {{disabled}}>
      <option value="ACT" {{actSelected}}>Activo</option>
      <option value="INA" {{inaSelected}}>Inactivo</option>
    </select>
  <div class="right col12">
    <input type="hidden" id="btnacc" name="btnacc" value="{{modoFunciones}}"/>
    <input type="button" name="btnGuardar" value="Confirmar" onclick="document.forms[0].submit();"/>
  </div>
</form>
