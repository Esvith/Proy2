
<!-- Content Wrapper. Contains page content -->





<?php echo $contarvarones ?>
<?php echo $contarmujeres ?>
<?php echo $total ?>

<?php if (!empty($totales)): ?>
                                    <?php  foreach($totales as $total):?>
                                        <tr>
                                            <td><?php $esto=$total->total;?></td>
                           
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif ?>

<?php if (!empty($contarvarones)): ?>
                                    <?php  foreach($contarvarones as $contarvaron):?>
                                        <tr>
                                            <td><?php echo $contarvaron->varones;?></td>
                           
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif ?>

<br>
                                <?php if (!empty($contarmujeres)): ?>
                                    <?php  foreach($contarmujeres as $contarmujer):?>
                                        <tr>
                                            <td><?php echo $contarmujer->mujeres;?></td>
                           
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif ?>

                                <?php echo $esto ?>