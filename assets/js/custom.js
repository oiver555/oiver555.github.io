const playlistButton = document.getElementById("playlist-btn");
const playlistElement = document.getElementById("playlist");

document.getElementById("playlist").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent the default click behavior
    // You can add any custom JavaScript code here (if needed)
});

playlistButton.addEventListener("click", (event) => {
    event.preventDefault(); 
    // Move the element upward using CSS transform
    playlistElement.style.transform = "translateY(0px)";
});