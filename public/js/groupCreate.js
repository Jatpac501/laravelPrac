let educatorCount = 0;
const addEducatorBtn = document.getElementById('addEducatorBtn');
const educatorList = document.querySelector('.card__list');
const addEducator = () => {
    educatorCount++;
    educatorList.innerHTML += `
    <div class="card__list__add">
        <input class="card__input" placeholder="ФИО" type="text" name="Название группы" id="educator${educatorCount}">
        <div id="addEducatorBtn" class="btn btn-delete delEducatorBtn">Х</div>
    </div>
    `;
    const delEducatorBtn = document.querySelectorAll('.delEducatorBtn');
    delEducatorBtn.forEach(btn => btn.addEventListener('click', delEducator));
};
addEducatorBtn.addEventListener('click', addEducator);
const delEducator = (e) => {
    e.target.parentNode.remove();
    educatorCount--;
};
