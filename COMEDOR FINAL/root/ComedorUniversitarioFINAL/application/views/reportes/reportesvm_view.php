
<!-- Content Wrapper. Contains page content -->


<CENTER>



<?php if (!empty($totales)): ?>
                                    <?php  foreach($totales as $total):?>
                                        <tr>
                                            <td> <H1>REPORTE CANTIDAD DE ALUMNOS POR SEXO <?php $esto=$total->total;?> </H1></td>
                           
                                        </tr>

                                    <?php endforeach;?>
                                <?php endif ?>

<?php if (!empty($contarvarones)): ?>
                                    <?php  foreach($contarvarones as $contarvaron):?>

                                        <?php $totalvarones=$contarvaron->varones;?> 
                                        <tr>
                                            <td><H1>VARONES   =<?php echo $contarvaron->varones;?></H1></td>
                           
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif ?>

<br>
                                <?php if (!empty($contarmujeres)): ?>
                                    <?php  foreach($contarmujeres as $contarmujer):?>

                                          <?php $totalmujeres=$contarmujer->mujeres;?> 
                                        <tr>
                                            <td><H1>MUJERES     =<?php echo $contarmujer->mujeres;?></H1></td>
                           
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif ?>

                               <H1>TOTAL DE ALUMNOS    =<?php echo $esto ?> </H1> 

                               </CENTER>


<?php 

$totalporcentajevar=($totalvarones*100)/$esto;
//echo $totalvarones;

//echo $totalporcentajevar;


$totalporcentajemuj=($totalmujeres*100)/$esto;
?>

<CENTER>
   <h2> PORCENTAJE DE VARONES:  <?php echo $totalporcentajevar; ?> % <br>  
        PORCENTAJE DE MUJERES: <?php echo $totalporcentajemuj; ?> %</h2>

</CENTER>