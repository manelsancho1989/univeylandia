<?php
include_once $_SERVER ['DOCUMENT_ROOT']."/univeylandia/php/connection.php";
class Taula {

    //private $idTaula;
    private $numeroCadires;
    private $numTaula;

    function __construct($numTaula,$numeroCadires) {
        $this->numTaula = $numTaula;
        $this->numeroCadires = $numeroCadires;
    }

    function setNumeroCadires($numeroCadires) {
        $this->numeroCadires = $numeroCadires;
    }

    function setNumTaula($numTaula) {
        $this->numTaula = $numTaula;
    }

    /*function getIdTaula() {
        return $this->idTaula;
    }*/

    function getNumeroCadires() {
        return $this->numeroCadires;
    }

    function getNumTaula() {
        return $this->numTaula;
    }

    public function inserirTaula() {
        //conexio a  la base de dades
      //  include_once '../connection.php';
      try
    {
      if (mysqli_connect_errno()) {
          printf("Connect failed: %s\n", mysqli_connect_error());
          exit();
      }

      $conn = createConnection();

      $sql = "INSERT INTO TAULA (numero_taula, numero_cadires) VALUES (?,?)";

      $stmt = $conn->prepare($sql);

      $stmt->bind_param("ii",$this->numTaula,$this->numeroCadires);

      if($stmt->execute())
      {
        //Cerramos la conexión y la sentencia
        $stmt->close();
        $conn->close();
        //Retornamos true, consulta satisfactoria
        return true;
      }
      //Sino surgió algún error y retornamos una cadena de error.
      else
      {
        $stmt->close();
        $conn->close();
        return 'Error en el INSERT';
      }
      //Si surge alguna excepción la capturamos e imprimimos,
      //retornamos false
    }
    catch (Exception $e)
    {
      echo $e;
      $stmt->close();
      $conn->close();
      return false;
    }
    $conn->close();
  }

  public static function llistar(){

    //include_once $_SERVER ['DOCUMENT_ROOT']."/univeylandia/php/connection.php";

      $conn = createConnection();
      $sql= "SELECT * FROM TAULA";
      $result=$conn->query($sql);

      if ($result->num_rows > 0){
        echo '<div class="table-responsive">';
        echo '<table class="table table-bordered table-sm">';
        echo '<thead class="thead-light">';
        echo '<tr>';
        echo '<th>Numero_Taula';
        echo '<th> Numero_Cadires';

        while ($row = $result->fetch_assoc()) {

          $id_taula = $row['id_taula'];
          $numero_taula = $row['numero_taula'];
          $numero_cadires = $row['numero_cadires'];

                  echo '<tbody>';
                  echo '<tr>';
                  echo '<td style="display:none;">'.$id_taula.'</td>';
                  echo '<td>'.$numero_taula.'</td>';
                  echo '<td>'.$numero_cadires.'</td>';
                  echo '<td></td>';
                  echo '<td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalModificar'.$id_taula.'">Modificar</button>
                  <button class="btn btn-secondary btn-sm ml-4"data-toggle="modal" data-target="#ModalEliminar'.$id_taula.'">Eliminar</button></td>';
                  echo '</tr>';
                  echo '</tbody>';

                  echo '<!-- Modal -->';

                  echo '<div class="modal fade" id="modalModificar'.$id_taula.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">';
                  echo '  <div class="modal-dialog modal-dialog-centered modal-md" role="document">';
                  echo '    <div class="modal-content">';
                  echo '      <div class="modal-header">';
                  echo '        <h5 class="modal-title">Modificar Taula</h5>';
                  echo '        <button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                  echo '          <span aria-hidden="true">&times;</span>';
                  echo '        </button>';
                  echo '      </div>';
                  echo '      <div class="modal-body">';
                  echo '        <div class="container">';
                  echo '          <form method="post">';
                  echo '            <div class="form-row">';
                  echo '              <div class="col-md-12 mb-3" style="display: none;">';
                  echo '                <input class="form-control" type="text" value="'.$id_taula.'" name="id_taula">';
                  echo '              </div>';
                  echo '              <div class="col-md-12 mb-3">';
                  echo '                <label for="num_habitacio">Número Taula</label>';
                  echo '                <input disabled class="form-control" type="text" value="'.$numero_taula.'" name="numero_Taula">';
                  echo '              </div>';
                  echo '              <div class="col-md-12 mb-3">';
                  echo '                <label for="tipus_habitacio">Numero Cadires</label>';
                  echo '                <input type="text" class="form-control form-control-sm" placeholder="Numero Cadires" value="'.$numero_cadires.'"name="numCadira" required>';
                  echo '              </div>';
                  echo '            </div>';
                  echo '            <input type="submit" class="btn btn-primary" name="modificar" value="Modificar">';
                  echo '            <input type="button" class="btn btn-secondary" data-dismiss="modal" name="cancelar" value="Cancel·lar">';
                  echo '          </form>';
                  echo '        </div>';
                  echo '       </div>';
                  echo '    </div>';
                  echo '  </div>';
                  echo '</div>';
                /* MODAL PER ELIMINAR */
                echo '<!-- Modal -->';
                echo '<div class="modal fade" id="ModalEliminar'.$id_taula.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">';
                echo '  <div class="modal-dialog modal-dialog-centered modal-md" role="document">';
                echo '    <div class="modal-content">';
                echo '       <div class="modal-header">';
                echo '          <h5 class="modal-title">Atenció!</h5>';
                echo '          <button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                echo '            <span aria-hidden="true">&times;</span>';
                echo '          </button>';
                echo '       </div>';
                echo '       <div class="modal-body">';
                echo '          <div class="container">';
                echo '            <form method="post">';
                echo '              <div class="form-row">';
                echo '                <div class="col-md-12 mb-3">';
                echo '                  <div class="input-group">';
                echo '                    <input class="form-control" type="text" value="'.$id_taula.'" name="id_taula" style="display: none;">';
                echo '                    <span>Segur que vols eliminar aquesta habitació?</span>';
                echo '                  </div>';
                echo '                </div>';
                echo '              </div>';
                echo '              <input type="submit" class="btn btn-primary" name="eliminar" value="Eliminar">';
                echo '              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>';
                echo '            </form>';
                echo '          </div>';
                echo '       </div>';
                echo '    </div>';
                echo '  </div>';
                echo '</div>';

            }
            echo '</table>';
            echo '</div>';
            }       $conn->close();
      }


