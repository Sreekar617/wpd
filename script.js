document.querySelector(".water").addEventListener("mousemove", createRipple);

function createRipple(e) {
    const ripple = document.querySelector(".ripple");
    
    ripple.style.left = e.clientX - 50 + "px";
    ripple.style.top = e.clientY - 50 + "px";
    ripple.style.transform = "scale(1)";
    ripple.style.opacity = 1;

    setTimeout(() => {
        ripple.style.transform = "scale(0)";
        ripple.style.opacity = 0;
    }, 500);
}
