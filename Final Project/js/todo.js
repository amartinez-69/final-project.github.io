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

    let savedItems = JSON.parse(localStorage.getItem(key)) || [];

    function saveToLocal() {
      localStorage.setItem(key, JSON.stringify(savedItems));
    }

    function renderList() {
      ul.innerHTML = "";
      savedItems.forEach((item, index) => {
        const li = document.createElement("li");
        li.className = "todo";

        if (item.checked) {
          li.classList.add("checked");
        }

        // Text node
        const textNode = document.createTextNode(item.text);
        li.appendChild(textNode);

        // Close button
        const span = document.createElement("span");
        span.className = "close";
        span.textContent = "\u00D7";
        span.onclick = function (e) {
          e.stopPropagation(); // prevent toggle
          savedItems.splice(index, 1);
          saveToLocal();
          renderList();
        };
        li.appendChild(span);

        // Toggle checked
        li.addEventListener("click", function () {
          item.checked = !item.checked;
          saveToLocal();
          renderList();
        });

        ul.appendChild(li);
      });
    }

    addBtn.addEventListener("click", () => {
      const inputValue = input.value.trim();
      if (!inputValue) {
        alert("You must write something!");
        return;
      }

      const newItem = { text: inputValue, checked: false };
      savedItems.push(newItem);
      saveToLocal();
      input.value = "";
      renderList();
    });

    renderList(); // load on page load
  });
});


function savePlannerData() {
  const plannerData = {};
  const tables = document.querySelectorAll("table");

  tables.forEach((table) => {
      const dayHeader = table.querySelector(".day-header");
      if (!dayHeader) return;

      const day = dayHeader.textContent.trim().toLowerCase();

      const planners = table.querySelectorAll(".planner");

      if (planners.length >= 2) {
          const scheduledItems = planners[0].querySelectorAll("li");
          const todoItems = planners[1].querySelectorAll("li");

          plannerData[day] = {
              scheduled: Array.from(scheduledItems).map(li => li.textContent.trim()),
              todos: Array.from(todoItems).map(li => li.textContent.trim())
          };
      }
  });

  fetch('../php/save_planner.php', {
      method: 'POST',
      headers: {'Content-Type': 'application/json'},
      body: JSON.stringify(plannerData)
  }).then(response => response.json())
    .then(data => alert("Planner saved!"))
    .catch(error => console.error('Error:', error));
}

document.addEventListener("DOMContentLoaded", async function () {
  const response = await fetch("../php/load_planner.php");
  const serverData = await response.json();

  const planners = document.querySelectorAll(".planner");

  planners.forEach(planner => {
    const input = planner.querySelector(".todo-input");
    const ul = planner.querySelector(".myUL");
    const addBtn = planner.querySelector(".addBtn");

    const type = input.placeholder.includes("event") ? "scheduled" : "todos";
    const table = planner.closest("table");
    const day = table ? table.querySelector(".day-header").textContent.trim().toLowerCase() : "unknown";

    let savedItems = serverData[day]?.[type] || [];

    function renderList() {
      ul.innerHTML = "";
      savedItems.forEach((itemText, index) => {
        const li = document.createElement("li");
        li.className = "todo";
        li.textContent = itemText;

        const span = document.createElement("span");
        span.className = "close";
        span.textContent = "\u00D7";
        span.onclick = function (e) {
          e.stopPropagation();
          savedItems.splice(index, 1);
          renderList();
        };
        li.appendChild(span);

        li.addEventListener("click", function () {
          li.classList.toggle("checked");
        });

        ul.appendChild(li);
      });
    }

    addBtn.addEventListener("click", () => {
      const inputValue = input.value.trim();
      if (!inputValue) {
        alert("You must write something!");
        return;
      }

      savedItems.push(inputValue);
      input.value = "";
      renderList();
    });

    renderList();
  });
});