    public static function llistarTaulaBusqueda(){
      //include_once $_SERVER ['DOCUMENT_ROOT']."/univeylandia/php/connection.php";
        $conn = createConnection();

        $filtre = $_POST['busqueda_taula'];


        $sql ="SELECT id_taula, numero_taula, numero_cadires FROM TAULA WHERE numero_cadires LIKE '%$filtre%' OR numero_taula LIKE '%$filtre%'";
        $result = $conn->query($sql);

        if(!$result) {
          throw new Exception();
        }

        if ($result -> num_rows > 0){
          echo '<div class="table-responsive">';
          echo '<table class="table table-bordered table-sm">';
          echo '<thead class="thead-light">';
          echo '<tr>';
          echo '<th>Numero_Taula';
          echo '<th> Numero_Cadires';

          while ($row = $result->fetch_assoc()) {

            $id_taula = $row['id_taula'];
            $numero_taula = $row['numero_taula'];
            $numero_cadires = $row['numero_cadires'];

                    echo '<tbody>';
                    echo '<tr>';
                    echo '<td style="display:none;">'.$id_taula.'</td>';
                    echo '<td>'.$numero_taula.'</td>';
                    echo '<td>'.$numero_cadires.'</td>';
                    echo '<td></td>';
                    echo '<td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalModificar'.$id_taula.'">Modificar</button>
                    <button class="btn btn-secondary btn-sm ml-4"data-toggle="modal" data-target="#ModalEliminar'.$id_taula.'">Eliminar</button></td>';
                    echo '</tr>';
                    echo '</tbody>';

                    echo '<!-- Modal -->';

                    echo '<div class="modal fade" id="modalModificar'.$id_taula.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">';
                    echo '  <div class="modal-dialog modal-dialog-centered modal-md" role="document">';
                    echo '    <div class="modal-content">';
                    echo '      <div class="modal-header">';
                    echo '        <h5 class="modal-title">Modificar Taula</h5>';
                    echo '        <button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                    echo '          <span aria-hidden="true">&times;</span>';
                    echo '        </button>';
                    echo '      </div>';
                    echo '      <div class="modal-body">';
                    echo '        <div class="container">';
                    echo '          <form method="post">';
                    echo '            <div class="form-row">';
                    echo '              <div class="col-md-12 mb-3" style="display: none;">';
                    echo '                <input class="form-control" type="text" value="'.$id_taula.'" name="id_taula">';
                    echo '              </div>';
                    echo '              <div class="col-md-12 mb-3">';
                    echo '                <label for="num_habitacio">Número Taula</label>';
                    echo '                <input disabled class="form-control" type="text" value="'.$numero_taula.'" name="numero_Taula">';
                    echo '              </div>';
                    echo '              <div class="col-md-12 mb-3">';
                    echo '                <label for="tipus_habitacio">Numero Cadires</label>';
                    echo '                <input type="text" class="form-control form-control-sm" placeholder="Numero Cadires" value="'.$numero_cadires.'"name="numCadira" required>';
                    echo '              </div>';
                    echo '            </div>';
                    echo '            <input type="submit" class="btn btn-primary" name="modificar" value="Modificar">';
                    echo '            <input type="button" class="btn btn-secondary" data-dismiss="modal" name="cancelar" value="Cancel·lar">';
                    echo '          </form>';
                    echo '        </div>';
                    echo '       </div>';
                    echo '    </div>';
                    echo '  </div>';
                    echo '</div>';
                  /* MODAL PER ELIMINAR */
                  echo '<!-- Modal -->';
                  echo '<div class="modal fade" id="ModalEliminar'.$id_taula.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">';
                  echo '  <div class="modal-dialog modal-dialog-centered modal-md" role="document">';
                  echo '    <div class="modal-content">';
                  echo '       <div class="modal-header">';
                  echo '          <h5 class="modal-title">Atenció!</h5>';
                  echo '          <button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                  echo '            <span aria-hidden="true">&times;</span>';
                  echo '          </button>';
                  echo '       </div>';
                  echo '       <div class="modal-body">';
                  echo '          <div class="container">';
                  echo '            <form method="post">';
                  echo '              <div class="form-row">';
                  echo '                <div class="col-md-12 mb-3">';
                  echo '                  <div class="input-group">';
                  echo '                    <input class="form-control" type="text" value="'.$id_taula.'" name="id_taula" style="display: none;">';
                  echo '                    <span>Segur que vols eliminar aquesta habitació?</span>';
                  echo '                  </div>';
                  echo '                </div>';
                  echo '              </div>';
                  echo '              <input type="submit" class="btn btn-primary" name="eliminar" value="Eliminar">';
                  echo '              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>';
                  echo '            </form>';
                  echo '          </div>';
                  echo '       </div>';
                  echo '    </div>';
                  echo '  </div>';
                  echo '</div>';

              }
              echo '</table>';
              echo '</div>';
              }
              $conn->close();

      }

