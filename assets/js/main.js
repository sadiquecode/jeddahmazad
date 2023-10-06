const select = document.getElementById('select');
const arrowIcon = document.querySelector('.arrow-icon');

select.addEventListener('click', () => {
    const customSelect = select.parentElement;
    customSelect.classList.toggle('expanded');
    arrowIcon.classList.toggle('expanded');
});
