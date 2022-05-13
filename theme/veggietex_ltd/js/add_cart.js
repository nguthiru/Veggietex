function addCart(productID){
    fetch('index.php',{
        method:'POST',
        body: JSON.stringify({
            'add_to_cart': 'true',
            'product_id':productID
        })
    }).then(res=>{
        console.log(res)
        res.json().then(res=>{
            console.log(res)
        })
    })

}