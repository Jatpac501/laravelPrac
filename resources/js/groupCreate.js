let educatorCount = 0;
console.log(educatorCount);
const addEducatorBtn = document.getElementById('addEducatorBtn')
const addEducator = () => {
    console.log(1)
    educatorCount++;
    document.querySelector('.card__list').innerHTML = document.createElement("input");
    document.createTextNode("Привет мир");
};
addEducatorBtn.addEventListener('click', console.log(1));
