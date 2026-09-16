<?php
require_once 'config/db.php';

class Producto {
    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getId() { return $this->id; }
    public function getCategoriaId() { return $this->categoria_id; }
    public function getNombre() { return $this->nombre; }
    public function getDescripcion() { return $this->descripcion; }
    public function getPrecio() { return $this->precio; }
    public function getStock() { return $this->stock; }
    public function getImagen() { return $this->imagen; }

    public function setId($id) { $this->id = $id; }
    public function setCategoriaId($categoria_id) { $this->categoria_id = $categoria_id; }
    public function setNombre($nombre) { $this->nombre = $this->db->real_escape_string($nombre); }
    public function setDescripcion($descripcion) { $this->descripcion = $this->db->real_escape_string($descripcion); }
    public function setPrecio($precio) { $this->precio = $this->db->real_escape_string($precio); }
    public function setStock($stock) { $this->stock = $this->db->real_escape_string($stock); }
    public function setImagen($imagen) { $this->imagen = $imagen; }

    public function getAll() {
        $productos = $this->db->query("SELECT * FROM productos ORDER BY id_producto DESC;");
        return $productos;
    }

    public function getRandom($limit) {
        $productos = $this->db->query("SELECT * FROM productos ORDER BY RAND() LIMIT $limit;");
        return $productos;
    }

  public function save() {
        $sql = "INSERT INTO productos VALUES(NULL, {$this->getCategoriaId()}, '{$this->getNombre()}', '{$this->getDescripcion()}', {$this->getPrecio()}, {$this->getStock()}, 'normal', CURDATE(), '{$this->getImagen()}');";
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }
}