  public function modificarTaula(){
        $conn = createConnection();

        if ($conn->connect_error) {
                die("Connexió fallida: " . $conn->connect_error);
        }

      $id_Taula_mod = $_POST['id_taula'];

      $num_taula = $_POST['numero_Taula'];

      $num_cadires =   $_POST['numCadira'];

      $sql = "UPDATE TAULA SET numero_cadires=$num_cadires WHERE id_taula=$id_Taula_mod";

        if (mysqli_query($conn, $sql)) {
        echo '<script>window.location.href = window.location.href + "?refresh";</script>';
        } else {
          echo '<script>alert("Error!");</script>';
        }
        $conn->close();
        }

  public static function eliminarTaula(){
          $conn = createConnection();

          if ($conn->connect_error) {
              die("Connexió fallida: " . $conn->connect_error);
              }

          $id_taula_del = $_POST['id_taula'];

          $sql = "DELETE FROM TAULA WHERE id_taula =$id_taula_del";

          if (mysqli_query($conn, $sql)) {
              echo '<script>window.location.href = window.location.href + "?refresh";</script>';
            } else {
            echo '<script>alert("Error!");</script>';
            }

            $conn->close();
            }

  public static function datalistLlistar() {
    //include_once $_SERVER['DOCUMENT_ROOT']."/GestioHotel/php/connection.php";

    $conn = createConnection();
    $sql= "SELECT * FROM TAULA";
    $result=$conn->query($sql);

    echo '<datalist id="buscarTaula">';

    foreach ($result as $key => $row) {
      echo '<option value="'.$row['id_taula'].'">';
      // code...
    }
    echo '</datalist>';
  }
}
