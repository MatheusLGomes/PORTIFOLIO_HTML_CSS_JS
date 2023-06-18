<?php

class Model {
    private $server = "localhost";
    private $username = "root";
    private $pass = ""; 
    private $database = "aula_sistema_cadastro";
    private $conn;
     
    public function __construct() {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->pass, $this->database);
        } catch (mysqli_sql_exception $e) {
            echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
        }
    }
    
    public function insert() {
        if (isset($_POST['submit'])) {
           // echo "ok";
            if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['whatsapp']) && isset($_POST['endereco'])) {
                if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['whatsapp']) && !empty($_POST['address'])) {
                    $name = $this->conn->real_escape_string(trim($_POST['name']));
                    $email = $this->conn->real_escape_string(trim($_POST['email']));
                    $whats = $this->conn->real_escape_string(trim($_POST['whatsapp']));
                    $address = $this->conn->real_escape_string(trim($_POST['address']));
                    
                    
                    $query = "INSERT INTO cadastros (name, email, whatsapp, address) VALUES ('$name', '$email', '$whats', '$address')";

                    if ($sql = $this->conn->query($query)) {
                        echo "<script>alert('Dados inseridos com sucesso!')</script>";
                        echo "<script>window.location.href='index.php'</script>";
                    } else {
                        echo "<script>alert('Ocorreu um erro!')</script>";
                        echo "<script>window.location.href='index.php'</script>";
                    }
                } else {
                    echo "<script>alert('Preencha todos os campos!')</script>";
                    echo "<script>window.location.href='index.php'</script>";
                }
            } else {
                echo "<script>alert('Campos vazios!')</script>";
            }
        }
    }
    
    public function fetch() {
        $data = array();
        $query = "SELECT * FROM cadastros";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function delete($id) {
        $query = "DELETE FROM cadastros WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function fetch_unico($id) {
        $data = null;
        $query = "SELECT * FROM cadastros WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
           while ($row = $sql->fetch_assoc()) {
               $data = $row;
           }
        }
        return $data;
    }
    
    public function edit($id) {
        $data = null;
        $query = "SELECT * FROM cadastros WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }
    public function update ($data){
        $query = "UPDATE cadastros SET name= '$data[name]', email= '$data[email]', whatsapp= '$data[whatsapp]', 
        endereco= '$data[endereco]' WHERE id='$data[id]'";
        if($sql = $this->conn->query($query)){
            return true;
            }else{
                return false;
        }

    }
}
  
?>
