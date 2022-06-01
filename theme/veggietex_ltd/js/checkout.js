function place_order(){

    var fname = document.getElementById("firstname").value
    var lname = document.getElementById("lastname").value
    var country = document.getElementById("country").value
    var address = document.getElementById("street").value
    var apartment = document.getElementById("apartment").value
    var postcode = document.getElementById("postcodezip").value
    var phone = document.getElementById("phone").value
    var email = document.getElementById("email").value


    fetch("admin/place_order.php",{
        method:'POST',
        body: `
        fname=${fname}&lname=${lname}&country=${country}&address=${address}&apartment=${apartment}&postcode=${postcode}&phone=${phone}&email=${email}`,
        headers: {
            "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
          },

    }).then(res=>{
        res.text().then(res=>{
            console.log(res)
        })
    })
}