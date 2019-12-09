<?php 
    $action = $_POST['action']; 
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipCode = $_POST['zipCode'];
    
    if($action === 'create'){
        // import the connection 
        include '../functions/connection.php';
        try {
            $sql = "INSERT INTO customer2 (firstname, lastname, cellphone, email, address, city, state, zipcode) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ssssssss', $firstName, $lastName, $phoneNumber, $email, $address, $city, $state, $zipCode);
            $stmt->execute();
            if($stmt->affected_rows > 0) {
                $response = array(
                    'respuesta' => 'correcto'
                    
                );
            }  else {
                $response = array(
                    'respuesta' => 'error'
                );
            }
            $stmt->close();
            $conn->close();
        } catch(Exception $e) {
            // En caso de un error, tomar la exepcion
            $response = array(
                'error' => $e->getMessage()
            );
        }
    echo json_encode ($response);
}

    /*
    TODO: 
        Insert client
        Update client
        Delect client
    */