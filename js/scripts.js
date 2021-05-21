function makeReservation() 
{
    alert("Make Reservation Button Clicked!");
}

function greeting() {
    var hour = new Date().getHours(); 
    var greeting;
    if (hour < 18) {
      greeting = "Good day!";
    } else {
      greeting = "Good evening!";
    }
    document.getElementById("demo_greeting").innerHTML = greeting;
}