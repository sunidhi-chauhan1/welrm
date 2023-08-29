

<style>
#up-arrow, #down-arrow {
    width: 22px;
    height: 8px;
}
#total-count {
    font-weight: 50;
    font-size: 17px;
}
.container{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

</style>

<html>


<body>
    <div class="container">
        <div id="increment-count">
        <ion-icon name="remove-circle-outline" 
        role="img" class="md hydrated dec"></ion-icon>
        <p>+</p>
        </div>
        <div id="total-count">
        </div>
        <div id="decrement-count">
        <ion-icon name="remove-circle-outline" 
        role="img" class="md hydrated dec"></ion-icon>
        <p>-</p>
        </div>
    </div>
</body>




<script>
// Select increment and decrement buttons
const incrementCount = document.getElementById("increment-count");
const decrementCount = document.getElementById("decrement-count");
const totalCount = document.getElementById("total-count");

// Variable to track count
var count = 0;
totalCount.innerHTML = count;
const handleIncrement = () => {
  count++;
  totalCount.innerHTML = count;
};

const handleDecrement = () => {
  count--;
  totalCount.innerHTML = count;
};

incrementCount.addEventListener("click", handleIncrement);
decrementCount.addEventListener("click", handleDecrement);
</script>

