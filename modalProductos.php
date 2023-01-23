              <!-- MODAL PRODUCTOS -->
              <div class="modal fade" id="modalProducto<?php echo $idPro ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <?php
                  $id = $idPro;
                    $consultaLogin = "SELECT * FROM ininbiowebapp.productos WHERE idProductos = '$id'";
                    $sentencia = $conn->prepare($consultaLogin);
                    $sentencia->execute();
                    $result = $sentencia->get_result();
                    ?>
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Información del producto</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <div class="cerrar" aria-hidden="true">&times;</div>
                              </button>
                          </div>
                          <div class="modal-body" style="text-align: center; color: black;">
                              <?php
                                while ($row = $result->fetch_assoc()) {
                                    $idProductos = $row['idProductos'];
                                    $nombreProd = $row['nombre'];
                                    $price = $row['precio'];
                                    $picture = $row['imagen'];
                                    $decription = $row['descripcion']
                                ?>
                                  Hola <?php echo $decription ?>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #71c500; color: white;">No</button>
                              <button id="cerrar" type="button" class="btn" style="text-transform: none; background-color: #2d9082; color: white;">Sí, cerrar sesión</button>
                          </div>
                      <?php
                                }
                        ?>
                      </div>
                  </div>
              </div>