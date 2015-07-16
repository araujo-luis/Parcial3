<h2>Listado de Funciones</h2>
<a href="index.php?page=frmFunciones&acc=ins">Agregar Funciones</a>
<table style="margin:5em; width:90%">
    <tr>
        <th>
            Cod.
        </th>
        <th>
          Descripcion
        </th>
        <th>
            Estado
        </th>
        <th>
            Acciones
        </th>
    </tr>
    {{foreach funciones}}
    <tr>
        <td>
            {{fnccod}}
        </td>
        <td>
            {{fncdsc}}
        </td>
        <td>
            {{fncest}}
        </td>
        <td>
            <a href="index.php?page=frmFunciones&acc=upd&fnccod={{fnccod}}">Actualizar</a> |
            <a href="index.php?page=frmFunciones&acc=dlt&fnccod={{fnccod}}">Eliminar</a>
        </td>
    </tr>
    {{endfor funciones}}
</table>
