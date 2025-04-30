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



