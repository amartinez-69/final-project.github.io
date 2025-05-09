window.onload = function () {
  fetch('../php/load_folders.php')
    .then(response => response.json())
    .then(data => {
      if (data.folders && Array.isArray(data.folders)) {
        localStorage.setItem("folders", JSON.stringify(data.folders));
        data.folders.forEach((folder, index) => {
          createFolderElement(folder.name, index);
        });
      }
    })
    .catch(error => {
      console.error("Couldn't load folders from server:", error);

      // fallback to localStorage
      const savedFolders = JSON.parse(localStorage.getItem("folders")) || [];
      savedFolders.forEach((folder, index) => {
        createFolderElement(folder.name, index);
      });
    });
};

function addFolder() {
  const name = prompt("Enter folder name:");
  if (!name) return;

  const savedFolders = JSON.parse(localStorage.getItem("folders")) || [];
  const newFolder = { name };
  savedFolders.push(newFolder);
  localStorage.setItem("folders", JSON.stringify(savedFolders));

  createFolderElement(name, savedFolders.length - 1);

  // Send the updated folders list to the server
  fetch('../php/save_folders.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ folders: savedFolders })
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      console.log("Folder list saved on server.");
    } else {
      console.error(data.error || 'Unknown error');
    }
  })
  .catch(error => console.error('Error saving folders:', error));
}


function createFolderElement(name, index) {
  const container = document.getElementById('folderContainer');
  const folderDiv = document.createElement('div');
  folderDiv.className = 'folder';
  folderDiv.innerHTML = `
      <a href="folder${index + 1}.html">
          <svg class="folder-icon" width="100" height="80" viewBox="0 0 64 48" xmlns="http://www.w3.org/2000/svg">
              <path class="folder-tab" d="M4 12 H24 L28 16 H60 V44 H4 Z" fill="#FC5464" stroke="#c94350" stroke-width="2"/>
              <rect class="folder-body" x="4" y="16" width="56" height="28" fill="#FC5464" stroke="#c94350" stroke-width="2"/>
          </svg>
          <div>${name}</div>
      </a>
  `;
  container.appendChild(folderDiv);
}


//doesnt work yet:
function randomizeColor(){
        const r = Math.floor(Math.random() * 256);
        const g = Math.floor(Math.random() * 256);
        const b = Math.floor(Math.random() * 256);
        return `rgb(${r},${g},${b})`;
}
