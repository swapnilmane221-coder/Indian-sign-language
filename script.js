function createCircle() {
    const colors = ['#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6', 
                    '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D'];

    const navbar = document.getElementById('navbar');
    const circle = document.createElement('div');

    circle.classList.add('circle');
    circle.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
    circle.style.width = `${Math.floor(Math.random() * 30) + 10}px`;
    circle.style.height = circle.style.width;
    circle.style.left = `${Math.random() * (navbar.offsetWidth - parseInt(circle.style.width))}px`;
    circle.style.top = `${Math.random() * (navbar.offsetHeight - parseInt(circle.style.height))}px`;

    navbar.appendChild(circle);
}

// Create 5 circles
for (let i = 0; i < 5; i++) {
    createCircle();
}
