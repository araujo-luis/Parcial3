<h2>Listado de Roles</h2>
<a href>Agregar Roles</a>
<table style="margin:5em; width:90%">
    <tr>
        <th>
            Cod.
        </th>
        <th>
            Categoría
        </th>
        <th>
            Estado
        </th>
        <th>
            Acciones
        </th>
    </tr>
    {{foreach roles}}
    <tr>
        <td>
            {{rolcod}}
        </td>
        <td>
            {{roldsc}}
        </td>
        <td>
            {{rolest}}
        </td>
        <td>
            <a href="index.php?page=roles&mode=UPD&rolcod={{rolcod}}">Actualizar</a> |
            <a href="index.php?page=roles&mode=DEL&rolcod={{rolcod}}">Eliminar</a>
        </td>
    </tr>
    {{endfor roles}}
</table>
