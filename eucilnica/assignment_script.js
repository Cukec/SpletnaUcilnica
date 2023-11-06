const dropArea = document.getElementById("drop-area");
const fileList = document.getElementById("file-list");

dropArea.addEventListener("dragover", function(event) {
  event.preventDefault();
  dropArea.classList.add("drag-over");
});

dropArea.addEventListener("dragleave", function(event) {
  event.preventDefault();
  dropArea.classList.remove("drag-over");
});

dropArea.addEventListener("drop", function(event) {
  event.preventDefault();
  dropArea.classList.remove("drag-over");

  const files = event.dataTransfer.files;
  handleFiles(files);
});

function handleFiles(files) {
  for (const file of files) {
    const listItem = document.createElement("div");
    listItem.textContent = file.name;
    fileList.appendChild(listItem);
  }

  // Prepare the files and send them to the server using FormData and fetch API.
  const formData = new FormData();
  for (const file of files) {
    formData.append("files[]", file);
  }

  // Send a POST request to the server using fetch.
  fetch("upload.php", {
    method: "POST",
    body: formData,
  })
    .then(response => response.json())  // Parse JSON response
    .then(data => {
      console.log(data);  // Handle the response from the server (if needed)
    })
    .catch(error => {
      console.error("Upload failed. Error: ", error);  // Handle errors (if any)
    });
}