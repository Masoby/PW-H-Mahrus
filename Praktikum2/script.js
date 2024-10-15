function addTask() {
    const taskInput = document.getElementById("todo-input");
    const taskText = taskInput.value.trim();

    if (taskText === "") {
        alert("Tugas tidak boleh kosong!");
        return;
    }

    const taskList = document.getElementById("todo-list");
    const taskItem = document.createElement("li");

    const taskContent = document.createElement("span");
    taskContent.textContent = taskText;

    const editButton = document.createElement("button");
    editButton.textContent = "Edit";
    editButton.className = "edit-btn";
    editButton.onclick = () => editTask(taskItem, taskContent);

    const deleteButton = document.createElement("button");
    deleteButton.textContent = "Hapus";
    deleteButton.className = "delete-btn";
    deleteButton.onclick = () => deleteTask(taskItem);

    taskItem.appendChild(taskContent);
    taskItem.appendChild(editButton);
    taskItem.appendChild(deleteButton);
    taskList.appendChild(taskItem);

    taskInput.value = "";
}

function deleteTask(taskItem) {
    taskItem.remove();
}

function editTask(taskItem, taskContent) {
    const newText = prompt("Edit tugas:", taskContent.textContent);
    if (newText !== null && newText.trim() !== "") {
        taskContent.textContent = newText;
    }
}