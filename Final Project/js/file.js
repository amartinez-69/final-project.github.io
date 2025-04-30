function addFile(){
    const name = prompt("Enter file name:");
    // const color= 
    if (name) {
      const container = document.getElementById('fileContainer');
      const fileDiv = document.createElement('div');
      fileDiv.className = 'file';
    //   const color = randomizeColor();
    //   const strokeColor = color
    //Perhaps a color picker


      fileDiv.innerHTML = `
      <a href='file1.html'">
        <svg width="100" height="120" viewBox="0 0 100 120" xmlns="http://www.w3.org/2000/svg">
            <rect x="10" y="10" width="80" height="100" rx="5" ry="5" fill="#ffffff" stroke="#ccc" stroke-width="2"/>
            <polygon points="70,10 90,10 90,30" fill="#e0e0e0"/>
            <line x1="20" y1="40" x2="80" y2="40" stroke="#bbb" stroke-width="2"/>
            <line x1="20" y1="55" x2="80" y2="55" stroke="#bbb" stroke-width="2"/>
            <line x1="20" y1="70" x2="80" y2="70" stroke="#bbb" stroke-width="2"/>
        </svg>
    </a>
    <br>
    ${name}
    
  `;
  container.appendChild(fileDiv);
}
}