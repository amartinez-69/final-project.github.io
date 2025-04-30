window.onload = function () {
  const savedFolders = JSON.parse(localStorage.getItem("folder")) || [];
  savedFolders.forEach((folder, index) => {
    createFolderElement(folder.name, folder.contents, index);
  });
};

//FIX
function addFolder(){
    const name = prompt("Enter folder name:");
    // const color= 
    if (name) {
      const container = document.getElementById('folderContainer');
      const folderDiv = document.createElement('div');
      folderDiv.className = 'folder';
    //   const color = randomizeColor();
    //   const strokeColor = color
    //Perhaps a color picker


      folderDiv.innerHTML = `
      <svg class="folder-icon" width="100" height="80" viewBox="0 0 64 48" xmlns="http://www.w3.org/2000/svg">
      <path class="folder-tab" d="M4 12 H24 L28 16 H60 V44 H4 Z" fill="#FC5464" stroke="#c94350" stroke-width="2"/>
      <rect class="folder-body" x="4" y="16" width="56" height="28" fill="#FC5464" stroke="#c94350" stroke-width="2"/>
    </svg>
    <div class="folder-name">${name}</div>
  `;
  container.appendChild(folderDiv);
}
}


function createFolderElement(name, contents, index) {
  const container = document.getElementById('folderContainer');
  const folderDiv = document.createElement('div');
  folderDiv.className = 'folder';
  folderDiv.dataset.index = index;

  renderFolder(folderDiv, name, contents);
  container.appendChild(folderDiv);
}



//doesnt work yet:
function randomizeColor(){
        const r = Math.floor(Math.random() * 256);
        const g = Math.floor(Math.random() * 256);
        const b = Math.floor(Math.random() * 256);
        return `rgb(${r},${g},${b})`;
}