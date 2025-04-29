document.addEventListener("DOMContentLoaded", function () {
  const planners = document.querySelectorAll(".planner");

  planners.forEach(planner => {
    const input = planner.querySelector(".todo-input");
    const ul = planner.querySelector(".myUL");
    const addBtn = planner.querySelector(".addBtn");

    const type = input.placeholder.includes("event") ? "events" : "todos";
    const table = planner.closest("table");
    const day = table ? table.querySelector("th").textContent.trim().toLowerCase() : "unknown";
    const key = `${day}-${type}`;

    // Load saved items
    const savedItems = JSON.parse(localStorage.getItem(key)) || [];
    savedItems.forEach(item => {
      createListItem(item, ul, savedItems, key);
    });

    // Add new item
    addBtn.addEventListener("click", () => {
      const inputValue = input.value.trim();
      if (!inputValue) {
        alert("You must write something!");
        return;
      }
      savedItems.push(inputValue);
      localStorage.setItem(key, JSON.stringify(savedItems));
      createListItem(inputValue, ul, savedItems, key);
      input.value = "";
    });
  });

  function createListItem(text, ul, savedItems, key) {
    const li = document.createElement("li");
    li.className = "todo";
    li.textContent = text;

    // Close button
    const span = document.createElement("SPAN");
    span.className = "close";
    span.textContent = "\u00D7";
    span.onclick = function () {
      ul.removeChild(li);
      const index = savedItems.indexOf(text);
      if (index > -1) {
        savedItems.splice(index, 1);
        localStorage.setItem(key, JSON.stringify(savedItems));
      }
    };

    li.appendChild(span);
    ul.appendChild(li);

    // Toggle checked
    li.addEventListener("click", () => {
      li.classList.toggle("checked");
    });
  }
});


