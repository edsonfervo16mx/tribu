<?php 
	class Notificacion{

		public $table = 'notificacion';

		public function open($key){
			$stringConnection = new Connection;
			$stringConnection->abrir($key);
			return $stringConnection;
		}

		public function schema($key){
			$request = $this->open($key);
			$res = $request->table_schema($key,$this->table);
			return ($res);
		}

		public function listAll($key){
			$request = $this->open($key);
			$sql = 'SELECT notificacion.cve,
					notificacion.estado
					from notificacion';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listActive($key){
			$request = $this->open($key);
			$sql = 'SELECT notificacion.cve as notificacion_clave,
					notificacion.estado as notificacion_estado
					from notificacion
					where notificion.estado = "active"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listInactive($key){
			$request = $this->open($key);
			$sql = 'SELECT notificacion.cve as notificacion_clave,
					notificacion.estado as notificacion_estado
					from notificacion
					where notificion.estado = "inactive"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function viewData($key,$clave){
			$request = $this->open($key);
			$sql = 'SELECT notificacion.cve as notificacion_clave,
					notificacion.estado as notificacion_estado
					from notificacion
					where notificion.estado = "inactive" and notificacion.clave = "'.$clave.'" LIMIT 1';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function insert($key,$cve){
			$request = $this->open($key);
			$sql = 'INSERT INTO notificacion(cve)
			 		VALUES ( upper("'.$cve.'"))';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function modify($key,$atr){
			$request = $this->open($key);
			$sql = 'UPDATE notificacion 
					SET cve = upper("'.$atr['cve'].'")
						where cve = "'.$atr['cve_old'].'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function remove($key,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE notificacion SET estado = "inactive" where cve = "'.$cve.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function restore($key,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE notificacion SET estado = "active" where cve = "'.$cve.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

	}
?>