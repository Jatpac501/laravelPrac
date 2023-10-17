let studentCount = -1;
const addStudentBtn = document.getElementById('addStudentBtn');
const studentList = document.querySelector('.card__list');

const createStudentElement = () => {
    const studentElement = document.createElement('div');
    studentElement.className = 'card__list__add';

    const inputElement = document.createElement('input');
    inputElement.className = 'card__input';
    inputElement.placeholder = 'ФИО';
    inputElement.type = 'text';
    inputElement.value = `Студент ${studentCount + 1}`;
    inputElement.name = `Студент ${studentCount + 1}`;
    inputElement.id = `student${studentCount + 1}`;

    const deleteButton = document.createElement('div');
    deleteButton.className = 'btn btn-delete delStudentBtn';
    deleteButton.innerText = 'Х';

    deleteButton.addEventListener('click', () => {
        studentElement.remove();
        studentCount--;
    });

    studentElement.appendChild(inputElement);
    studentElement.appendChild(deleteButton);
    return studentElement;
};

const addStudent = () => {
    studentCount++;
    studentList.appendChild(createStudentElement());
};

addStudentBtn.addEventListener('click', addStudent);
