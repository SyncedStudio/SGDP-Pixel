document.addEventListener("DOMContentLoaded", function () {
    const canvas = document.getElementById("pixelCanvas");
    const ctx = canvas.getContext("2d");

    canvas.addEventListener("mousedown", handleCanvasClick);

    function handleCanvasClick(event) {
        const rect = canvas.getBoundingClientRect();
        const x = event.clientX - rect.left;
        const y = event.clientY - rect.top;

        // red pixel test
        drawPixel(x, y, "red");
    }

    function drawPixel(x, y, color) {
        ctx.fillStyle = color;
        ctx.fillRect(x, y, 1, 1);
    }
});
