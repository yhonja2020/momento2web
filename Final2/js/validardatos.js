function validar() {
    let name = document.getElementById("diaryname").value;
    let lasname = document.getElementById("diarylastname").value;
    let number_id = document.getElementById("diarynumber_id").value;
    let date_birth = document.getElementById("diarydate_birth").value;
    let city_residence = document.getElementById("diarycity_residence").value;
    let district = document.getElementById("diarydistrict").value;
    let number_mobile = document.getElementById("diarynumber_mobile").value;

    valor = new Date(date_birth)


    console.log("validar")

    if (name === "" || lasname === "" || number_id === "" || date_birth === "" || city_residence === "" || district === "" || number_mobile === "") {

        alert("You must fill all the fields");
        return false;

    }
    else
        if (isNaN(number_id)) {
            alert("The Numbre_ID field must be numeric");
            return false;
        }

        else
            if (isNaN(number_mobile)) {
                alert("The Phone Number field must be numeric");
                return false;
            }
            else
                if (number_mobile.length > 10) {
                    alert("The number_mobile must be 10 digits");
                    return false;
                }
              

    return true;

}


