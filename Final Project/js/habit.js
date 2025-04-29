// Load habits on page load
window.onload = function () {
    const savedHabits = JSON.parse(localStorage.getItem("habits")) || [];
    savedHabits.forEach((habit, index) => {
      createHabitElement(habit.name, habit.waterLvl, index);
    });
  };
  
  // Add habit
  function addHabit() {
    const name = prompt("Enter Habit title:");
    if (name) {
      const habits = JSON.parse(localStorage.getItem("habits")) || [];
      const newHabit = { name, waterLvl: 0 };
      habits.push(newHabit);
      localStorage.setItem("habits", JSON.stringify(habits));
  
      createHabitElement(name, 0, habits.length - 1);
    }
  }
  
  // Render the habit DOM
  function createHabitElement(name, waterLvl, index) {
    const container = document.getElementById('forestContainer');
    const habitDiv = document.createElement('div');
    habitDiv.className = 'forest';
    habitDiv.dataset.index = index;
  
    renderHabit(habitDiv, name, waterLvl);
    container.appendChild(habitDiv);
  }
  
  // Watering function
  function addWater(button) {
    const habitDiv = button.closest('.forest');
    const index = parseInt(habitDiv.dataset.index);
  
    const habits = JSON.parse(localStorage.getItem("habits")) || [];
    habits[index].waterLvl += 1;
    localStorage.setItem("habits", JSON.stringify(habits));
  
    renderHabit(habitDiv, habits[index].name, habits[index].waterLvl);
  }
  
  // Render tree stages based on water level
  function renderHabit(habitDiv, name, waterLvl) {
    let svg = "";
  
    if (waterLvl <= 4) {
      svg = `<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M32 50C32 40 28 30 24 20" stroke="green" stroke-width="4" />
      <path d="M24 20C20 10 10 10 10 10C12 18 18 22 24 20Z" fill="lightgreen" />
      <path d="M24 20C28 10 38 10 38 10C36 18 30 22 24 20Z" fill="lightgreen" />
    </svg>
    `;
    } else if (waterLvl <= 9) {
      svg = `<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="30" y="30" width="4" height="24" fill="sienna"/>
      <circle cx="32" cy="24" r="12" fill="green"/>
    </svg>`;
    } else if (waterLvl <= 14) {
      svg = `<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="28" y="32" width="8" height="28" fill="sienna"/>
      <circle cx="32" cy="24" r="16" fill="forestgreen"/>
      <circle cx="20" cy="28" r="12" fill="forestgreen"/>
      <circle cx="44" cy="28" r="12" fill="forestgreen"/>
    </svg>`;
    } else {
      svg = `<svg width="64" height="64" viewBox="0 0 64 64">
      <rect x="28" y="32" width="8" height="28" fill="sienna"/>
      <circle cx="32" cy="24" r="16" fill="forestgreen"/>
      <circle cx="20" cy="28" r="12" fill="forestgreen"/>
      <circle cx="44" cy="28" r="12" fill="forestgreen"/>
      <circle cx="26" cy="20" r="2" fill="pink"/>
      <circle cx="38" cy="18" r="2" fill="pink"/>
      <circle cx="30" cy="30" r="2" fill="pink"/>
      <circle cx="36" cy="28" r="2" fill="pink"/>
      <circle cx="22" cy="26" r="2" fill="pink"/>
    </svg>`;
    }
  
    habitDiv.innerHTML = `
      ${svg}
      <div class="forest-container">${name}</div>
      <button onclick="addWater(this)">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <path d="M16 2C16 2 6 12 6 20C6 25.5228 10.4772 30 16 30C21.5228 30 26 25.5228 26 20C26 12 16 2 16 2Z" fill="deepskyblue"/>
        </svg>
      </button>
    `;
  }
  