var responseData;
$.ajax({
    type: "GET",
    url: "https://randomuser.me/api/",
    dataType: "JSON",
    success: function (response) {
        responseData = response.results[0];
        console.log("response", responseData);

        // var
        let registeredDate = new Date(responseData['registered']['date']);
        let strRegisteredDate = registeredDate.toString("d/M/yyyy");
        let birthdayDate = new Date(responseData['dob']['date']);
        let strBirthdayDate = birthdayDate.toString("d/M/yyyy");
        
        // Set value
        $("#username").html(responseData['login']['username']);
        $("#email").html(responseData.email);
        $("#registered").html(strRegisteredDate);
        $("#pictureProfile").attr('src',responseData['picture']['large']);

        $("#idName").html(responseData['id']['name']);
        $("#idValue").html(responseData['id']['value']);
        $("#fullname").html(responseData['name']['title']+" "+responseData['name']['first']+" "+responseData['name']['last']);
        $("#gender").html(responseData.gender);
        $("#birthday").html(strBirthdayDate);
        $("#age").html(responseData['dob']['age']);
        $("#telephone").html(responseData.phone);
        $("#phoneNumber").html(responseData.cell);

        $("#address").html(responseData['location']['street']['name']+','+responseData['location']['street']['number']);
        $("#postcode").html(responseData['location']['postcode']);
        $("#city").html(responseData['location']['city']);
        $("#state").html(responseData['location']['state']);
        $("#country").html(responseData['location']['country']);
    }
});