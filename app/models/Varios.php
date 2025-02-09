<?php

/*
 * This file is part of the Ocrend Framewok 2 package.
 *
 * (c) Ocrend Software <info@ocrend.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace app\models;

use app\models as Model;
use Ocrend\Kernel\Models\Models;
use Ocrend\Kernel\Models\IModels;
use Ocrend\Kernel\Models\ModelsException;
use Ocrend\Kernel\Models\Traits\DBModel;
use Ocrend\Kernel\Router\IRouter;
use Ocrend\Kernel\Helpers\Strings;
/**
 * Modelo Varios
 *
 * @author Jorge Jara H. <jjara@wys.cl>
 */

class Varios extends Models implements IModels {
    /**
      * Característica para establecer conexión con base de datos.
    */
    use DBModel;

    public function listar_archivos_cargados($idapp,int $limit = 5){
        return $this->db->query_select("SELECT ha.fecha_hora,ha.nombre_archivo,u.name,ha.q_registros FROM (tbl_historialarchivoscargados ha inner join users u on ha.id_user=u.id_user) where ha.app='$idapp' order by ha.id desc limit $limit");
    }
    public function getMenuPPAL(){
        return $this->db->query_select("Select id_menu,descripcion from tblmenu order by descripcion");
    }
    public function getSubMenu(int $id_menu=99){
        return $this->db->query_select("Select id_menu,id_submenu,descripcion from tblsubmenu where id_menu='$id_menu' and estado=1 order by descripcion");
    }
    /**
     * Verifica el email introducido, tanto el formato como su existencia en el sistema
     *
     * @param string $email: Email del usuario
     *
     * @throws ModelsException en caso de que no tenga formato válido o ya exista
     */
    public function checkEmailUser(string $email, int $id = 0 ) {
        # Formato de email
        if (!Strings::is_email($email)) {
            throw new ModelsException('El email no tiene un formato válido.');
        }
        # Existencia de email
        $email = $this->db->scape($email);
        $filtro = "";
        if ($id > 0){
            $filtro = "and id_user <>'$id'";
        }
        $query = $this->db->select('id_user', 'users', "email='$email' ".$filtro , 'LIMIT 1');
        if (false !== $query) {
            throw new ModelsException('El email introducido ya existe.');
        }
    }
    final function diferencia_meses($fecha_inicio,$fecha_termino){
        $result= $this->db->query_select("select timestampdiff(month,'$fecha_inicio','$fecha_termino')");
        if (false == $result){
            return ['0'];
        }else{
            return $result[0];
        }
    }
    public function getCumpleañosUsuariosMes(){
        $sql="Select name,day(fecha_nacimiento) dia,MONTH(fecha_nacimiento) mes,fecha_nacimiento from users where estado=1 and fecha_nacimiento>'0000-00-00' order by MONTH(fecha_nacimiento),day(fecha_nacimiento)";
        return $this->db->query_select($sql);
    }
    function ObtenerBloqueActual(){
        $result= $this->db->query_select("select bloque from tblbloque where estado=1 and desde<=time(now()) and hasta>=time(now()) LIMIT 1");
        if ($result == false){
            $result= $this->db->query_select("select bloque from tblbloque where estado=1 order by desde asc LIMIT 1");
        }
        return $result[0];
    }
    function ObtenerBloqueAnterior(){
        $result= $this->db->query_select("select bloque from tblbloque where estado=1 and desde<=time(now()) and hasta<=time(now()) LIMIT 1");
        if ($result == false){
            $result= $this->db->query_select("select bloque from tblbloque where estado=1 order by desde asc LIMIT 1");
        }
        return $result[0];
    }
    function ObtenerBloqueSiguiente(){
        $result= $this->db->query_select("select bloque,desde,hasta from tblbloque where estado=1 and desde>=time(now()) and hasta>=time(now()) LIMIT 1");
        if ($result == false){
            $result= $this->db->query_select("select bloque,desde,hasta from tblbloque where estado=1 order by desde asc LIMIT 1");
        }
        return $result[0];
    }
    function validar_cambio_pass($iduser){
        $result = $this->db->query_select('select fecha_pass from users where id_user="'.$iduser.'" and  fecha_pass<="'.date('Ymd').'"');
        if ($result != false){
            return array("reset" => '1');
        }
        return array("reset" => '0');
    }

    function notificacion_emergente(){
        global $http;
        $iduser = $http->request->get('id_user');

        $result = $this->db->query_select('select id,modulo,titulo,mensaje from tblnotificaciones_emergentes where id_user="'.$iduser.'" limit 1');
        if ($result != false){

            $this->db->query_select('delete from tblnotificaciones_emergentes where id="'.$result[0]['id'].'"');
            return array("opcion" => '1', 'result' => $result );
        }else{
            return array("opcion" => '0');
        }
    }

    /**
      * __construct()
    */
    public function __construct(IRouter $router = null) {
        parent::__construct($router);
        $this->startDBConexion();
    }

    /**
      * __destruct()
    */
    public function __destruct() {
        parent::__destruct();
        $this->endDBConexion();
    }
}
