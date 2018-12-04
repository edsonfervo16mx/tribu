<?php
	class RelPersonaNota{

		public $table = 'rel_persona_nota';

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
			$sql = 'SELECT rel_persona_nota.cve as rel_persona_nota_cve,
					rel_persona_nota.estado as rel_persona_nota_estado,
					persona.clave as persona_clave,
					persona.nombre as persona_nombre,
					persona.mote as persona_mote,
					persona.correo as persona_correo,
					persona.password as persona_password,
					persona.id_persona as persona_id_persona,
					persona.telefono as persona_telefono,
					persona.organizacion_clave as persona_organizacion_clave,
					persona.estado as persona_estado,
					nota.cve as nota_cve,
					nota.nombre as nota_nombre,
					nota.fecha_inicio as nota_fecha_inicio,
					nota.fecha_fin as nota_fecha_fin,
					nota.hora_inicio as nota_hora_inicio,
					nota.hora_fin as nota_hora_fin,
					nota.descripcion as nota_descripcion,
					nota.estado as nota_estado,
					organizacion.clave as organizacion_clave,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.estado as organizacion_estado,
					perfil_administrador.clave as perfil_clave,
					perfil_administrador.nombre as perfil_nombre,
					perfil_administrador.correo as perfil_correo,
					perfil_administrador.password as perfil_password,
					perfil_administrador.id_cuenta as perfil_id_cuenta,
					perfil_administrador.inicio_cuenta as perfil_inicio_cuenta,
					perfil_administrador.vencimiento_cuenta as perfil_vencimiento_cuenta,
					perfil_administrador.estado_cuenta as perfil_estado_cuenta
					from rel_persona_nota
					inner join persona on (rel_persona_nota.persona_clave = persona.clave)
					inner join nota on (rel_persona_nota.nota_cve = nota.cve)
					inner join organizacion on (nota.organizacion_clave = organizacion.clave)
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where organizacion.clave = "'.$org.'"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listActive($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT rel_persona_nota.cve as rel_persona_nota_cve,
					rel_persona_nota.estado as rel_persona_nota_estado,
					persona.clave as persona_clave,
					persona.nombre as persona_nombre,
					persona.mote as persona_mote,
					persona.correo as persona_correo,
					persona.password as persona_password,
					persona.id_persona as persona_id_persona,
					persona.telefono as persona_telefono,
					persona.organizacion_clave as persona_organizacion_clave,
					persona.estado as persona_estado,
					nota.cve as nota_cve,
					nota.nombre as nota_nombre,
					nota.fecha_inicio as nota_fecha_inicio,
					nota.fecha_fin as nota_fecha_fin,
					nota.hora_inicio as nota_hora_inicio,
					nota.hora_fin as nota_hora_fin,
					nota.descripcion as nota_descripcion,
					nota.estado as nota_estado,
					organizacion.clave as organizacion_clave,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.estado as organizacion_estado,
					perfil_administrador.clave as perfil_clave,
					perfil_administrador.nombre as perfil_nombre,
					perfil_administrador.correo as perfil_correo,
					perfil_administrador.password as perfil_password,
					perfil_administrador.id_cuenta as perfil_id_cuenta,
					perfil_administrador.inicio_cuenta as perfil_inicio_cuenta,
					perfil_administrador.vencimiento_cuenta as perfil_vencimiento_cuenta,
					perfil_administrador.estado_cuenta as perfil_estado_cuenta
					from rel_persona_nota
					inner join persona on (rel_persona_nota.persona_clave = persona.clave)
					inner join nota on (rel_persona_nota.nota_cve = nota.cve)
					inner join organizacion on (nota.organizacion_clave = organizacion.clave)
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where organizacion.clave = "'.$org.'" and rel_persona_nota.estado = "active"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listInactive($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT rel_persona_nota.cve as rel_persona_nota_cve,
					rel_persona_nota.estado as rel_persona_nota_estado,
					persona.clave as persona_clave,
					persona.nombre as persona_nombre,
					persona.mote as persona_mote,
					persona.correo as persona_correo,
					persona.password as persona_password,
					persona.id_persona as persona_id_persona,
					persona.telefono as persona_telefono,
					persona.organizacion_clave as persona_organizacion_clave,
					persona.estado as persona_estado,
					nota.cve as nota_cve,
					nota.nombre as nota_nombre,
					nota.fecha_inicio as nota_fecha_inicio,
					nota.fecha_fin as nota_fecha_fin,
					nota.hora_inicio as nota_hora_inicio,
					nota.hora_fin as nota_hora_fin,
					nota.descripcion as nota_descripcion,
					nota.estado as nota_estado,
					organizacion.clave as organizacion_clave,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.estado as organizacion_estado,
					perfil_administrador.clave as perfil_clave,
					perfil_administrador.nombre as perfil_nombre,
					perfil_administrador.correo as perfil_correo,
					perfil_administrador.password as perfil_password,
					perfil_administrador.id_cuenta as perfil_id_cuenta,
					perfil_administrador.inicio_cuenta as perfil_inicio_cuenta,
					perfil_administrador.vencimiento_cuenta as perfil_vencimiento_cuenta,
					perfil_administrador.estado_cuenta as perfil_estado_cuenta
					from rel_persona_nota
					inner join persona on (rel_persona_nota.persona_clave = persona.clave)
					inner join nota on (rel_persona_nota.nota_cve = nota.cve)
					inner join organizacion on (nota.organizacion_clave = organizacion.clave)
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where organizacion.clave = "'.$org.'" and rel_persona_nota.estado = "inactive"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		/*falta verificar*/
		public function listPersona($key,$persona){
			$request = $this->open($key);
			$sql = 'SELECT rel_persona_nota.cve as rel_persona_nota_cve,
					rel_persona_nota.estado as rel_persona_nota_estado,
					persona.clave as persona_clave,
					persona.nombre as persona_nombre,
					persona.mote as persona_mote,
					persona.correo as persona_correo,
					persona.password as persona_password,
					persona.id_persona as persona_id_persona,
					persona.telefono as persona_telefono,
					persona.organizacion_clave as persona_organizacion_clave,
					persona.estado as persona_estado,
					nota.cve as nota_cve,
					nota.nombre as nota_nombre,
					nota.fecha_inicio as nota_fecha_inicio,
					nota.fecha_fin as nota_fecha_fin,
					nota.hora_inicio as nota_hora_inicio,
					nota.hora_fin as nota_hora_fin,
					nota.descripcion as nota_descripcion,
					nota.estado as nota_estado,
					organizacion.clave as organizacion_clave,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.estado as organizacion_estado,
					perfil_administrador.clave as perfil_clave,
					perfil_administrador.nombre as perfil_nombre,
					perfil_administrador.correo as perfil_correo,
					perfil_administrador.password as perfil_password,
					perfil_administrador.id_cuenta as perfil_id_cuenta,
					perfil_administrador.inicio_cuenta as perfil_inicio_cuenta,
					perfil_administrador.vencimiento_cuenta as perfil_vencimiento_cuenta,
					perfil_administrador.estado_cuenta as perfil_estado_cuenta
					from rel_persona_nota
					inner join persona on (rel_persona_nota.persona_clave = persona.clave)
					inner join nota on (rel_persona_nota.nota_cve = nota.cve)
					inner join organizacion on (nota.organizacion_clave = organizacion.clave)
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where persona.clave = "'.$persona.'"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function viewData($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT rel_persona_nota.cve as rel_persona_nota_cve,
					rel_persona_nota.estado as rel_persona_nota_estado,
					persona.clave as persona_clave,
					persona.nombre as persona_nombre,
					persona.mote as persona_mote,
					persona.correo as persona_correo,
					persona.password as persona_password,
					persona.id_persona as persona_id_persona,
					persona.telefono as persona_telefono,
					persona.organizacion_clave as persona_organizacion_clave,
					persona.estado as persona_estado,
					nota.cve as nota_cve,
					nota.nombre as nota_nombre,
					nota.fecha_inicio as nota_fecha_inicio,
					nota.fecha_fin as nota_fecha_fin,
					nota.hora_inicio as nota_hora_inicio,
					nota.hora_fin as nota_hora_fin,
					nota.descripcion as nota_descripcion,
					nota.estado as nota_estado,
					organizacion.clave as organizacion_clave,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.estado as organizacion_estado,
					perfil_administrador.clave as perfil_clave,
					perfil_administrador.nombre as perfil_nombre,
					perfil_administrador.correo as perfil_correo,
					perfil_administrador.password as perfil_password,
					perfil_administrador.id_cuenta as perfil_id_cuenta,
					perfil_administrador.inicio_cuenta as perfil_inicio_cuenta,
					perfil_administrador.vencimiento_cuenta as perfil_vencimiento_cuenta,
					perfil_administrador.estado_cuenta as perfil_estado_cuenta
					from rel_persona_nota
					inner join persona on (rel_persona_nota.persona_clave = persona.clave)
					inner join nota on (rel_persona_nota.nota_cve = nota.cve)
					inner join organizacion on (nota.organizacion_clave = organizacion.clave)
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where rel_persona_nota.cve = "'.$clave.'" LIMIT 1';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function insert($key,$atr){
			$request = $this->open($key);
			$sql = 'INSERT INTO rel_persona_nota(
						persona_clave,
						nota_cve)
			 		VALUES ( upper("'.$atr['persona_clave'].'"),
						upper("'.$atr['nota_cve'].'")
			 			)';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function modify($key,$atr){
			$request = $this->open($key);
			$sql = 'UPDATE rel_persona_nota 
					SET persona_clave = upper("'.$atr['persona_clave'].'"),
					nota_cve = upper("'.$atr['nota_cve'].'")
					where clave = "'.$atr['clave'].'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function remove($key,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE rel_persona_nota SET estado = "inactive" where clave = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function restore($key,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE rel_persona_nota SET estado = "active" where clave = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

	}
?>