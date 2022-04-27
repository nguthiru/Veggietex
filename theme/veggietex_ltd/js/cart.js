calculateSubTotal();

var price = document.getElementsByClassName("price")
var total = document.getElementsByClassName("total")

var quantity = document.getElementsByName("quantity")

quantity.forEach((element,index) => {
    element.addEventListener("change",()=>{
        let currentQuantity = quantity[index].value

        var elementPrice = price[index].innerText
        var elementPrice = parseFloat(elementPrice.split("$")[1]).toFixed(2)
        console.log(elementPrice)
        var totalPrice = (elementPrice * currentQuantity).toFixed(2)
        var elementTotal = total[index]

        elementTotal.innerText = `$ ${totalPrice}`;
        calculateSubTotal()

    })


    
});

function calculateSubTotal() {
    var total = document.getElementsByClassName("total")
    var subTotal = document.getElementById("subtotal-price")
    var totalPrice = 0.0;


    Array.from(total).forEach(element => {
        var text = element.childNodes[0].data
    
        var price = parseFloat(text.split("$")[1])
        totalPrice += price;



        
    });
    subTotal.innerText = `$ ${totalPrice.toFixed(2)}`;
    


}