<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');
?>

<table border="1" class="box box-primary">
                        
                    <th class="box-body">Id</th>
                    <th class="box-body">Nivel</th>
                    <th class="box-body">Grado</th>
                    <th class="box-body">Sección Alta</th>
                    <th class="box-body">Fecha Registro</th>
                    <th class="box-body">Estado</th>
                    <th class="box-body">Accion</th>
                    
                    <?php  
                   
                    $consulta = mysql_query("Select idgrupo,case nivel when '1' then 'Primaria' when '2' then 'Secundaria' end as nivel, 
case grado 
when '1' then 'Primero'
when '2' then 'Segundo'
when '3' then 'Tercero'
when '4' then 'Cuarto'
when '5' then 'Quinto'
when '6' then 'Sexo' 
end as grado
, seccion, fecharegistro, case estado when '1' then 'Activo' when '0' then 'Inactivo' end as estado from grupo 
where grado like '%".$_POST['buscar_grupo']."%'");
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"> <?php echo $rol['idgrupo']?> </td>
                    <td class="box-body"> <?php echo $rol['nivel']?> </td>
                    <td class="box-body"> <?php echo $rol['grado']?> </td>
                    <td class="box-body"> <?php echo $rol['seccion']?> </td>
                    <td class="box-body"> <?php echo $rol['fecharegistro']?> </td>
                    <td class="box-body"> <?php echo $rol['estado']?> </td>
                    <td class="box-body"> <button type="button" class="btn btn-default btn-flat btn-e-grupo"
                                data-id="<?php echo $rol['idgrupo']?>"> Editar </button>
                    </td>
                </tr>
                    <?php } mysql_close();?>
</table>