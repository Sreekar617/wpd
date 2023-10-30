const text = document.querySelector(".bouncy");
let x = 0;
let y = 0;
let xDirection = 1;
let yDirection = 1;

function animate() {
    const maxX = 0.99*window.innerWidth - 0.99*text.clientWidth;
    const maxY = 0.98*window.innerHeight - 0.99*text.clientHeight;

    x += 5 * xDirection;
    y += 5 * yDirection;

    if (x < 0 || x > maxX) {
        xDirection *= -1;
    }

    if (y < 0 || y > maxY) {
        yDirection *= -1;
    }

    text.style.transform = `translate(${x}px, ${y}px)`;
    requestAnimationFrame(animate);
}

animate();