let cart = document.querySelectorAll('.cart');

let products = [
    {
        name: 'tabla';
        tag: 'tabla';
        price:450$,
        incart:0

    }
    {
        name: 'guitar';
        tag: 'guitar';
        price:450$,
        incart:0

    }
    {
        name: 'keyboard';
        tag: 'keyboard';
        price:450$,
        incart:0

    }
]
for( let i=0; i < cart.length; i++)
{
    cart[i].addEventListener('click', () =>{       
        numberofcarts();
    })
}

function numberofitemsoncart(){
    let productnumbers = localStorage.getItem('numberofcarts');
    document.querySelector('.c span').textContent = productnumbers;
}

function numberofcarts(){
    let productnumbers = localStorage.getItem('numberofcarts');
    productnumbers = parseInt(productnumbers);
    if(productnumbers){
        localStorage.setItem('numberofcarts', productnumbers + 1);
        document.querySelector('.c span').textContent = productnumbers + 1;
    }else{
        localStorage.setItem('numberofcarts',  1);
        document.querySelector('.c span').textContent = 1;
    }
  
}
numberofitemsoncart();