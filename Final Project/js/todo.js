
document.addEventListener("DOMContentLoaded", function () {
  const planners = document.querySelectorAll(".planner");

  planners.forEach(planner => {
    const input = planner.querySelector(".todo-input");
    const ul = planner.querySelector(".myUL");
    const addBtn = planner.querySelector(".addBtn");

    // Add click event to "Add" button
    addBtn.addEventListener("click", () => {
      const inputValue = input.value.trim();
      if (!inputValue) {
        alert("You must write something!");
        return;
      }

      const li = document.createElement("li");
      li.className = "todo";
      li.textContent = inputValue;

      // Add close button
      const span = document.createElement("SPAN");
      span.className = "close";
      span.textContent = "\u00D7";
      li.appendChild(span);

      ul.appendChild(li);
      input.value = "";

      // Close button action
      span.onclick = () => li.style.display = "none";
    });

    // Check off item on click
    ul.addEventListener("click", ev => {
      if (ev.target.classList.contains("todo")) {
        ev.target.classList.toggle("checked");
      }
    });

    // Initialize existing items with close buttons
    const existingItems = ul.querySelectorAll("li");
    existingItems.forEach(item => {
      const span = document.createElement("SPAN");
      span.className = "close";
      span.textContent = "\u00D7";
      item.appendChild(span);
      span.onclick = () => item.style.display = "none";
    });
  });
});

