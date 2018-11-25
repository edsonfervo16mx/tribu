<?php
	class Persona{

		public $table = 'persona';

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

		public function listAll($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT persona.clave as persona_clave,
					persona.nombre as persona_nombre,
					persona.mote as persona_mote,
					persona.correo as persona_correo,
					persona.password as persona_password,
					persona.id_persona as persona_id,
					persona.telefono as persona_telefono,
					persona.organizacion_clave as organizacion_clave,
					persona.estado as persona_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as perfil_clave,
					organizacion.estado as organizacion_estado,
					perfil_administrador.nombre as perfil_nombre,
					perfil_administrador.correo as perfil_correo,
					perfil_administrador.password as perfil_password,
					perfil_administrador.id_cuenta as perfil_id,
					perfil_administrador.inicio_cuenta as perfil_inicio_cuenta,
					perfil_administrador.vencimiento_cuenta as perfil_vencimiento_cuenta,
					perfil_administrador.estado_cuenta as perfil_estado_cuenta
					from persona
					inner join organizacion on (persona.organizacion_clave = organizacion.clave)
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where persona.organizacion_clave = "'.$org.'"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listActive($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT persona.clave as persona_clave,
					persona.nombre as persona_nombre,
					persona.mote as persona_mote,
					persona.correo as persona_correo,
					persona.password as persona_password,
					persona.id_persona as persona_id,
					persona.telefono as persona_telefono,
					persona.organizacion_clave as organizacion_clave,
					persona.estado as persona_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as perfil_clave,
					organizacion.estado as organizacion_estado,
					perfil_administrador.nombre as perfil_nombre,
					perfil_administrador.correo as perfil_correo,
					perfil_administrador.password as perfil_password,
					perfil_administrador.id_cuenta as perfil_id,
					perfil_administrador.inicio_cuenta as perfil_inicio_cuenta,
					perfil_administrador.vencimiento_cuenta as perfil_vencimiento_cuenta,
					perfil_administrador.estado_cuenta as perfil_estado_cuenta
					from persona
					inner join organizacion on (persona.organizacion_clave = organizacion.clave)
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where persona.organizacion_clave = "'.$org.'" and persona.estado ="active"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listInactive($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT persona.clave as persona_clave,
					persona.nombre as persona_nombre,
					persona.mote as persona_mote,
					persona.correo as persona_correo,
					persona.password as persona_password,
					persona.id_persona as persona_id,
					persona.telefono as persona_telefono,
					persona.organizacion_clave as organizacion_clave,
					persona.estado as persona_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as perfil_clave,
					organizacion.estado as organizacion_estado,
					perfil_administrador.nombre as perfil_nombre,
					perfil_administrador.correo as perfil_correo,
					perfil_administrador.password as perfil_password,
					perfil_administrador.id_cuenta as perfil_id,
					perfil_administrador.inicio_cuenta as perfil_inicio_cuenta,
					perfil_administrador.vencimiento_cuenta as perfil_vencimiento_cuenta,
					perfil_administrador.estado_cuenta as perfil_estado_cuenta
					from persona
					inner join organizacion on (persona.organizacion_clave = organizacion.clave)
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where persona.organizacion_clave = "'.$org.'" and persona.estado ="inactive"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function viewData($key,$clave){
			$request = $this->open($key);
			$sql = 'SELECT persona.clave as persona_clave,
					persona.nombre as persona_nombre,
					persona.mote as persona_mote,
					persona.correo as persona_correo,
					persona.password as persona_password,
					persona.id_persona as persona_id,
					persona.telefono as persona_telefono,
					persona.organizacion_clave as organizacion_clave,
					persona.estado as persona_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as perfil_clave,
					organizacion.estado as organizacion_estado,
					perfil_administrador.nombre as perfil_nombre,
					perfil_administrador.correo as perfil_correo,
					perfil_administrador.password as perfil_password,
					perfil_administrador.id_cuenta as perfil_id,
					perfil_administrador.inicio_cuenta as perfil_inicio_cuenta,
					perfil_administrador.vencimiento_cuenta as perfil_vencimiento_cuenta,
					perfil_administrador.estado_cuenta as perfil_estado_cuenta
					from persona
					inner join organizacion on (persona.organizacion_clave = organizacion.clave)
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where persona.clave = "'.$clave.'" and persona.estado ="inactive"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function insert($key,$atr){
			$request = $this->open($key);
			$sql = 'INSERT INTO persona(
						nombre,
						mote,
						correo,
						password,
						id_persona,
						telefono,
						organizacion_clave)
			 		VALUES ( upper("'.$atr['nombre'].'"),
						upper("'.$atr['mote'].'"),
						upper("'.$atr['correo'].'"),
						upper("'.$atr['password'].'"),
						upper("'.$atr['id_persona'].'"),
						upper("'.$atr['telefono'].'"),
						upper("'.$atr['organizacion_clave'].'")
			 			)';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function modify($key,$atr){
			$request = $this->open($key);
			$sql = 'UPDATE persona 
					SET nombre = upper("'.$atr['nombre'].'"),
					mote = upper("'.$atr['mote'].'"),
					correo = upper("'.$atr['correo'].'"),
					password = upper("'.$atr['password'].'"),
					id_cuenta = upper("'.$atr['id_cuenta'].'"),
					telefono = upper("'.$atr['telefono'].'"),
					organizacion_clave = upper("'.$atr['organizacion_clave'].'"),
					where clave = "'.$atr['clave'].'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function remove($key,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE persona SET estado = "inactive" where clave = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function restore($key,$perfil,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE persona SET estado = "active" where clave = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

	}
?>