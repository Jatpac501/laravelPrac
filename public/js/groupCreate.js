let studentCount = 0;
const addStudentBtn = document.getElementById('addStudentBtn');
const studentList = document.querySelector('.card__list');
const addStudent = () => {
    studentCount++;
    studentList.innerHTML += `
    <div class="card__list__add">
        <input class="card__input" placeholder="ФИО" type="text" value="Студент ${studentCount}" name="Студент ${studentCount}" id="student${studentCount}">
        <div id="addStudentBtn" class="btn btn-delete delStudentBtn">Х</div>
    </div>
    `;
    const delStudentBtn = document.querySelectorAll('.delStudentBtn');
    delStudentBtn.forEach(btn => btn.addEventListener('click', delStudent));
};
addStudentBtn.addEventListener('click', addStudent);
const delStudent = (e) => {
    e.target.parentNode.remove();
    studentCount--;
};
