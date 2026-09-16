var gt=0;
var iprice = document.getElementsByClassName('iprice');
var iquantity = document.getElementsByClassName('iquantity');
var itotal = document.getElementsByClassName('itotal');
var gtotal = document.getElementById('gtotal');

function subTotal(){
    gt=0;
    for(i=0;i<iprice.length;i++){
        itotal[i].innerText = (iprice[i].value)*(iquantity[i].value);
        gt = gt+(iprice[i].value)*(iquantity[i].value);
    }
    gtotal.innerText  = gt;
}

subTotal();

// ---------------------------------checkout-page-----------------------------

// Get elements
const checkoutBtn = document.getElementById("checkout-btn");
const modal = document.getElementById("checkout-modal");
const closeBtn = document.querySelector(".close-btn");
const close_Btn = document.querySelector(".close_Btn");

// Show the modal when "Checkout" is clicked
checkoutBtn.addEventListener("click", () => {
    modal.style.display = "block";
});

// Close the modal when "x" is clicked
closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
});
close_Btn.addEventListener("click", () => {
    modal.style.display = "none";
});

// Close the modal if the user clicks outside of it
window.addEventListener("click", (event) => {
    if (event.target === modal) {
        modal.style.display = "none";
    }
});


// Function to close the form (hide it)
function closeForm() {
    document.getElementsByClassName('modal').style.display = 'none';
}

