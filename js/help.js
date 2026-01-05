function toggleFAQ(element) {
    const card = element.parentElement;
    card.classList.toggle('active');
    
    // Toggle icon
    const icon = element.querySelector('i');
    if (card.classList.contains('active')) {
        icon.classList.replace('fa-chevron-down', 'fa-chevron-up');
    } else {
        icon.classList.replace('fa-chevron-up', 'fa-chevron-down');
    }
}

function filterFAQ() {
    const input = document.getElementById('helpSearch').value.toLowerCase();
    const cards = document.getElementsByClassName('faq-card');

    for (let i = 0; i < cards.length; i++) {
        let keywords = cards[i].getAttribute('data-keywords');
        let question = cards[i].innerText.toLowerCase();
        
        if (question.includes(input) || keywords.includes(input)) {
            cards[i].style.display = "block";
        } else {
            cards[i].style.display = "none";
        }
    }
}