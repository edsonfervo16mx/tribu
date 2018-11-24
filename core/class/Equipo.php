<?php

	class Equipo{

		public $table = 'equipo';

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
			$sql = 'SELECT equipo.clave as equipo_clave,
					equipo.nombre as equipo_nombre,
					equipo.descripcion as equipo_descripcion,
					equipo.color as equipo_color,
					equipo.organizacion_clave as organizacion_clave,
					equipo.estado as equipo_estado,
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
					perfil_administrador.id_cuenta as perfil_id_cuenta,
					perfil_administrador.inicio_cuenta as perfil_inicio_cuenta,
					perfil_administrador.vencimiento_cuenta as perfil_vencimiento_cuenta,
					perfil_administrador.estado_cuenta as perfil_estado
					from equipo
					inner join organizacion on (equipo.organizacion_clave = organizacion.clave)
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listActive($key){
			$request = $this->open($key);
			$sql = 'SELECT equipo.clave as equipo_clave,
					equipo.nombre as equipo_nombre,
					equipo.descripcion as equipo_descripcion,
					equipo.color as equipo_color,
					equipo.organizacion_clave as organizacion_clave,
					equipo.estado as equipo_estado,
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
					perfil_administrador.id_cuenta as perfil_id_cuenta,
					perfil_administrador.inicio_cuenta as perfil_inicio_cuenta,
					perfil_administrador.vencimiento_cuenta as perfil_vencimiento_cuenta,
					perfil_administrador.estado_cuenta as perfil_estado
					from equipo
					inner join organizacion on (equipo.organizacion_clave = organizacion.clave)
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where equipo.estado = "active"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listInactive($key){
			$request = $this->open($key);
			$sql = 'SELECT equipo.clave as equipo_clave,
					equipo.nombre as equipo_nombre,
					equipo.descripcion as equipo_descripcion,
					equipo.color as equipo_color,
					equipo.organizacion_clave as organizacion_clave,
					equipo.estado as equipo_estado,
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
					perfil_administrador.id_cuenta as perfil_id_cuenta,
					perfil_administrador.inicio_cuenta as perfil_inicio_cuenta,
					perfil_administrador.vencimiento_cuenta as perfil_vencimiento_cuenta,
					perfil_administrador.estado_cuenta as perfil_estado
					from equipo
					inner join organizacion on (equipo.organizacion_clave = organizacion.clave)
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where equipo.estado = "inactive"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

	}

?>