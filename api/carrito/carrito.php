<?php
    include_once '../../lib/session.php';
    class Carrito extends Session{
        
        function __construct(){
            parent::__construct('carrito');
        }

        //Funcion para cargar el carrito cada que se agrege un producto
        public function load(){
            if($this->getValue()==null){
                return [];
            }

            return $this->getValue();
        }

        //Funcion para añadir un nuevo producto o agregar mas a un producto ya ingresado
        public function add($id){
            if($this->getValue()==null){
                $items = [];
            }else{
                $items = json_decode($this->getValue(), 1);

                for($i=0; $i<sizeof($items); $i++){
                    if($items[$i]['id'] == $id){
                        $items[$i]['cantidad']++;
                        $this->setValue(json_encode($items));

                        return $this->getValue();
                    }
                }
            }

            //Ingresa el producto inicial
            $item = ['id' => (int)$id, 'cantidad' => 1];

            array_push($items, $item);

            $this->setValue(json_encode($items));

            return $this->getValue();
        }

        //Elimina un producto o disminuye la cantidad de un producto 
        public function remove($id){
            if($this->getValue() == null){
                $items = [];
            }else{
                $items = json_decode($this->getValue(), 1);

                for($i=0; $i<sizeof($items); $i++){
                    if($items[$i]['id'] == $id){
                        $items[$i]['cantidad']--;

                        if($items[$i]['cantidad']==0){
                            unset($items[$i]);
                            $items = array_values($items);
                        }
                        $this->setValue(json_encode($items));

                        return true;
                    }
                }
            }
        }
    }
?>
