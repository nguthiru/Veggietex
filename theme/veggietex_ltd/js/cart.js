calculateSubTotal();

var price = document.getElementsByClassName("price")
var total = document.getElementsByClassName("total")
var totalCart = document.getElementsByClassName("total-price")

var quantity = document.getElementsByName("quantity")
var cartIDs = document.getElementsByName("cart_id")
quantity.forEach((element,index) => {
    element.addEventListener("change",()=>{
        let currentQuantity = quantity[index].value
        let cartID = cartIDs[index].value
        if(currentQuantity!=="0"){
            fetch("admin/cart_quantity.php",{
                method:'POST',
                body: `product_id=${cartID}&quantity=${currentQuantity}`,
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
                  },
            }).then(res=>{
                res.text().then(res=>{
                    console.log(res)
                })
                })
            
        var elementPrice = price[index].innerText
        var elementPrice = parseFloat(elementPrice.split("$")[1]).toFixed(2)
        var totalPrice = (elementPrice * currentQuantity).toFixed(2)
        var elementTotal = total[index]

        elementTotal.innerText = `$ ${totalPrice}`;
        calculateSubTotal()
        }

    })


    
});

function calculateSubTotal() {
    var total = document.getElementsByClassName("total")
    var subTotal = document.getElementById("subtotal-price")
    var totalCart = document.getElementById("total-price")
    var totalPrice = 0.0;


    Array.from(total).forEach(element => {
        var text = element.childNodes[0].data
    
        var price = parseFloat(text.split("$")[1])
        totalPrice += price;



        
    });
    subTotal.innerText = `$ ${totalPrice.toFixed(2)}`;
    totalCart.innerText = `$ ${totalPrice.toFixed(2)}`;
    


}