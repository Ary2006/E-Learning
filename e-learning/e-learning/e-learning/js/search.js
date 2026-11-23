function searchCourses() {
    const query = document.getElementById('searchInput').value.toLowerCase();
    const cards = document.querySelectorAll('.course-card');

    cards.forEach(card => {
        const title = card.querySelector('h3').innerText.toLowerCase();
        const matches = title.includes(query);
        card.style.display = matches ? 'block' : 'none';
    });
}

function clearSearch() {
    document.getElementById('searchInput').value = '';
    const cards = document.querySelectorAll('.course-card');
    cards.forEach(card => card.style.display = 'block');
}
