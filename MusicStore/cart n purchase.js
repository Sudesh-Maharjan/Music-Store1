var removebtn = document.getElementsByClassName("remove-cart")
console.log(removebtn)
for(var i = 0; i < removebtn.length; i++){
    var button = removebtn[i]
    button.addEventListener('click', function(){
        console.log('clicked')
    })
}
