eventListeners();

function eventListeners() {
    document.querySelector("#form").addEventListener('submit', RegistValid);
}

function RegistValid(e) {
    e.preventDefault();

   // Get the value from the form
   let firstName, lastName, email, phoneNumber, address, city, state, zipCode, type;

   firstName = document.querySelector("#firstName").value;
   lastName = document.querySelector("#lastName").value;
   email = document.querySelector("#email").value;
   phoneNumber = document.querySelector("#phoneNumber").value;
   address = document.querySelector("#address").value;
   city = document.querySelector("#city").value;
   state = document.querySelector("#state").value;
   zipCode = document.querySelector("#zipCode").value;

   type = document.querySelector("#type").value;


if (firstName === '' || lastName === '' || email === '' ||  phoneNumber === '' ||  address === '' || city === '' || state === '' || zipCode === '') {
    //Alert
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Please fill all your credential!'
      })
}else {
    // Correct fills

    //datas that will send to the server
    let data = new FormData();
    data.append('firstName', firstName);
    data.append('lastName', lastName);
    data.append('email', email);
    data.append('phoneNumber', phoneNumber);
    data.append('address', address);
    data.append('city', city);
    data.append('state', state);
    data.append('zipCode', zipCode);
    data.append('action', type);

    // Make the call to AJAX
    let xhr = new XMLHttpRequest();

    xhr.open('POST', 'inc/models/model-client.php');

    // RETURN VALUES 
    xhr.onload = function(){
        if(this.status === 200) {
            let response = JSON.parse(xhr.responseText);
            console.log(response);
            
            if(response.respuesta === "correcto") {
                //Alert
                Swal.fire({
                    //position: 'top-end',
                    icon: 'success',
                    title: 'Added New Client',
                    text: 'Client was added successfully!'
                  })
                  .then(resultado => {
                    if(resultado.value) {
                        window.location.href = 'customer.php';
                    }
                })
            }
        }
    }
    

    
    //SEND VALUES
    xhr.send(data);

    }
   

}